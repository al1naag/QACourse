<?php
$host = "159.69.151.133";
$port = "5056";
$dbname = "db_19_lag";
$user = "u_19_lag";
$password = "123";
$conn = pg_connect("host=159.69.151.133 port=5056 dbname=db_19_lag user=u_19_lag password=123");
$name = (int)$_POST['name'];
$surname = (int)$_POST['surname'];
$name_course = (int)$_POST['name_course'];
$query = "DELETE FROM public.students_courses WHERE name='$name' and surname='$surname' and name_course='$name_course'";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>