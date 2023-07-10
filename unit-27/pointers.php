
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pointers</title>
    </head>
    <body>


        <?php
        $ages = array(4, 8, 15, 16, 23, 42);

        // current: current pointer value
        echo "1: " . current($ages) . "<br />";

        // next: move the pointer forward
        // similar to using 'continue' inside a loop
        next($ages);
        echo "2: " . current($ages) . "<br />";

        next($ages);
        next($ages);
        echo "3: " . current($ages) . "<br />";

        // prev: move the pointer backward
        prev($ages);
        echo "4: " . current($ages) . "<br />";

        // reset: move the pointer to the first element
        reset($ages);
        echo "5: " . current($ages) . "<br />";

        // end: move the pointer to the last element
        end($ages);
        echo "6: " . current($ages) . "<br />";

        // move the pointer past the last element
        next($ages);
        echo "7: " . current($ages) . "<br />";
        ?>
        <hr>

        <?php
        $arr1 = array(2, 3, 5, 7, 11);

        echo "Going in forward direction" . "<br>";
        while ($current_ele = current($arr1)) {
            echo "current element : $current_ele" . "<br>";
            next($arr1);
        }
        ?>
        
        
    </body>
</html>

