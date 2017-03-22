<?php
require_once('config.php');
$input = json_decode(file_get_contents('php://input'), true);
if (!isset($input['email']) || !preg_match($re_email, $input['email'])
    || !isset($input['password']) || !preg_match($re_password, $input['password'])
) {
    echo(json_encode(array('error' => true, 'message' => '验证失败')));
    die();
}
try {
    $sql = 'SELECT nickname,password FROM user WHERE email=?';
    $dbh = new PDO($dsn, $user, $pass);
    $sth = $dbh->prepare($sql);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute(array(strtolower($input['email'])));
    $row = $sth->fetch();
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
if (password_verify($input['password'], $row['password'])) {
    $arr = array('error' => false, 'nickname' => $row['nickname']);
    setcookie('username', $input['email'], time() + 2592000, '', '', $cookie_secure, true);
    setcookie('user_token', password_hash(md5($row['password']), PASSWORD_DEFAULT), time() + 2592000, '', '', $cookie_secure, true);
} elseif (is_array($row)) {
    $arr = array('error' => true, 'message' => '密码错误');
} else {
    $arr = array('error' => true, 'message' => '账号不存在');
}
echo(json_encode($arr));