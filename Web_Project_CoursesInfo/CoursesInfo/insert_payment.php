<?php
$host = "159.69.151.133";
$port = "5056";
$dbname = "db_19_lag";
$user = "u_19_lag";
$password = "123";
$conn = pg_connect("host=159.69.151.133 port=5056 dbname=db_19_lag user=u_19_lag password=123");
$name = $_POST['name'];
$surname = $_POST['surname'];
$name_course = $_POST['name_course'];
$payment = $_POST['payment'];
$query = "UPDATE public.payments SET (name,  surname, name_course, payment) = ('$name','$surname','$name_course','$payment')
where
name='$name' and surname='$surname' and name_course='$name_course'";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>
