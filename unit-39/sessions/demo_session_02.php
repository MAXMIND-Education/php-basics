<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// to change a session variable, just overwrite it
        $_SESSION["username"] = "AMA";
        ?>

        <?php
// Echo session variables that were set on previous page
        echo "My User ID is " . $_SESSION["user_id"] . ".<br>";
        echo "My User Name is " . $_SESSION["username"] . ".";
        ?>

        <?php
// remove all session variables
        //session_unset();

// destroy the session
        //session_destroy();
        ?>        

    </body>
</html>

