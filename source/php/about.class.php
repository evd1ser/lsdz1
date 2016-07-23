<?php
/**
 * Created by PhpStorm.
 * User: Evdokimov Sergey
 * Date: 23.07.2016
 * Time: 9:33
 */

include_once './lib/config.php';
include_once './lib/function.php';

class Skill {

    public function addskill($json){
        $query = "UPDATE evd1ser.about SET about_skillvalue='$json'
WHERE about_id = '1'";
        $res = SQLquer($query);
        return $res;
    }

    public function getskill(){
        $query = "SELECT * FROM evd1ser.about WHERE about_id = '1'";
        $res = SQLquer($query);
        $json = $res->fetch_assoc();
        return json_decode($json['about_skillvalue']);
    }
}

if( isset( $_GET['addskill'])  and ( isset ($_POST["data"]) ) ){
    $json = $_POST["data"];
    $json = stripslashes($json);

    $skill = new Skill();
    $res = $skill->addskill($json);
    if ($res) {
        echo 'Навыки успешно обновлены!';
    } else {
        echo 'Ошибка обновления!';
    }
}

//
//echo $array["Frontend"]["HTML5"];
//$json = json_encode($array);
//echo "<pre>";
//
//print_r($json);
//echo "<hr>";
//print_r(clearall($json));
//
//echo "</pre>";
//
//$ar = json_decode($json);
