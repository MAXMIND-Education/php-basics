
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While Loop</title>
    </head>
    <body>

        <?php
        $count = 0;
        while ($count <= 10) {

            echo $count . "<br />";

            $count++;  // increment by 1
        }
        echo "<br />";
        echo "Count: {$count}";
        ?>  

        <br />
        <br />
        <?php
        $count = 0;
        while ($count <= 10) {
            if ($count == 5) {
                echo "FIVE, ";
            } else {
                echo $count . ", ";
            }
            $count++;  // increment by 1
        }
        echo "<br />";
        ?>


    </body>
</html>