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
        <title>Function Scope</title>
    </head>
    <body>


        <?php
//        $x = 5; // global scope
//
//        function myTest() {
//          // using x inside this function will generate an error
//          echo "<p>Variable x inside function is: $x</p>";
//        }
//        myTest();
//
//        echo "<p>Variable x outside function is: $x</p>";
        ?>
        
        <hr>
        
        <?php

        function myTest2() {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
        }

        myTest2();

        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";
        
        ?>


    </body>
</html>

