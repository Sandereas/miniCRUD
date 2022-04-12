
<?php include('data/header.php'); ?>
<?php include('../config/gebruikersimport.php') ?>

<form action="" method="POST"> 
            
            <table class ="tableaddadmin">

                <tr>
                    <td>Gebruikersnaam</td>
                    <td><input type="text" name="gebruikersnaam" placeholder="Typ hier uw gebruikersnaam" ></td> <br>
                </tr>
                <tr>
                    <td>Wachtwoord</td>
                    <td><input type="password" name="wachtwoord" placeholder="Typ hier uw wachtwoord" ></td> 
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Typ hier uw email" ></td> <br>
                </tr>
                <tr>
                    <td>Naam</td>
                    <td><input type="text" name="naam" placeholder="Typ hier uw naam in" ></td> <br>
                </tr>
                <tr>
                    <td>Woonplaats</td>
                    <td><input type="text" name="woonplaats" placeholder="Typ hier uw woonplaats" ></td> <br>
                </tr>
                <tr>
                    <td>Straatnaam</td>
                    <td><input type="text" name="straatnaam" placeholder="Typ hier uw straatnaam" ></td> <br>
                </tr>
                <tr>
                    <td>Huisnummer</td>
                    <td><input type="text" name="huisnummer" placeholder="Typ hier uw huisnummer" ></td> <br>
                </tr>
                <tr>
                    <td>Telefoonnummer</td>
                    <td><input type="tel" name="telefoonnummer" placeholder="Typ hier uw telefoonnummer" ></td> <br>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Admin" class="buttonupdate">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>




<?php

if(isset($_POST['submit']))
{
    $gebruikersnaam = $_POST ['gebruikersnaam'];
    $wachtwoord = ($_POST ['wachtwoord']);
    $email = $_POST ['email'];
    $naam = $_POST ['naam'];
    $woonplaats = $_POST ['woonplaats'];
    $straatnaam = $_POST ['straatnaam'];
    $huisnummer = $_POST ['huisnummer'];
    $telefoonnummer = $_POST ['telefoonnummer'];



// $sql = "UPDATE gebruikers SET gebruikersnaam=?, wachtwoord=?, email=?, naam=?, woonplaats=?, straatnaam=?, huisnummer=?, telefoonnumer=? WHERE id=?";
// $stmt= $pdo->prepare($sql);
// $stmt->execute([$gebruikersnaam, $wachtwoord, $email, $woonplaats, $straatnaam, $huisnnummer, $telefoonnummer, $id]);

$updateadmin = [
    'gebruikersnaam' => $gebruikersnaam,
    'wachtwoord' => $wachtwoord,
    'email' => $email,
    'naam' => $naam,
    'woonplaats' => $woonplaats,
    'straatnaam' => $straatnaam,
    'huisnummer' => $huisnummer,
    'telefoonnummer' => $telefoonnummer,
    'id' => $_GET['id'],
];
$sql = "UPDATE gebruikers SET gebruikersnaam=:gebruikersnaam, wachtwoord=:wachtwoord, email=:email, naam=:naam, woonplaats=:woonplaats, straatnaam=:straatnaam, huisnummer=:huisnummer, telefoonnummer=:telefoonnummer  WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($updateadmin);







}
 ?>