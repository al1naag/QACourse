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
  <form  method="POST"  action="add_student_course.php">
   <div class="container">
      <h3>Добавить студента на курс</h3>

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
      <select id="name_course" name="name_course">
        <option value="name_course">Выбрать курс</option>

        <?php
         #DB Connection

         $result=pg_query($dbconn, "SELECT courses.name_course  FROM courses");
         while ($row = pg_fetch_array($result))
         {
            ?>
            <option value="<?php  echo $row['name_course'];?>"><?php echo $row['name_course'];?></option>
  <?php
  }
  ?>
      </select>
     <button type="submit" name="submit" class="registerbtn">Добавить студента</button>
   </div>
  </form>
  <form  method="POST"  action="delete.php">
   <div class="container">
      <h3>Удалить студента с курса</h3>

      <select id="student_del" name="student_del">
        <option value="student_courses_id,name,surname,name_course">Выбрать студента</option>

        <?php

         $result=pg_query($dbconn, "SELECT students_courses.student_courses_id, students_courses.name, students_courses.surname, students_courses.name_course FROM students_courses");
         while ($row = pg_fetch_array($result))
         {
            ?>
            <option value="<?php echo $row['student_courses_id']." ".$row['name']." ".$row['surname']." ".$row['name_course'];?>"><?php echo $row['name']." ".$row['surname']." ".$row['name_course'];?></option>
  <?php
  }
  ?>
      </select>

     <button type="submit" name="submit" class="registerbtn">Удалить студента</button>
   </div>
  </form>
  <form  method="POST"  action="update_student_course.php">
   <div class="container">
     <h3>Изменить курс</h3>
     <select id="student" name="student">
       <option value="student_courses_id,name,surname,name_course">Выбрать студента</option>

       <?php
        #DB Connection

        $result=pg_query($dbconn, "SELECT students_courses.student_courses_id, students_courses.name, students_courses.surname, students_courses.name_course FROM students_courses");
        while ($row = pg_fetch_array($result))
        {
           ?>
           <option value="<?php echo $row['student_courses_id']." ".$row['name']." ".$row['surname']." ".$row['name_course'];?>"><?php echo $row['name']." ".$row['surname']." ".$row['name_course'];?></option>
  <?php
  }
  ?>
     </select>

     <select id="new_name_course" name="new_name_course">
       <option value="new_name_course">Выбрать новый курс</option>

       <?php

        $result=pg_query($dbconn, "SELECT courses.name_course  FROM courses");
        while ($row = pg_fetch_array($result))
        {
           ?>
           <option value="<?php echo $row['name_course'];?>"><?php echo $row['name_course'];?></option>
 <?php
 }
 ?>
     </select>

       <button type="submit" name="submit" class="registerbtn">Изменить курс</button>
   </div>
  </form>
  </div>
</div>
<?php
      // construct the query with our apikey and the query we want to make
      $endpoint = 'http://23.88.52.139:3001/students_js';
      // setup curl to make a call to the endpoint
      $session = curl_init($endpoint);
      // indicates that we want the response back
      curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
      // exec curl and get the data back
      $data = curl_exec($session);
      // remember to close the curl session once we are finished retrieveing the data
      curl_close($session);
      // decode the json data to make it easier to parse the php
      $search_results = json_decode($data, true);
      if ($search_results === NULL) die('Error parsing json');
      //print_r($search_results);

      echo '<h3>Список студентов на курсе JavaScript</h3><table> <tr>
       <th>Имя</th>
       <th>Фамилия</th>
       <th>Email</th>
       <th>Страна</th>
       <th>Создан</th>
      </tr>'
      ;
      foreach ($search_results as $coin) {

      $name = $coin["name"];
      $surname= $coin["surname"];
      $email= $coin["email"];
       $country= $coin["country"];
       $created_at= $coin["created_at"];


   echo '<tr><td>'.$name.'</td><td>'.$surname.'</td><td>'.$email.'</td><td>'.$country.'</td><td>'.$created_at.'</td></tr>';



      }
      echo '</table>';

?>
  </div>
</div>

<div class="footer">
  <p><b>Alina Lipova 2021</b></p>
</div>

</body>
</html>
