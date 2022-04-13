<?php include('data/header.php'); ?>
<?php include('../config/foodimport.php'); ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "Welcome ". $_SESSION['gebruikersnaam'];
 }
 else {
         header("Location: login.php");
         
     }
     

?>

<main>
    <div class ="box">
        <b> <h1> Food list</h1> </b>
        <br>

        <a href="food-add.php" class="buttonadmin"> Add Food</a>
    <br>
    <br>
    <table class ="tablefood">
    <tr>
        <th>ID</th>
        <th>Productnaam</th>
        <th>Categorie</th>
        <th>Afbeelding</th>
        <th>Prijs</th>
        <th>Beschrijving</th>
    </tr>
    <?php 
                foreach ($datafood as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['productnaam']; ?>
                        </td>
                        <td>
                            <?php echo $row['categorie']; ?>
                        </td>
                        <td>
                        <img class="imgstyle" src="../assets\images/<?php echo $row['afbeelding']; ?>">
                        </td>
                        <td>
                            <?php echo $row['prijs']; ?>
                        </td>
                        <td>
                            <?php echo $row['beschrijving']; ?>
                        </td>
                        <td>
                        <a href="food-change.php?id=<?php echo $row['id']; ?>" class="buttonupdate"> Update Food </a> 
                        </td>
                        <td colspan="2">
                        <a href="food-del.php?id=<?php echo $row['id']; ?>" class="buttondelete"> Delete Food </a> 
                        </td>
                    </tr>
                    <?php } ?>

                </table>
    </div>
</main>
<?php include('data/footer.php'); ?>