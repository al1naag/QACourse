
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
$query = "DELETE FROM public.students_courses WHERE student_id='$student_id' and name_course='$name_course'";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>
