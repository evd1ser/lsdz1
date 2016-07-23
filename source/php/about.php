<?php
/**
 * Created by PhpStorm.
 * User: Evdokimov Sergey
 * Date: 23.07.2016
 * Time: 9:33
 */

$array = [
  "Frontend" => [
      "HTML5" => "90",
      "CSS" => "90",
      "JS" => "50"
  ],
  "Backend" => [
      "111" => "90",
      "222" => "90",
      "JS" => "50"
  ],
];
echo $array["Frontend"]["HTML5"];
$json = json_encode($array);
echo "<pre>";

print_r($json);

echo "</pre>";

$ar = json_decode($json);
echo "<pre>";

print_r($ar);

echo "</pre>";