<?php include('data/header.php'); ?>
<?php include ('../config/foodimport.php'); ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['gebruikersnaam'];
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

if ($datafood > 0) {
  $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

  //echo "data inserted";
  $_SESSION['Food'] = "Food Deleted Succesfull";
  header('Location:Food.php');
  }
  else {
  echo "error";
  }


?>



<?php include('data/footer.php'); ?>