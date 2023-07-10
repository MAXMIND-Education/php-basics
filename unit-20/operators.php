
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comparison and Logical operators</title>
    </head>
    <body>
        
        
    <?php
      $a = 4;
      $b = 3;
      $c = 1;
      $d = 20;
      if (($a > $b) && ($c > $d)) {
        echo "a is larger than b OR ";
        echo "c is larger than d";
      } else {
          echo "No output";
      }
    ?>
    <br />

    <?php
      
      $quantity = "";
      if (empty($quantity) && !is_numeric($quantity)) {
        echo "You must enter a quantity.";
      } else {
          echo "Thank You.";
      }
    ?>
    

    </body>
</html>