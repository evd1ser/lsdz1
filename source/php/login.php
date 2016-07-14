<?php
session_start();
include_once './lib/config.php';
include_once './lib/function.php';

if ( isset ($_POST["data"]) ) {
    $json = $_POST["data"];
    $dataobj = json_decode($json, true);

    $login = clearall($dataobj['login']);
    $password = clearall($dataobj['password']);

    if ($login == 'evd1ser' and md5(SALT . $password) == PASSHESH){
        $_SESSION['login'] = $login;
        $result = [
            "status" => "okey",
            "url" => "admin.php"
        ];
    } else {
        $result = [
            "status" => "err"
        ];
    };

    $result = json_encode($result);

    echo $result;
};
