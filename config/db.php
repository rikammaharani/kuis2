<?php
define('DB_SERVER', '172.20.0.2');
define('DB_USER', 'root');
define('DB_PASS', 'admin');
define('DB_NAME', 'batiku');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
//check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
?>