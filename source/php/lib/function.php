<?php
include('config.php');
function clearall($str) {
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    $str = stripslashes($str);
    $str = addslashes($str);
    return $str;
};

function SQLquer($query) {
	$mysqli = mysqli_connect(HOSTNAME, DBUSER, DBPASS, DBNAME);
    $res = $mysqli->query($query);
	$mysqli->close();
	return $res;
}