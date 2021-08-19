<?php
$student_id = explode(" ", $_POST['student'])[0];
$email = $_POST['email'];
$surname_new = $_POST['surname_new'];
$name_new = $_POST['name_new'];
$country = $_POST['country'];
$data = array(
   'name' =>  $name_new,
   'surname' =>  $surname_new,
    'email' =>  $email,
    'country' =>  $country,
);

$data_json = json_encode($data);

$url = 'http://localhost:3000/students/'.$student_id;

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response  = curl_exec($ch);

print_r ($response);
header("Location: $_SERVER[HTTP_REFERER]");
?>
