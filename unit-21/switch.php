
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch statements</title>
    </head>
    <body>
        
    <?php
      $a = 2;
      
      switch ($a) {
        case 0:
          echo "a equals 0<br />";
          break;
        case 1:
          echo "a equals 1<br />";
          break;
        case 2:
          echo "a equals 2<br />";
          break;
        case 3:
          echo "a equals 3<br />";
          break;
        default:
          echo "a is not 0, 1, 2, or 3<br />";
          break;
      }
    
    ?>        
        <br>
        <br>
   
 <?php // case with multiple values

      $user_type = 'customer';
      
      switch ($user_type) {
        case 'student':
          echo "Welcome!";
          break;
        case 'press':
        case 'customer':
        case 'admin':
          echo "Hello!";
          break;
      }
    
  ?>        
    

    </body>
</html>