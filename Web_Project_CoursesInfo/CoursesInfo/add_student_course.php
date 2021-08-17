
<?php

$student_id = explode(" ", $_POST['student'])[0];
$name = explode(" ", $_POST['student'])[1];
$surname = explode(" ", $_POST['student'])[2];
$name_course = $_POST['name_course'];


$url = 'http://localhost:3000/students_courses';

$ch = curl_init($url);

$jsonData = array(
   'student_id' =>  $student_id,
   'name' =>  $name,
   'surname' =>  $surname,
   'name_course' =>  $name_course,


);

$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$result = curl_exec($ch);
header("Location: $_SERVER[HTTP_REFERER]");
?>

<?php
$host = "159.69.151.133";
$port = "5056";
$dbname = "db_19_lag";
$user = "u_19_lag";
$password = "123";
$conn = pg_connect("host=159.69.151.133 port=5056 dbname=db_19_lag user=u_19_lag password=123");
$student_id = explode(" ", $_POST['student'])[0];
$name = explode(" ", $_POST['student'])[1];
$surname = explode(" ", $_POST['student'])[2];
$name_course = $_POST['name_course'];
$query = "INSERT INTO public.students_courses
      (student_id, name, surname, name_course)
  VALUES
      ('$student_id','$name', '$surname', '$name_course')";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>
