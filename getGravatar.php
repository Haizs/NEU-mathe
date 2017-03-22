<?php
if ($data = @file_get_contents("https://www.gravatar.com/avatar/" . $_GET['hash'] . '?s=' . $_GET['s'])) {
    header('Content-type: image/jpeg');
    echo $data;
}