
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>For Each Loop</title>
    </head>
    <body>


        <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
            echo "$value <br>";
        }
        ?>       
        <hr>
        <?php
        $ages = array(4, 8, 15, 16, 23, 42);

        foreach ($ages as $age) {
            echo "Age: {$age}<br />";
        }
        ?>

<hr>
        <?php
        $person = array(
            "first_name" => "Dilshan",
            "last_name" => "Maduranga",
            "address" => "No 697 Galle Rd Kalutara South",
            "city" => "Kalutara South",
            "state" => "WP",
            "zip_code" => "12000"
        );

        foreach ($person as $key => $value) {
            $keyname = ucwords(str_replace("_", " ", $key));
            echo "{$keyname}: {$value}<br />";
        }
        ?>        



    </body>
</html>