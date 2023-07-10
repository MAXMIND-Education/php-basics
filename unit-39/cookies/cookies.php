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
        <title>Cookies</title>
    </head>
    <body>


        <?php
        // How to set cookies
        //setcookie('cookie Name', 'Value', Expire);
        //time() + 60 = From current time + 60 seconds
        //time() + (86400 * 30));  86400 = 1 day (The cookie will expire after 30 days)
        setcookie('name', 'Dilshan', time() + 60);

        // How to update cookie
        //setcookie('name', 'Kamal', time() + 2 * 60);
        
        
        // How to delete cookie
        //setcookie('name', 'Kamal', time() - 1);
        
        
        ?>



    </body>
</html>

