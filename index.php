<?php

 $dbhost = "localhost";
 $dbuser = "admin";
 $dbpass = "123";
 $db = "minicrud";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniCRUDSandervdv</title>
    <link rel="stylesheet" href="css/main.css">
    



</head>
<style>

</style>
<body>
    <header>
        <div class="box">
            <ul>
                <li> <a href= "#"> Home </a> </li>
                <li> <a href= "#"> Categorie </a> </li>
                <li> <a href= "#"> Food </a> </li>
                <li> <a href= "#"> Einde </a> </li>
            </ul>
        </div> 
    </header>
    <main>
        <div class ="box">
            <b> <h1> Dashboard </h1> </b>

            <div class="container">
                <h1> 10 </h1> <br>
                Categories
            </div>

            <div class="container">
                <h1> 10 </h1> <br>
                Categories
            </div>

            <div class="container">
                <h1> 10 </h1> <br>
                Categories
            </div>

            <div class="container">
                <h1> 10 </h1> <br>
                Categories
            </div>

            <div class="container">
                <h1> 10 </h1> <br>
                Categories
            </div>
        </div>
    </main>
    <footer>
        Product created by Sandervdv
    </footer>
    <script src="js.main.js"></script>
</body>
</html>