<?php include('data/header.php'); ?>

<?php

if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])){

        $stmt = $pdo->prepare("SELECT * FROM gebruikers
        where gebruikersnaam = :gebruikersnaam
        AND wachtwoord = :wachtwoord");
        
        $stmt->execute([
            'gebruikersnaam' => $_POST['gebruikersnaam'], 
            'wachtwoord' => $_POST['wachtwoord']]);

        $datageb = $stmt->fetch();  
        if ($datageb != false){
            $_SESSION['gebruikersnaam'] = $datageb['gebruikersnaam'];
            $_SESSION['id'] = $datageb['id'];
            $_SESSION['loggedin'] = true;
            header("Location: index.php");


        }
        else { 
            echo "login gegevens incorrect";
            

         }
}
?>





<form action="login.php" method="post"> <! --- onSubmit= "return loginForm()"> 
    <label for="gebruikersnaam">First name:</label><br>
    <input type="text" id="gebruikersnaam" name="gebruikersnaam" value="" placeholder="gebruikersnaam"><br>
    <label for="wachtwoord">password:</label><br>
    <input type="password" id="wachtwoord" name="wachtwoord" value="" placeholder="wachtwoord"><br>
    <input type="submit" value="Submit">
</form>


<?php include('data/footer.php'); ?>