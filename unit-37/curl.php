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
        <title>cURL</title>
    </head>
    <body>


      <?php
      

        //URL from which to get webpage contents.
        //Identify the url you wish to communicate with and save it in a variable if you want.
       $url = "https://jsonplaceholder.typicode.com/users";
//
//        // Initialize a curl session or simply put create a new curl resource:
//        $newCurl = curl_init();
//
//        //grab URL and pass it to the variable.
//        //Tell PHP which url file you wish to return. We will return our earlier identified URL contents.
//        curl_setopt($newCurl, CURLOPT_URL, $url);
//
//        // Return Page contents.
//        curl_setopt($newCurl, CURLOPT_RETURNTRANSFER, true);
//
//        $output = curl_exec($newCurl);
//
//        echo $output. '<br>';
//
//        //// Get HTTP response status code
//        $responseCode = curl_getinfo($newCurl, CURLINFO_HTTP_CODE);
//        echo $responseCode;
        
        
      ?>
        
<?php

        // Create User on the API
        $user = [
            'name' => 'Dilshan Maduranga',
            'username' => 'dilshan',
            'email' => 'dilshan@maxmind.lk'
        ];

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($user),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ]);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;


?>
        
    </body>
</html>

