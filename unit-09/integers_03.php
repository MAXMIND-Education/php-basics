<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Integers</title>
    </head>
    <body>

        <?php
        $var1 = 3;
        $var2 = 50;
        $var3 = 40;
        $var4 = 60;
        ?>

    <br />
        Increment: <?php $var2++; echo $var2; ?><br />
        Decrement: <?php $var3--; echo $var3; ?><br />
    <br />

        <?php
            // PHP will convert a string to an integer
            // but it is sloppy programming
            echo 1 + "2 houses";
        ?>

    </body>
</html>