<?php
//Show PHP errors
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dates</title>
    </head>
    <body>

        <?php

            // Print current date
            echo date('Y-m-d H:i:s') . '<br>';

            // Print yesterday
            echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';
            
            // Different format: https://www.php.net/manual/en/function.date.php
           echo date('F j Y, H:i:s') . '<br>';           
            
            // Print current timestamp
            echo time() . '<br>';        
            
            date_default_timezone_set("Asia/Colombo");
            echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s"). '<br>';
            
            // Parse date: https://www.php.net/manual/en/function.date-parse.php
            $dateString = '2020-02-06 12:45:35';
            $parsedDate = date_parse($dateString); 
            echo '<pre>';
            var_dump($parsedDate);
            echo '</pre>';            
                       
?>
        

    </body>
</html>

