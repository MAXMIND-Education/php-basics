<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Constants</title>
    </head>
    <body>

    <?php       
      define("MAX_WIDTH", 980);
      echo MAX_WIDTH;
    ?>
        
        <br>
        
    <?php // can't even redefine it
        define("MAX_WIDTH", 981);
        echo MAX_WIDTH;
    ?>        
     <br>   
<?php
        define("GREETING", "Welcome to MAXMIND.LK!");

        function myTest() {
          echo GREETING;
        }

        myTest();
?>

        
    </body>
</html>