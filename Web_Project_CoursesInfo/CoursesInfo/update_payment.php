<?php

$student_id = explode(" ", $_POST['student_p'])[0];
$payment_id = explode(" ", $_POST['student_p'])[1];
$name = explode(" ", $_POST['student_p'])[2];
$surname = explode(" ", $_POST['student_p'])[3];
$name_course = explode(" ", $_POST['student_p'])[4];
$payment = $_POST['payment'];

$data = array(
  'student_id' =>  $student_id,
   'name' =>  $name,
   'surname' =>  $surname,
   'name_course' =>  $name_course,
   'payment' =>  $payment,

);
$data_json = json_encode($data);

$url = 'http://localhost:3000/payments/'.$payment_id;

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
