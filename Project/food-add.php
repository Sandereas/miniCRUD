<?php include('data/header.php'); ?>
<?php include ('../config/foodimport.php'); ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "Welcome ". $_SESSION['gebruikersnaam'];
 }
 else {
         header("Location: login.php");
         
     }
     

?>

<div class="mainer">
        <div class="box"> 
            <h1> Add Food</h1>

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

            <table class ="tableaddfood">
                <tr>
                    <td>Productnaam </td>
                    <td><input type="text" name="productnaam" placeholder="Typ hier uw productnaam" ></td> <br>
                </tr>
                <tr>
                    <td>Categorie</td>
                    <td><input type="text" name="categorie" placeholder="Typ hier uw categorie" ></td> 
                </tr>
                <tr>
                    <td>Afbeelding</td>
                    <td><input type="text" name="afbeelding" placeholder="Typ hier uw afbeelding" ></td> <br>
                </tr>
                <tr>
                    <td>Prijs</td>
                    <td><input type="text" name="prijs" placeholder="Typ hier uw prijs in" ></td> <br>
                </tr>
                <tr>
                    <td>Beschrijving</td>
                    <td><input type="text" name="beschrijving" placeholder="Typ hier uw beschrijving" ></td> <br>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="buttonsub">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>

<?php
    //Add Admin
    if(isset($_POST['submit']))
{
    $productnaam = $_POST ['productnaam'];
    $categorie = $_POST ['categorie'];
    $afbeelding = $_POST ['afbeelding'];
    $prijs = $_POST ['prijs'];
    $beschrijving = $_POST ['beschrijving'];

    //insert in SQL

    $sql = "INSERT INTO menukaart SET
        productnaam = :productnaam,
        categorie =:categorie,
        afbeelding = :afbeelding,
        prijs = :prijs,
        beschrijving = :beschrijving
    ";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'productnaam' => $productnaam,
    'categorie' => $categorie,
    'afbeelding' => $afbeelding,
    'prijs' => $prijs,
    'beschrijving' => $beschrijving
]); 

$user = $stmt->fetch();
    
    // uitvoeren en opslaan in de database


    //$res = PDO::query($conn, $sql) or die(PDO::errorCode() and PDO::errorInfo());
    

        if ($datafood > 0) {
                $results_login = $stmt->fetch(PDO::FETCH_ASSOC);
  
        //echo "data inserted";
        $_SESSION['add'] = "Admin Added Succesfull";
        header('food.php');
        }
    else {
        //echo "error";
        $_SESSION['add'] = "Failed to add Admin";
        header('food-add.php');
    }
}

?>

<?php include('data/footer.php'); ?>