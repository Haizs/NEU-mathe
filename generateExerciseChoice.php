<?php
if ($data = @file_get_contents("http://202.118.26.80/WebService/generateExerciseChoice.ashx?" . $_SERVER['QUERY_STRING']))
{
    echo $data;
}
else
{
    $id = explode(',', trim($_GET['Id'], ','));
    $dataSource = $_GET['DataSource'];
    if ($dataSource == '高等数学_GS') $fname = 'GS.csv';
    if ($dataSource == '概率统计_GL') $fname = 'GL.csv';
    if ($dataSource == '复变函数_FB') $fname = 'FB.csv';
    if (!$fname) return ;
    $csvFile = file('./' . $fname);
    $qName = [];
    foreach ($csvFile as $line)
    {
        $data = str_getcsv($line);
        if (in_array($data[0], $id)) $qName[] = $data;
    }
    shuffle($qName);
    $c=min(25, count($qName));
    $text = "";
    for ($i = 0; $i < $c; $i++)
    {
        $text = $text . $qName[$i][1] . ',';
    }
    echo $text;
}
?>