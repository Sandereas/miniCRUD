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


$deladmin = [
  'id' => $_GET['id'],
];
$sql = "DELETE FROM gebruikers WHERE id = :id";
$stmt= $pdo->prepare($sql);
$stmt->execute($deladmin);



// function deleteadmin($id) {

// $sql = "DELETE FROM gebruikers WHERE id=:id";

// $stmt = $this->pdo->prepare($sql);
// $stmt->bindvalue(':id', $id);

// $stmt->execute();

// return $stmt->rowCount();
//}
 //if ($datageb->query($sql) === TRUE) {
   //echo "Food deleted successfully";
 //} else {
   //echo "Error deleting food:";
 //}

 //$datageb->close();

?>
<?php include('data/footer.php'); ?>
