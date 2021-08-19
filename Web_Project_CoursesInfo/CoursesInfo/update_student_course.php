<?php
$student_courses_id = explode(" ", $_POST['student'])[0];
$name = explode(" ", $_POST['student'])[1];
$surname = explode(" ", $_POST['student'])[2];
$name_course = explode(" ", $_POST['name_course'])[3];
$new_name_course = $_POST['new_name_course'];
$data = array(

   'name' =>  $name,
   'surname' =>  $surname,
    'name_course' =>  $new_name_course,
);

$data_json = json_encode($data);

$url = 'http://localhost:3000/students_courses/'.$student_courses_id;

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
