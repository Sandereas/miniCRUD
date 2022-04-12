<?php include('data/header.php'); ?>
<?php include('../config/gebruikersimport.php') ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "Welcome ". $_SESSION['gebruikersnaam'];
 }
 else {
         header("Location: login.php");
         
     }
     

?>


<?php 


$delfood = [
  'id' => $_GET['id'],
];
$sql = "DELETE FROM menukaart WHERE id = :id";
$stmt= $pdo->prepare($sql);
$stmt->execute($delfood);
