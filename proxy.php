<?php
$remoteURL = "http://202.118.26.80/WebService/";
echo file_get_contents($remoteURL . $_SERVER['QUERY_STRING']);
?>