<?php

 $dbhost = "localhost";
 $dbuser = "admin";
 $dbpass = "123";
 $db = "minicrud";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
?>


<?php

$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
$db_select = mysqli_select_db($conn, 'minicrud') or die(mysqli_error());

?>