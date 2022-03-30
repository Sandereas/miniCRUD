    <?php 
        $stmt = $pdo->prepare("SELECT * FROM gebruikers");
        $stmt->execute();
        $data = $stmt->fetchall();  
        //var_dump($data);        
    ?>
