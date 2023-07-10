
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IF Statements</title>
    </head>
    <body>

    <?php
      $a = 5;
      $b = 4;
      
      if ($a > $b) {
        echo "a is larger than b";
      }
      
      ?>

    <br />
    <?php // Only welcome new users
      $new_user = true;
      if ($new_user) {
        echo "<h1>Welcome!</h1>";
        echo "<p>We are glad you decided to join us.</p>";
      }
    ?>
    <br />
    

    </body>
</html>