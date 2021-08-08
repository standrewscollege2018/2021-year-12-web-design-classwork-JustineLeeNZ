<?php
  include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student info example</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="content-container">
    <?php
      // get value of tutor ID from GET array
      $tutor_id = $_GET['tutor_id'];

      //
      $students_sql = "SELECT student.first_name, student.last_name, tutorgroup.name FROM student, tutorgroup WHERE student.tutorgroup_id=tutorgroup.tutorgroup_id AND tutorgroup.tutorgroup_id=$tutor_id";
      //
      $students_qry = mysqli_query($dbconnect, $students_sql);
      $students_aa = mysqli_fetch_assoc($students_qry);


      // display each student
    do {
      $firstname = $students_aa['first_name'];
      $lastname = $students_aa['last_name'];
      $tutorname = $students_aa['name'];

      ?>
      <div class="card">
        <p><?php echo "$firstname"; ?></p>
        <p><?php echo "$lastname"; ?></p>
        <p><?php echo "$tutorname"; ?></p>
      </div>
      <?php
    } while ($students_aa = mysqli_fetch_assoc($students_qry));
  ?>
</div> <!-- content-container -->

  </body>
</html>
