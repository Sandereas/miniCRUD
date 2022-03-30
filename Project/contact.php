<?php include('data/header.php'); ?>
<?php include('../config/gebruikersimport.php'); ?>

<main>
    <div class = "box">
        <div class = "contacttext">
            <h3> Voor meer contact kan je terrecht bij 1 van ons </h3>
    


        
    

    <table class = "tablecontact">
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
        </tr>
        <tr>
            <td> <?php echo $data[0]['naam'] ?> </td>
            <td> <?php echo $data[0]['email'] ?> </td>
            <td> <?php echo $data[0]['telefoonnummer'] ?></td>
        </tr>
        <tr>
            <td> <?php echo $data[1]['naam'] ?> </td>
            <td> <?php echo $data[1]['email'] ?> </td>
            <td> <?php echo $data[1]['telefoonnummer'] ?></td>
        </tr>
        <tr>
            <td> <?php echo $data[2]['naam'] ?> </td>
            <td> <?php echo $data[2]['email'] ?> </td>
            <td> <?php echo $data[2]['telefoonnummer'] ?></td>
        </tr>
    </table>
</main>
<?php include('data/footer.php'); ?>