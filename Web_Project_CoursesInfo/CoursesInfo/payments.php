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
  <div>
  <style>
tr:nth-child(even) {
  background-color: #f2f2f2;
  ;
}
</style>
<div style="max-width: 300px; float:left;">

   <form  method="POST"  action="insert_payment.php">
   <div class="container">
      <h3>Добавить оплату</h3>

      <select id="student" name="student">
        <option value="student_id,name,surname">Выбрать студента</option>

        <?php
        

         $result=pg_query($dbconn, "SELECT students.student_id, students.name, students.surname FROM students");
         while ($row = pg_fetch_array($result))
         {
            ?>
            <option value="<? echo $row['student_id']." ".$row['name']." ".$row['surname'];?>"><?echo $row['student_id']." ".$row['name']." ".$row['surname'];?></option>
  <?
  }
  ?>
      </select>
      <select id="name_course" name="name_course">
        <option value="name_course">Выбрать курс</option>

        <?php


         $result=pg_query($dbconn, "SELECT courses.name_course  FROM courses");
         while ($row = pg_fetch_array($result))
         {
            ?>
            <option value="<? echo $row['name_course'];?>"><?echo $row['name_course'];?></option>
  <?
  }
  ?>
      </select>
      <label for="payment"><b>Сумма</b></label>
      <input pattern="[0-9]+"type="text" placeholder="Введите сумму" name="payment" id="payment" required>
     <button type="submit" name="submit" class="registerbtn">Добавить оплату</button>
   </div>
  </form>
  <form  method="POST"  action="delete_payment.php">
  <div class="container">
     <h3>Удалить оплату</h3>

     <select id="student" name="student">
       <option value="student_id,name,surname">Выбрать студента</option>

       <?php


        $result=pg_query($dbconn, "SELECT students.student_id, students.name, students.surname FROM students");
        while ($row = pg_fetch_array($result))
        {
           ?>
           <option value="<? echo $row['student_id']." ".$row['name']." ".$row['surname'];?>"><?echo $row['student_id']." ".$row['name']." ".$row['surname'];?></option>
 <?
 }
 ?>
     </select>
     <select id="name_course" name="name_course">
       <option value="name_course">Выбрать курс</option>

       <?php


        $result=pg_query($dbconn, "SELECT courses.name_course  FROM courses");
        while ($row = pg_fetch_array($result))
        {
           ?>
           <option value="<? echo $row['name_course'];?>"><?echo $row['name_course'];?></option>
 <?
 }
 ?>
     </select>

    <button type="submit" name="submit" class="registerbtn">Удалить оплату</button>
  </div>
 </form>
</div>
</div>
   <?php

$query = "SELECT name, surname, payments.name_course,  payment, price_course, to_char(date_p, 'DD.MM.YYYY') FROM payments left outer join courses on payments.name_course = courses.name_course order by date_p DESC";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<table style='width:700px'>
<h3>Список оплат</h3>\n";
echo "<tr style='text-align:left'>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Курс</th>
    <th>Сумма оплаты</th>
    <th>Цена курса</th>
    <th>Дата оплаты</th>
   </tr>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr >\n";
    foreach ($line as $col_value) {

        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

pg_free_result($result);

pg_close($dbconn);
?>
  </div>
</div>

<div class="footer">
  <p><b>Alina Lipova 2021</b></p>
</div>

</body>
</html>
