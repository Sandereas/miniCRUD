<?php include('data/header.php'); ?>

    <div class="mainer">
        <div class="box"> 
            <h1> Add Admin</h1>

            <br>

            <?php
                if(isset($_SESSION['add']))
                 {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                 }
            ?>
            <br>

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
    $woonplaats = $_POST ['woonplaats'];
    $straatnaam = $_POST ['straatnaam'];
    $huisnummer = $_POST ['huisnummer'];
    $telefoonnummer = $_POST ['telefoonnummer'];

    //insert in SQL

    $sql = "INSERT INTO gebruikers SET
        gebruikersnaam ='$gebruikersnaam',
        wachtwoord ='$wachtwoord',
        email ='$email',
        naam ='$naam',
        woonplaats ='$woonplaats',
        straatnaam='$straatnaam',
        huisnummer='$huisnummer',
        telefoonnummer = '$telefoonnummer'

    ";
    
    // uitvoeren en opslaan in de database


    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res == TRUE)
    {
        //echo "data inserted";
        $_SESSION['add'] = "Admin Added Succesfull";
        header("location:".SiteURL. 'project/admin.php');
    }
    else {
        //echo "error";
        $_SESSION['add'] = "Failed to add Admin";
        header("location:".SiteURL. 'project/admin-add.php');
    }
}
?>