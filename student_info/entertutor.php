<?php
  include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student info demo</title>
  </head>
  <body>
    <?php
    //  get info from POST array
    $name = $_POST['name'];
    $room = $_POST['room'];

    // create and run INSERT query
    // create query
    $newtutor_sql = "INSERT INTO tutorgroup(name, room) VALUES ('$name', '$room')";
    // run INSERT
    if(mysqli_query($dbconnect,$newtutor_sql)) {

      echo "<p>Records inserted successfully</p>";
      echo "<a href='tutors.php'>Show All tutors</a>";
    }
    else {
      echo "ERROR: could not execute $newtutor_sql.".mysqli_error($dbconnect);
    }





     ?>



  </body>
</html>
