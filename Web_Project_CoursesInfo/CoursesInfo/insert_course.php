<?php
//POST DATA
$name_course = $_POST['name_course'];
$price_course = $_POST['price_course'];
//API Url
$url = 'http://localhost:3000/courses';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'name_course' =>  $name_course,
    'price_course' =>  $price_course
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);
header("Location: $_SERVER[HTTP_REFERER]");
?>
