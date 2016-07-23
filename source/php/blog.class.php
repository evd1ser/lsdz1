<?php
session_start();
/*
 * Load lib
 */
include_once './lib/config.php';
include_once './lib/function.php';

class Blog {
    // объявление метода
    public function get_blogposts(){
        $myblogpost = [];
        $query = "SELECT * FROM evd1ser.blog";
        $res = SQLquer($query);

        while($row = $res->fetch_assoc()) {
            $myblogpost[] = $row;
        }
        return $myblogpost;
    }

    public function addpost($title, $date, $text){
        $title = clearall($title);
        $date = clearall($date);
        $text = htmlentities($text, ENT_NOQUOTES, 'UTF-8');
        $slug = str2url($title);
        $query = "INSERT INTO evd1ser.blog(blog_title, blog_date, blog_text, blog_slug) VALUES ('$title', '$date', '$text', '$slug')";
        $res = SQLquer($query);
        return $res;
    }
}


if( isset( $_GET['addpost'])  and ( isset ($_POST["data"]) ) ){
    $json = $_POST["data"];
    $dataobj = json_decode($json, true);

    $blogtitle = $dataobj['title'];
    $blogdate = $dataobj['blogdate'];
    $blogtext = $dataobj['blogtext'];
    $blog = new Blog();
    $blog->addpost($blogtitle, $blogdate, $blogtext);
    echo 'Публикация успешно добавлена!';
}