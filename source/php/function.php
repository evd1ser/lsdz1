<?php

define("SALT", "KCMIzistTTmz#5oP?|Ou");
define("PASSHESH", "685dfe2933ab1d7b793ff5c5e876ae5b");

function clearall($str) {
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    $str = stripslashes($str);
    $str = addslashes($str);
    return $str;
};