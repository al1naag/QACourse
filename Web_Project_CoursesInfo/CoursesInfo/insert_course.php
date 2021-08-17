<?php

$name_course = $_POST['name_course'];
$price_course = $_POST['price_course'];

$url = 'http://localhost:3000/courses';


$ch = curl_init($url);

$jsonData = array(
    'name_course' =>  $name_course,
    'price_course' =>  $price_course
);


$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$result = curl_exec($ch);
header("Location: $_SERVER[HTTP_REFERER]");
?>
