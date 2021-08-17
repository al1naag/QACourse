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
