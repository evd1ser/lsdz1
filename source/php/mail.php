<?php
date_default_timezone_set('Europe/Moscow');
require './PHPMailer/PHPMailerAutoload.php';
$message = '';


if ( isset ($_POST["data"]) ) {
    $json = $_POST["data"];
    $dataobj = json_decode($json, true);
    $today = date("Y-m-d H:i:s");


    $name = clearall($dataobj['name']);
    $email = clearall($dataobj['email']);
    $mytext = clearall($dataobj['message']);

    $message .= '<h3>Имя - <b>' . $name . '</b></h3><br>';
    $message .= '<h3>Почта - <b>' . $email . '</b></h3><br>';
    $message .= '<h3>Сообщение:</h3><br><br>';
    $message .= $mytext;

    $message .= '<hr>';
    $message .= 'Дата - ' . $today;
    if (isset($name) and isset($tel)){
        sender($tema . ' - ' . $today, $message);
    };
};




function sender($subject, $message) {
    $mail = new PHPMailer; // TCP port to connect to
    $mail->CharSet = 'utf-8';
    $mail->setFrom('zayavka@ipoteka.ru', 'С сайта');
    
    $mail->addAddress('MYEMAIL@SENDER.RU'); // Add a recipient

    $mail->isHTML(true); // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    if(!$mail->send()) {
        echo 'Сообщение не отправлено.';
        echo 'Ошибка отправки: ' . $mail->ErrorInfo;
    } else {
        echo 'Ваша заявка успешно получена';
    };
};


function clearall($str) {
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    $str = stripslashes($str);
    $str = addslashes($str);
    return $str;
};