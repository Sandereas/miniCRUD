<?php include('data/header.php'); ?>
<?php include('../config/gebruikersimport.php'); ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['gebruikersnaam'];
 }
 else {
         header("Location: login.php");
         
     }
     

?>
    <main>
        <div class ="box">
            <b> <h1> Editor The Web</h1> </b>
            <br>

            <br>

            <?php
                if(isset($_SESSION['add']))
                 {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                 }
             ?>
            <br> <br>

            <a href="admin-add.php" class="buttonadmin"> Add Admin</a>
            <br>
            <br>
            
                
                <table class ="tableadmin">

                    <tr>
                        <th>ID</th>
                        <th>Gebruikersnaam</th>
                        <th>Email</th>
                        <th>Naam</th>
                        <th>Actions</th>
                    </tr>
                    
    <?php 
                foreach ($datageb as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['gebruikersnaam']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['naam']; ?>
                        </td>
                        
                        <td colspan="2">
                        <a href="admin-change.php?id=<?php echo $row['id']; ?>" class="buttonupdate"> Update Admin </a> 
                        </td>
                        <td colspan="2">
                        <a href="admin-del.php?id=<?php echo $row['id']; ?>" class="buttondelete"> Delete Admin </a> 
                    </tr>
                    <?php } ?>
                

                </table>
                
        </div>
    </main>
<?php include('data/footer.php'); ?>