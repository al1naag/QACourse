<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$country = $_POST['country'];

$url = 'http://localhost:3000/students';

$ch = curl_init($url);

$jsonData = array(
    'name' =>  $name,
    'surname' =>  $surname,
    'email' =>  $email,
    'country' =>  $country,
);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$result = curl_exec($ch);
header("Location: $_SERVER[HTTP_REFERER]");
?>
