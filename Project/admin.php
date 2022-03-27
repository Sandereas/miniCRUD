<?php include('data/header.php'); ?>

    <div class="mainer">
        <div class="box"> 
            <h1> Add Admin</h1>

            <form action="" method="POST"> 

            <table class ="tableaddadmin2">
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
                    <td>Adres</td>
                    <td><input type="text" name="adres" placeholder="Typ hier uw adres" ></td> <br>
                </tr>
                <tr>
                    <td>Telefoonnummer</td>
                    <td><input type="tel" name="telefoonnummer" placeholder="Typ hier uw telefoonnummer" ></td> <br>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="buttonsub">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>
<?php include('data/footer.php'); ?>

<?php
    //Add Admin
    if(isset($_POST['submit']))
{
    $gebruikersnaam = $_POST ['gebruikersnaam'];
    $wachtwoord = md5($_POST ['wachtwoord']);
    $email = $_POST ['email'];
    $naam = $_POST ['naam'];
    $adres = $_POST ['adres'];
    $telefoonnummer = $_POST ['telefoonnummer'];

    //insert in SQL

    $sql = "INSERT INTO gebruikers SET
        gebruikersnaam ='$gebruikersnaam',
        wachtwoord ='$wachtwoord',
        email ='$email',
        naam ='$naam',
        adres='$adres ',
        telefoonnummer = '$telefoonnummer'

    ";
    
    // uitvoeren en opslaan SQL
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, 'minicrud') or die(mysqli_error());
    
    //$res = mysqli_query($conn, $sql) or die(mysqli_error());


}
?>