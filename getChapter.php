<?php
require_once('config.php');
$sql = 'SELECT * FROM ' . substr(trim($_GET['subject']), 0, 2) . '_Chapter';