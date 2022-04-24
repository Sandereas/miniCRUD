<?php include('data/header.php'); ?>
<?php include('../config/gebruikersimport.php') ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['gebruikersnaam'];
 }
 else {
         header("Location: login.php");
         
     }
     

?>

<?php 


$deladmin = [
  'id' => $_GET['id'],
];
$sql = "DELETE FROM gebruikers WHERE id = :id";
$stmt= $pdo->prepare($sql);
$stmt->execute($deladmin);

if ($datageb > 0) {
  $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

  //echo "data inserted";
  $_SESSION['add'] = "Admin Deleted Succesfull";
  header('Location:admin.php');
  }
  else {
  echo "error";
  }

?>
<?php include('data/footer.php'); ?>
