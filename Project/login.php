<?php include('data/header.php'); ?>
    <main>
        <div class ="box">
            <b> <h1> Editor The Web</h1> </b>
            <br>

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
                <tr>
                    <td>1</td>
                    <td>Sandereas</td>
                    <td>117194@student.roc-nijmegen.nl</td>
                    <td>
                        <a href="#" class="buttonupdate"> Update admin </a> 
                        <a href="#" class="buttondelete"> Delete Admin </a> 
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sandervdv</td>
                    <td>TTBSandereas@hotmail.nl</td>
                    <td>
                        <a href="#" class="buttonupdate"> Update admin </a> 
                        <a href="#" class="buttondelete"> Delete Admin </a> 
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sander</td>
                    <td>017194@student.roc-nijmegen.nl</td>
                    <td>
                        <a href="#" class="buttonupdate"> Update admin </a> 
                        <a href="#" class="buttondelete"> Delete Admin </a> 
                    </td>
                </tr>
            </table>
        </div>
    </main>
<?php include('data/footer.php'); ?>