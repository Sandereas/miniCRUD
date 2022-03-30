<?php

    session_start();

?>

<?php

$servername = "localhost";
$username =  "admin";
$password = "123";
$db = "minicrud";

$dsn = "mysql:host=$servername;dbname=$db";

$pdo = new PDO($dsn, $username, $password);

?>

