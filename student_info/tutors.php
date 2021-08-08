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
      $tutors_sql = "SELECT tutorgroup_id, name, room FROM tutorgroup";
      $tutors_qry = mysqli_query($dbconnect, $tutors_sql);
      $tutors_aa = mysqli_fetch_assoc($tutors_qry);



      do {
        $tutor_id = $tutors_aa['tutorgroup_id'];
        $tutor_name = $tutors_aa['name'];
        $tutor_room = $tutors_aa['room'];
        ?>
        <div class="card">
          <p><?php echo "<a href='students.php?tutor_id=$tutor_id'>$tutor_name</a>"; ?></p>
          <p><?php echo $tutor_room; ?></p>
        </div>
        <?php
      } while ($tutors_aa = mysqli_fetch_assoc($tutors_qry));
    ?>


    </div>
  </body>
</html>
