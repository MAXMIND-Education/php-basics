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
        <title>Return values from a function</title>
    </head>
    <body>

   <?php
//
//      function add($val1, $val2) {
//        $sum = $val1 + $val2;
//        return $sum;
//      }
//
//       add(3,4);
//       echo $sum;
      ?>

 <?php
     
      function add($val1, $val2) {
        $sum = $val1 + $val2;
        return $sum;
      }
    
      $result1 = add(3,4);
      echo $result1;
 
?>
        
        <hr>


    <?php

            //Return Multiple Values
            function greet($name) {
                echo 'Hello '.$name.'!';
                return [$name, strtoupper($name), strlen($name)];
                echo 'Bye '.$name.'!';
            }
            list($name, $capital_name, $name_length) = greet('Dilshan');
            echo 'Your name is '.$name.'.<br>';
            echo 'Your name is '.$capital_name.' in capitals.<br>';
            echo 'Your name is '.$name_length.' characters long.<br>';

    ?>

        
        
        
    </body>
</html>

