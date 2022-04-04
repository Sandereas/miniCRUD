<?php 
        $stmt = $pdo->prepare("SELECT * FROM menukaart");
        $stmt->execute();
        $datafood = $stmt->fetchall();  
        //var_dump($datafood;        
    ?>
