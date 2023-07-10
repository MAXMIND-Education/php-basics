<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// Set session variables
        $_SESSION["user_id"] = "1111";
        $_SESSION["username"] = "dilshan";
        echo "Session variables are set.";
        ?>

    </body>
</html>