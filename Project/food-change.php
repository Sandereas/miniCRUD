
<?php include('data/header.php'); ?>
<?php include('../config/foodimport.php') ?>

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




// $sql = "UPDATE gebruikers SET gebruikersnaam=?, wachtwoord=?, email=?, naam=?, woonplaats=?, straatnaam=?, huisnummer=?, telefoonnumer=? WHERE id=?";
// $stmt= $pdo->prepare($sql);
// $stmt->execute([$gebruikersnaam, $wachtwoord, $email, $woonplaats, $straatnaam, $huisnnummer, $telefoonnummer, $id]);

$updatefood = [
    'productnaam' => $productnaam,
    'categorie' => $categorie,
    'afbeelding' => $afbeelding,
    'prijs' => $prijs,
    'beschrijving' => $beschrijving,
    'id' => $_GET['id'],
];
$sql = "UPDATE menukaart SET productnaam=:productnaam, categorie=:categorie, afbeelding=:afbeelding, prijs=:prijs, beschrijving=:beschrijving  WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($updatefood);
}


