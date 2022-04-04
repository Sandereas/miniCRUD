<?php 
        $stmt = $pdo->prepare("SELECT * FROM menukaart");
        $stmt->execute();
        $datacat = $stmt->fetchall();  
        //var_dump($datacat);        
    ?>
