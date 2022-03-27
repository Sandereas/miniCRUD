<?php include('data/header.php'); ?>
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

            <a href="admin.php" class="buttonadmin"> Add Admin</a>
            <br>
            <br>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Gebruikersnaam</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>

                <?php 

                    $sql = "SELECT * FROM gebruikers";
                    $res = mysqli_query($conn, $sql);

                    if($res == TRUE) 
                    {
                        $count = mysqli_num_rows($res);
                    }
                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                             // using while loop to get all the data from the database

                            {
                                $id = $rows['id'];
                                $gebruikersnaam = $rows['gebruikersnaam'];
                                $email = $rows ['email'];
                                $naam = $rows['naam'];


                                ?>

                                    <tr>
                                        <td><?php echo $id ?> </td>
                                        <td><?php echo $gebruikersnaam; ?> </td>
                                        <td><?php echo $email; ?> </td>
                                        <td><?php echo $naam; ?> </td>
                                        <td>
                                            <a href="#" class="buttonupdate"> Update admin </a> 
                                            <a href="#" class="buttondelete"> Delete Admin </a> 
                                        </td>
                                    </tr>

                                <?php



                            }
                            
                        }
                        else 
                        {
                            
                        }
                ?>
            </table>
        </div>
    </main>
<?php include('data/footer.php'); ?>