<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loops</title>
  </head>
  <body>

    <!-- simple do while loop -->

    <?php
    // set counter variable to starting value
      $counter = 10;

    // count down from starting value
      do {
        // display counter
        echo $counter;

        // decrease counter value by 1
         $counter = $counter - 1;

      } while ($counter >= 0);


     ?>

  </body>
</html>
