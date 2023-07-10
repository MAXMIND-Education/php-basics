<?php
//Show PHP errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Set default argument values</title>
    </head>
    <body>


    <?php
    
      function paint($room="office",$color="red") {
        return "The color of the {$room} is {$color}.<br />";
      }
    
      echo paint();
      echo paint("bedroom", "blue");
      echo paint("bedroom", null);
      echo paint("bedroom");

    
    ?>
        
        
        
    </body>
</html>

