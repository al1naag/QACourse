<!DOCTYPE html>

<html lang="en">
<head>
<title>Учет студентов на курсе</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  $host = "159.69.151.133";
  $port = "5056";
  $dbname = "db_19_lag";
  $user = "u_19_lag";
  $password = "123";
    $dbconn = pg_connect("host=159.69.151.133 port=5056 dbname=db_19_lag user=u_19_lag password=123")
      or die('Could not connect: ' . pg_last_error());
      ?>
  <style>
  tr:nth-child(even) {
  background-color: #f2f2f2;

  ;
  }
  </style>
<div class="header">
  <h1>Учет студентов на курсах</h1>
  <h2>Javascript, SQL, HTML, CSS, Python, Java</h2>
</div>

<div class="navbar">
  <a href="index.php">Главная</a>
  <a href="courses.php">Курсы</a>
  <a href="payments.php">Оплаты</a>
  <div class="dropdown">
    <button class="dropbtn">Студенты на курсах
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="course_js.php">Javascript</a>
      <a href="course_sql.php">SQL</a>
      <a href="course_html.php">HTML</a>
    <a href="course_css.php">CSS</a>
    <a href="course_python.php">Python</a>
    <a href="course_java.php">Java</a>
    </div>
  </div>
</div>
 <div class="row">

   <div class="main">
     <div class="row">
   <div class="column">
     <div class="card">
           <h3>Оплачено JS:</h3>
       <p align="center"> <?php

 $query = "SELECT sum(payment)
 FROM public.payments where name_course = 'JavaScript'";
 $result = pg_query($query) or die('Query failed: ' . pg_last_error());

 echo "<table align='center'>\n";
 while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
     echo "\t<tr>\n";
     foreach ($line as $col_value) {
         echo "\t\t<td  class='payment'>$col_value руб.</td>\n";
     }
     echo "\t</tr>\n";
 }
 echo "</table>\n";

 pg_free_result($result);
 ?>
 </p>
     </div>
   </div>

   <div class="column">
     <div class="card">
       <p><i class="fa1 fa-check"></i></p>
        <h3>Оплачено SQL</h3>
       <p align="center"> <?php


 $query = "SELECT sum(payment)
 FROM public.payments where name_course = 'SQL'";
 $result = pg_query($query) or die('Query failed: ' . pg_last_error());


 echo "<table align='center'>\n";
 while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
     echo "\t<tr>\n";
     foreach ($line as $col_value) {
         echo "\t\t<td  class='payment'>$col_value руб.</td>\n";
     }
     echo "\t</tr>\n";
 }
 echo "</table>\n";

 pg_free_result($result);

 ?></p>
     </div>
   </div>

  <div class="column">
     <div class="card">
       <p><i class="fa1 fa-check"></i></p>
        <h3>Оплачено HTML</h3>
       <p align="center"> <?php


 $query = "SELECT sum(payment)
 FROM public.payments where name_course = 'HTML'";
 $result = pg_query($query) or die('Query failed: ' . pg_last_error());


 echo "<table align='center'>\n";
 while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
     echo "\t<tr>\n";
     foreach ($line as $col_value) {
         echo "\t\t<td  class='payment'>$col_value руб.</td>\n";
     }
     echo "\t</tr>\n";
 }
 echo "</table>\n";

 pg_free_result($result);

 ?></p>
     </div>
   </div>

   <div class="column">
     <div class="card">
       <p><i class="fa1 fa-check"></i></p>
        <h3>Оплачено CSS</h3>
       <p align="center"> <?php

 $query = "SELECT sum(payment)
 FROM public.payments where name_course = 'CSS'";
 $result = pg_query($query) or die('Query failed: ' . pg_last_error());

 // Printing results in HTML
 echo "<table align='center'>\n";
 while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
     echo "\t<tr>\n";
     foreach ($line as $col_value) {
         echo "\t\t<td  class='payment'>$col_value руб.</td>\n";
     }
     echo "\t</tr>\n";
 }
 echo "</table>\n";

 pg_free_result($result);
 ?></p>
     </div>
   </div>

   <div class="column">
     <div class="card">
       <p><i class="fa1 fa-smile-o"></i></p>
        <h3>Оплачено Python</h3>
       <p align="center"> <?php

 $query = "SELECT sum(payment)
 FROM public.payments where name_course = 'Python'";
 $result = pg_query($query) or die('Query failed: ' . pg_last_error());

 echo "<table align='center'>\n";
 while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
     echo "\t<tr>\n";
     foreach ($line as $col_value) {
         echo "\t\t<td  class='payment'>$col_value руб.</td>\n";
     }
     echo "\t</tr>\n";
 }
 echo "</table>\n";

 pg_free_result($result);

 ?></p>
     </div>
   </div>

   <div class="column">
     <div class="card">
       <p><i class="fa1 fa-coffee"></i></p>
       <h3>Оплачено Java</h3>
       <p align="center"> <?php

 $query = "SELECT sum(payment)
 FROM public.payments where name_course = 'Java'";
 $result = pg_query($query) or die('Query failed: ' . pg_last_error());

 echo "<table align='center'>\n";
 while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
     echo "\t<tr>\n";
     foreach ($line as $col_value) {
         echo "\t\t<td  class='payment'>$col_value руб.</td>\n";
     }
     echo "\t</tr>\n";
 }
 echo "</table>\n";

 pg_free_result($result);

 ?></p>
     </div>
   </div>
 </div>


 <?php
     session_start();
     if (isset($_SESSION["student"]))
         echo "<p>Студент добавлен</p>";
 ?>
<div style="max-width: 300px; float:left;">
 <form  method="POST"  action="insert.php">
  <div class="container">
    <h3>Добавить нового студента</h3>
    <label for="name"><b>Имя</b></label>
    <input pattern="[A-Za-zА-Яа-яё ,.'-]+" type="text" placeholder="Введите имя" name="name" id="name" maxlength="50" required>
    <label for="surname"><b>Фамилия</b></label>
    <input pattern="[A-Za-zА-Яа-яё ,.'-]+" type="text" placeholder="Введите фамилию" name="surname" id="surname" maxlength="50" required>
    <label for="email"><b>Email</b></label>
    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" placeholder="Введите Email" name="email" id="email" maxlength="255" required>
    <label for="country"><b>Страна</b></label>
    <input pattern="[A-Za-zА-Яа-яё ,.'-]+" type="text" placeholder="Введите страну" name="country" id="country" maxlength="50" required>
      <button type="submit" name="submit" class="registerbtn">Добавить студента</button>
  </div>
</form>
<form  method="POST"  action="delete_student.php">
 <div class="container">
    <h3>Удалить студента</h3>

    <select id="student" name="student">
      <option value="student_id,name,surname">Выбрать студента</option>

      <?php
       #DB Connection

       $result=pg_query($dbconn, "SELECT students.student_id, students.name, students.surname FROM students");
       while ($row = pg_fetch_array($result))
       {
          ?>
          <option value="<?php echo $row['student_id']." ".$row['name']." ".$row['surname'];?>"><?php echo $row['name']." ".$row['surname'];?></option>
<?php
}
?>
    </select>
   <button type="submit" name="submit" class="registerbtn">Удалить студента</button>
 </div>
</form>
<form  method="POST"  action="update_student.php">
 <div class="container">
   <h3>Обновить информацию о студенте</h3>
   <select id="student" name="student">
     <option value="student_id,name,surname">Выбрать студента</option>

     <?php
      #DB Connection

      $result=pg_query($dbconn, "SELECT students.student_id, students.name, students.surname FROM students");
      while ($row = pg_fetch_array($result))
      {
         ?>
         <option value="<?php echo $row['student_id']." ".$row['name']." ".$row['surname'];?>"><?php echo $row['name']." ".$row['surname'];?></option>
<?php
}
?>
   </select>
   <label for="name_new"><b>Имя</b></label>
   <input pattern="[A-Za-zА-Яа-яё ,.'-]+" type="text" placeholder="Введите новое имя" name="name_new" id="name_new" maxlength="50" required>
   <label for="surname_new"><b>Фамилия</b></label>
   <input pattern="[A-Za-zА-Яа-яё ,.'-]+" type="text" placeholder="Введите новую фамилию" name="surname_new" id="surname_new" maxlength="50" required>
   <label for="email"><b>Email</b></label>
   <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" placeholder="Введите новый Email" name="email" id="email" required>
   <label for="country"><b>Страна</b></label>
   <input pattern="[A-Za-zА-Яа-яё ,.'-]+" type="text" placeholder="Введите новую страну" name="country" id="country" required>

     <button type="submit" name="submit" class="registerbtn">Обновить студента</button>
 </div>
</form>


</div>

    <div class="row">

      <div class="main">
        <div class="row">
      <div class="column1">
        <div class="card1">
          <p><i class="fa1 fa-user"></i></p>
          <h3>Последние 10 студентов</h3>

         <?php

    $query = 'SELECT name, surname, email, country
FROM public.students order by created_at desc limit 10';
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());

    echo "<table align='center'>
    <th style='padding: 15px; font-size: 15px'>Имя</th>
    <th style='padding: 15px; font-size: 15px'>Фамилия</th>
    <th style='padding: 15px; font-size: 15px'>Email</th>
    <th style='padding: 15px; font-size: 15px'>Страна</th>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td class='payment1'>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";


    pg_free_result($result);
    ?>
    </p>
        </div>
      </div>

      <div class="column1">
        <div class="card1">

           <h3>Последние 10 оплат</h3>
           <?php

    $query = "SELECT name, surname, name_course, payment, to_char(date_p, 'DD.MM.YYYY')
FROM public.payments where payment >0 order by date_p desc limit 10";
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());


    echo "<table align='center'>
    <th style='padding: 15px; font-size: 15px'>Имя</th>
    <th style='padding: 15px; font-size: 15px'>Фамилия</th>
    <th style='padding: 15px; font-size: 15px'>Курс</th>
    <th style='padding: 15px; font-size: 15px'>Оплата</th>
    <th style='padding: 15px; font-size: 15px'>Дата</th>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td class='payment1'>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";


    pg_free_result($result);

    ?></p>
        </div>
      </div>

      <div class="column1">
        <div class="card1">

           <h3>Долги</h3>
           <?php

    $query = 'SELECT students_courses.name, students_courses.surname, students_courses.name_course
FROM public.students_courses left join public.payments on students_courses.student_id=payments.student_id and students_courses.name_course=payments.name_course
where payment is null';
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());

    echo "<table align='center'>
    <th style='padding: 15px; font-size: 15px'>Имя</th>
    <th style='padding: 15px; font-size: 15px'>Фамилия</th>
    <th style='padding: 15px; font-size: 15px'>Курс</th>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td class='payment1'>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";

    pg_free_result($result);


    ?></p>
        </div>
      </div>
      <div class="column1">
        <div class="card1">

           <h3>Информация о курсах</h3>
          <?php

      $query = 'SELECT name_course, sum(payment), count(student_id) FROM public.payments group by name_course';
      $result = pg_query($query) or die('Query failed: ' . pg_last_error());

      echo "<table align='center'>
      <th style='padding: 15px; font-size: 15px;'>Курс</th>
      <th style='padding: 15px; font-size: 15px'>Оплата</th>
      <th style='padding: 15px; font-size: 15px'>Количество студентов</th>      \n";
      while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td class='payment1'>$col_value</td>\n";
        }
        echo "\t</tr>\n";
      }
      echo "</table>\n";

      pg_free_result($result);

      pg_close($dbconn);
      ?></p>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>

  <div class="footer">
    <p><b>Alina Lipova 2021</b></p>
  </div>

</body>
</html>
