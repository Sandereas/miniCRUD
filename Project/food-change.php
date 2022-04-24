
<?php include('data/header.php'); ?>
<?php include('../config/foodimport.php') ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['gebruikersnaam'];
 }
 else {
         header("Location: login.php");
         
     }
     

?>

<form action="" method="POST"> 
            
            <table class ="tableaddadmin">

                <tr>
                    <td>Productnaam</td>
                    <td><input type="text" name="productnaam" placeholder="Vul hier de productnaam in" ></td> <br>
                </tr>
                <tr>
                    <td>Categorie</td>
                    <td><input type="text" name="categorie" placeholder="Vul hier de categorie in" ></td> 
                </tr>
                <tr>
                    <td>Afbeelding</td>
                    <td><input type="text" name="afbeelding" placeholder="Vul hier uw afbeelding in" ></td> <br>
                </tr>
                <tr>
                    <td>Prijs</td>
                    <td><input type="int" name="prijs" placeholder="Vul hier de prijs in" ></td> <br>
                </tr>
                <tr>
                    <td>Beschrijving</td>
                    <td><input type="text" name="beschrijving" placeholder="Vul hier de beschrijving in" ></td> <br>
                </tr>
                <tr>
                    <td>Voorraad</td>
                    <td><input type="text" name="voorraad" placeholder="Vul hier de voorraad in" ></td> <br>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Food" class="buttonupdate">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>




<?php

if(isset($_POST['submit']))
{
    $productnaam = $_POST['productnaam'];
    $categorie = $_POST['categorie'];
    $afbeelding = $_POST['afbeelding'];
    $prijs = $_POST['prijs'];
    $beschrijving = $_POST['beschrijving'];
    $voorraad = $_POST['voorraad'];



$updatefood = [
    'productnaam' => $productnaam,
    'categorie' => $categorie,
    'afbeelding' => $afbeelding,
    'prijs' => $prijs,
    'beschrijving' => $beschrijving,
    'voorraad' => $voorraad,
    'id' => $_GET['id'],
];
$sql = "UPDATE menukaart SET productnaam=:productnaam, categorie=:categorie, afbeelding=:afbeelding, prijs=:prijs, beschrijving=:beschrijving, voorraad=:voorraad WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($updatefood);
}


if ($datafood > 0) {
    $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

//echo "data inserted";
$_SESSION['Food'] = "Food changed Succesfull";
header('Location:food.php');
}
else {
//echo "error";
$_SESSION['Food'] = "Failed to change Food";
header('Location:food.php');
}
