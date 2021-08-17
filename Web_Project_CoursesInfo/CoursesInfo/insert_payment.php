 <?php

$student_id = explode(" ", $_POST['student'])[0];
$name = explode(" ", $_POST['student'])[1];
$surname = explode(" ", $_POST['student'])[2];
$name_course = $_POST['name_course'];
$payment = $_POST['payment'];

$url = 'http://localhost:3000/payments';

$ch = curl_init($url);

$jsonData = array(
    'student_id' =>  $student_id,
    'name' =>  $name,
    'surname' =>  $surname,
    'name_course' =>  $name_course,
    'payment' =>  $payment,

);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$result = curl_exec($ch);
header("Location: $_SERVER[HTTP_REFERER]");
?>
