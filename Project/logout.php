<?php include('data/header.php'); 

unset($_SESSION["id"]);
unset($_SESSION["name"]);
$_SESSION['loggedin'] = false;

header("Location:login.php");

include('data/footer.php'); 
?>