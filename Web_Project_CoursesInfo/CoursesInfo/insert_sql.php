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
    ),
    rows1 AS (INSERT INTO public.students_courses
          (student_id, name, surname, name_course)
        SELECT student_id, name, surname, 'SQL'
        FROM rows
        RETURNING student_id, name, surname)
    INSERT INTO public.payments (student_id, name, surname, name_course, payment)
            SELECT student_id, name, surname, 'SQL', '0'
            FROM rows1
            RETURNING student_id, name, surname, name_course;";
pg_query($conn, $query);
header("Location: $_SERVER[HTTP_REFERER]");
?>
