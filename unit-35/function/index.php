<?php
//Show PHP errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>


<?php
// We need to have here require not include
require_once 'math.php';

echo add(4, 5).'<br>';
echo subtract(9, 4);

