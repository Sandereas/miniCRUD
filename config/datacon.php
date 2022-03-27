<?php

session_start();

define('SiteURL', 'http://localhost/miniCRUD/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'minicrud');


$conn = mysqli_connect('LOCALHOST', 'root', '') or die(mysqli_error());
$db_select = mysqli_select_db($conn, 'minicrud') or die(mysqli_error());

?>