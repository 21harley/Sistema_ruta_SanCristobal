<?php
session_start();
session_destroy();
$url="Location: ../../Views/Home/Home.php";
header($url);
die();