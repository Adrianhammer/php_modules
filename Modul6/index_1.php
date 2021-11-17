<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Oppgave 1: medlemsliste</h1>

<table border="1">
    <tr>
        <td>First name</td>
        <td>Last name</td>
        <td>Date of birth</td>
        <td>ID</td>
    </tr>

<?php

include "dbConn.php"; //Bruker database connection filen

$records = mysqli_query($db, "select * from medlemmer_info"); //henter data fra databasen

while($data = mysqli_fetch_array($records)) {
    ?>
    <tr>
        <td><?php echo $data["FNAME"]; ?></td>
        <td><?php echo $data["LNAME"]; ?></td>
        <td><?php echo $data["DATEOFBIRTH"]; ?></td>
        <td><?php echo $data["ID"]; ?></td>
    </tr>

    <?php
}
?>
</table>

<? 
mysqli_close($db); //lukker connection 
?>
    
</body>
</html>