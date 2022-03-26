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

    </header>
    <main>
        <div class="Menu">
            <div class="box">
             <ul>
                   <li> <a href= "#"> Home </a> </li>
                  <li> <a href= "#"> Product 1 </a> </li>
                  <li> <a href= "#"> Home 2 </a> </li>
                   <li> <a href= "#"> home 3 </a> </li>
             </ul>
             <div class="product">

            </div> 
        </div> 
    </main>
    <footer>
        Product created by Sandervdv
    </footer>
    <script src="js.main.js"></script>
</body>
</html>