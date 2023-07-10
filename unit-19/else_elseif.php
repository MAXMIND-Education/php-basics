
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>else and elseif statements</title>
    </head>
    <body>

    <?php
      $a = 5;
      $b = 4;
      
      if ($a > $b) {
          
        echo "a is larger than b";
        
      }elseif ($a < $b) {
        
         echo "a is smaller than b";
         
      } else {
          
         echo "a is equal to b"; 
         
      }

    
    ?>
    

    </body>
</html>