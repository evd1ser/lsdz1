<?php
session_start();
include_once './lib/config.php';
include_once './lib/function.php';
$myblogpost = [];
$query = "SELECT * FROM evd1ser.blog";
$res = SQLquer($query);

while($row = $res->fetch_assoc()) {
    $myblogpost[] = $row;
}

/*echo "<pre>";
//print_r($myblogpost);
echo "</pre>";*/