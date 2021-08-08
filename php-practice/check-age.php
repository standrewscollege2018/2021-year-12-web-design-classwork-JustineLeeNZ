<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check if eligible to vote</title>
  </head>
  <body>

    <?php
    // check if age exists in POST array
      if (isset($_POST['age'])) {

          // extract age from POST array
          $age = $_POST['age'];

          // display age entered
          echo "Your age is $age";

          // check if age is greater than 18 and display appropriate messages
        }
        else {
          echo "no value for age";
        }

     ?>

  </body>
</html>
