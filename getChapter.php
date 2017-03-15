<?php
if (!isset($_GET['subject'])) {
    http_response_code(400);
    die();
}
require_once('config.php');
try {
    $dbh = new PDO($dsn, $user, $pass);
    $sql = 'SELECT * FROM ' . substr(trim($_GET['subject']), 0, 2) . '_Chapter ORDER BY Id ASC';
    $sth = $dbh->prepare($sql);
    $sth->execute();
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
$sth->setFetchMode(PDO::FETCH_ASSOC);
$chapters = array();
$pointer = array();
$pointer[0] =& $chapters;
while ($row = $sth->fetch()) {
    $pid = intval($row['Pid']);
    $pointer[$pid][] = array('id' => intval($row['Id']), 'name' => $row['Name'], 'children' => array());
    $pointer[intval($row['Id'])] =& $pointer[$pid][count($pointer[$pid]) - 1]['children'];
}
echo str_replace(',"children":[]', '', json_encode($chapters));