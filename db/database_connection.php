<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gapuser123"; // Mysql password
$db_name="Training_App"; // Database name

// Connect to server and select databse.
$connection = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($connection,"$db_name")or die("cannot select DB");

?>