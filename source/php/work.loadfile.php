<?php

include_once './lib/config.php';
include_once './lib/function.php';
// Здесь нужно сделать все проверки передаваемых файлов и вывести ошибки если нужно

// Переменная ответа

$data = array();

if( isset( $_GET['uploadfiles'] ) ){
    $error = false;
    $files = array();
    $uploaddir = './uploads/';
    $today = date("Y-m-d_H-i-s_");


    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

    // переместим файлы из временной директории в указанную
    foreach( $_FILES as $file ){
        $file_name = basename($file['name']);
        $file_type = substr($file_name, strrpos($file_name, '.')+1);
        $filename = $today . str2url( $file_name ) . '.' . $file_type;

        if( move_uploaded_file( $file['tmp_name'], $uploaddir . $filename ) ){
            $files[] = $filename;
        }
        else{
            $error = true;
        }
    }

    $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );

    echo json_encode( $data );
}