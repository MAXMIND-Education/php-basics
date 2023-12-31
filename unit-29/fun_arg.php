
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Function arguments</title>
    </head>
    <body>

        <?php

        function say_hello_to($word) {
            echo "Hello {$word}!<br />";
        }

        $name = "Dilshan Maduranga";
        say_hello_to($name);
        ?>
        <hr>

        <?php

            function better_hello($greeting, $target, $punct) {
                echo $greeting . " " . $target . $punct . "<br />";
            }

            better_hello("Hello", $name, "!");
            better_hello("Greetings", $name, "!!!");
            better_hello("Greetings", $name, null);
            
        ?>


    </body>
</html>

