<?php
session_start();
/*
 * Load lib
 */
include_once './lib/config.php';
include_once './lib/function.php';

if (isset($_GET['slug'])){
    //single page
    $query = "SELECT * FROM evd1ser.blog WHERE ";
    $res = SQLquer($query);
    echo $_GET['slug'];
}