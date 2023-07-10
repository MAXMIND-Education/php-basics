<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strings Functions</title>
    </head>
    <body>

        <?php
        
            $first = "My sweet little brother";
            $second = " jumped over his little chair.";
            $third = $first;
            $third .= $second;            
            echo $third;
        ?>

          <br />
            Lowercase: <?php echo strtolower($third); ?><br />
            Uppercase: <?php echo strtoupper($third); ?><br />
            Uppercase first: <?php echo ucfirst($third); ?><br />
            Uppercase words: <?php echo ucwords($third); ?><br />
         <br />
  
        <br />
            Length: <?php echo strlen($first); ?><br />
            Trim: <?php echo trim($first, "My sweet"); ?><br />
            Find: <?php echo strstr($first, "sweet"); ?><br />
            Replace by string: <?php echo str_replace("little", "big", $third); ?><br />
        <br />  
        
        <br />
        Repeat: <?php echo str_repeat($third, 2); ?><br />
        Make substring: <?php echo substr($third, 5, 10); ?><br />
        Find position: <?php echo strpos($third, "sweet"); ?><br />
        Find character: <?php echo strchr($third, "c"); ?><br />        
        
        
    </body>
</html>