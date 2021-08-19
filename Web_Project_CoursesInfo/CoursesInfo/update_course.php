<?php
$course_id = explode(" ", $_POST['course_upd'])[0];
$name_course = explode(" ", $_POST['course_upd'])[1];
$new_name_course = $_POST['new_name_course'];
$new_price_course = $_POST['new_price_course'];
$data = array(
    'name_course' =>  $new_name_course,
    'price_course' =>  $new_price_course,
);

$data_json = json_encode($data);

$url = 'http://localhost:3000/courses/'.$course_id;

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
