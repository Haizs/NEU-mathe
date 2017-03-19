<?php
function hasGET($name)
{
    if (isset($_GET[$name]) && ($_GET[$name] != '')) return true;
    return false;
}

function sqlQuery($sql, $arr)
{
    global $dsn, $user, $pass;
    try {
        $dbh = new PDO($dsn, $user, $pass);
        $sth = $dbh->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute($arr);
        return (json_encode($sth->fetchAll()));
    } catch (PDOException $e) {
        http_response_code(500);
        die();
    }
}

if (!hasGET('subject') || (!hasGET('id') && !hasGET('template') && !hasGET('source'))) {
    http_response_code(400);
    die();
}
require_once('config.php');
if (hasGET('source')) {
    $source = explode(',', $_GET['source']);
    print_r(json_encode($source));
} else if (hasGET('template')) {

} else if (hasGET('id')) {
    $ids = array_map('intval', explode(',', $_GET['id']));
    $sql = 'SELECT * FROM ' . substr(trim($_GET['subject']), 0, 2) . '_ChoiceTable WHERE KnowledgeId IN (' . str_repeat('?,', count($ids) - 1) . '?) ORDER BY rand() LIMIT ' . (string)intval($_GET['count']);
    print_r(sqlQuery($sql, $ids));
}