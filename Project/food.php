<?php include('data/header.php'); ?>
<?php include('../config/foodimport.php'); ?>

<main>
    <div class ="box">
        <b> <h1> Food list</h1> </b>
        <br>

        <a href="food-add.php" class="buttonadmin"> Add Food</a>
    <br>
    <br>

    <table>
    <tr>
        <th>ID</th>
        <th>Productnaam</th>
        <th>Categorie</th>
        <th>Afbeelding</th>
        <th>Prijs</th>
        <th>Beschrijving</th>
    </tr>
    <?php 
                foreach ($datafood as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['productnaam']; ?>
                        </td>
                        <td>
                            <?php echo $row['categorie']; ?>
                        </td>
                        <td>
                            <?php echo $row['afbeelding']; ?>
                        </td>
                        <td>
                            <?php echo $row['prijs']; ?>
                        </td>
                        <td>
                            <?php echo $row['beschrijving']; ?>
                        </td>
                        </td>
                    </tr>
                    <?php } ?>

                </table>
    </div>
</main>
<?php include('data/footer.php'); ?>