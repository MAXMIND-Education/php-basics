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
        <title>Working with File System</title>
    </head>
    <body>

    <?php
        // Magic constants
        //echo __DIR__ . '<br>';
        //echo __FILE__ . '<br>';
        //echo __LINE__ . '<br>';

        
        // Create directory
        //mkdir('test');        
        
        // Rename directory
        //rename('test', 'test2'); 
        
        
        // Delete directory
        //rmdir('test2');  
        
        // Read files and folders inside directory
        //echo file_get_contents('demo.txt');    
           
//        $files = scandir('./');
//        echo '<pre>';
//            var_dump($files);
//        echo '</pre>';  
        
        //file_put_contents('ex.txt', 'Some TEXT');
    
    
    // file_get_contents from URL
//    $jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
//    echo $jsonContent;

    // Check if file exists or not
    //echo file_exists('demo.txt'). '<br>'; // true

    // Get file size
    //echo filesize('demo.txt'). '<br>';

    // Delete file
    //unlink('demo.txt');


    ?>
    </body>
</html>

