    <?php 
        $stmt = $pdo->prepare("SELECT * FROM gebruikers");
        $stmt->execute();
        $datageb = $stmt->fetchall();  
        //var_dump($datageb);        
    ?>
