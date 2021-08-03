<?php
$host = "159.69.151.133";
$port = "5056";
$dbname = "db_19_lag";
$user = "u_19_lag";
$password = "123";
$conn = pg_connect("host=159.69.151.133 port=5056 dbname=db_19_lag user=u_19_lag password=123");
$query = "WITH rows AS (
    INSERT INTO public.students
        (name, surname, email, country)
    VALUES
        ('$_POST[name]','$_POST[surname]',
        '$_POST[email]','$_POST[country]')
    RETURNING student_id, name, surname
)

INSERT INTO public.students_courses (student_id, name, surname, name_course)
    SELECT student_id, name, surname, 'HTML'
    FROM rows
    RETURNING student_id, name, surname;";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>
