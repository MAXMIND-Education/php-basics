<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Type juggling and casting</title>
    </head>
    <body>

    Type Juggling<br />
    <?php $count = "2 cats"; ?>
    Type: <?php echo gettype($count); ?><br /> 
        
    <?php $count += 3; ?>
    Type: <?php echo gettype($count); ?><br /> 
    

    <br /> <br /> 
    Type Casting<br />
    <?php $Change = "2"; ?>
    <?php settype($Change, "int"); //int, string, flot, double ?>
    count: <?php echo gettype($Change); ?><br />

    
    </body>
</html>