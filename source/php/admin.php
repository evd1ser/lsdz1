<?php
session_start();

if (!$_SESSION['login'] == 'evd1ser'){
    header('Location: /login.html');
    exit;
};
echo $_SESSION['login'];