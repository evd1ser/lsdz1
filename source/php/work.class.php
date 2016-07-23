<?php
session_start();
/*
 * Load lib
 */
include_once './lib/config.php';
include_once './lib/function.php';

class Work {
    // объявление метода
    public function get_works(){
        $works = [];
        $query = "SELECT * FROM evd1ser.works";
        $res = SQLquer($query);

        while($row = $res->fetch_assoc()) {
            $works[] = $row;
        }
        return $works;
    }
    public function addworks($title, $technologies, $link, $img){
        $title = clearall($title);
        $technologies = clearall($technologies);
        $link = clearall($link);
        $img = clearall($img);
        $query = "INSERT INTO evd1ser.works (works_title, works_technologies, works_link, works_img) VALUES ('" . $title . "', '" . $technologies . "', '" . $link . "', '" . $img . "')";
        $res = SQLquer($query);
        return $res;
    }
}

if( isset( $_GET['addwork'])  and ( isset ($_POST["data"]) ) ){
    $json = $_POST["data"];
    $dataobj = json_decode($json, true);

    $title = clearall($dataobj['title']);
    $technologies = clearall($dataobj['technologies']);
    $link = clearall($dataobj['link']);
    $img = clearall($dataobj['img']);
    $work = new Work();
    $work->addworks($title, $technologies, $link, $img);
    echo 'Работа успешно добавлена!';
}