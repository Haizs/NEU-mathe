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
    $source = explode(',', trim(trim($_GET['source']), ','));
    foreach ($source as &$name) {
        $name = str_replace('.zip', '', $name);
    }
    $sql = 'SELECT * FROM ' . substr(trim($_GET['subject']), 0, 2) . '_ChoiceTable WHERE Name IN (' . str_repeat('?,', count($source) - 1) . '?)';
    echo(sqlQuery($sql, $source));
} else if (hasGET('template')) {
    $template = explode(',', trim(trim($_GET['template']), ','));
    $sql = '';
    $arr = array();
    foreach ($template as $tmp) {
        $t = explode('_', $tmp);
        $sql .= 'UNION ( SELECT * FROM ' . substr(trim($_GET['subject']), 0, 2) . '_ChoiceTable WHERE KnowledgeId=? AND Type=? ORDER BY rand() LIMIT ' . (string)intval($t[2]) . ' ) ';
        $arr = array_merge($arr, array($t[0], $t[1]));
    }
    echo(sqlQuery(trim(trim($sql), 'UNION'), $arr));
} else if (hasGET('id')) {
    $ids = array_map('intval', explode(',', $_GET['id']));
    $sql = 'SELECT * FROM ' . substr(trim($_GET['subject']), 0, 2) . '_ChoiceTable WHERE KnowledgeId IN(' . str_repeat(' ?,', count($ids) - 1) . ' ?)';
    if (hasGET('zen') && trim($_GET['zen']) == '1') $sql .= ' ORDER BY KnowledgeId,Type';
    else $sql .= ' ORDER BY rand() LIMIT ' . (string)intval($_GET['count']);
    echo(sqlQuery($sql, $ids));
}