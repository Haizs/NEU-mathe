<?php
$input = json_decode(file_get_contents('php://input'), true);
if (!isset($input['email']) || !preg_match("/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/i", $input['email'])
    || !isset($input['password']) || !preg_match("/^[!-~]{6,}$/i", $input['password'])
) {
    echo(json_encode(array('error' => true, 'message' => '验证失败')));
    die();
}
require_once('config.php');
try {
    $sql = 'SELECT nickname,password,salt FROM user WHERE email=?';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute(array($input['email']));
    $row = $sth->fetch();
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
if ($row['password'] == crypt($input['password'], $row['salt'])) {
    $arr = array('error' => false, 'nickname' => $row['nickname']);
    setcookie('username', $input['email'], time() + 2592000);
    setcookie('user_token', md5(crypt($row['password'], $row['salt'])), time() + 2592000);
} elseif (is_array($row)) {
    $arr = array('error' => true, 'message' => '密码错误');
} else {
    $arr = array('error' => true, 'message' => '账号不存在');
}
echo(json_encode($arr));