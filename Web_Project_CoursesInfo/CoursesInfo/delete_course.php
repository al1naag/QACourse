
<?php
$course_id = explode(" ", $_POST['course_del'])[0];

$url = 'http://localhost:3000/courses/'.$course_id;

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response  = curl_exec($ch);

curl_close($ch);

print_r ($response);
header("Location: $_SERVER[HTTP_REFERER]");
?>
