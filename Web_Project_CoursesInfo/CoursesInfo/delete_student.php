
<?php
$host = "159.69.151.133";
$port = "5056";
$dbname = "db_19_lag";
$user = "u_19_lag";
$password = "123";
$conn = pg_connect("host=159.69.151.133 port=5056 dbname=db_19_lag user=u_19_lag password=123");
$student_id = explode(" ", $_POST['student'])[0];
$query = "DELETE FROM public.students WHERE student_id='$student_id'";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>
