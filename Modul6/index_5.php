<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Oppgave 5: interesser</h1>

<table border="1">
    <tr>
        <td>First name</td>
        <td>Last name</td>
        <td>Interest 1</td>
        <td>Interest 2</td>
        <td>Date of birth</td>
    </tr>

<?php

include "dbConn_3.php"; //Bruker database connection filen

$records = mysqli_query($db, "select * from interesser where INTEREST_1 LIKE 'coding' or INTEREST_2 LIKE 'coding' "); //henter data fra databasen


while($data = mysqli_fetch_array($records)) {
    ?>
    <tr>
        <td><?php echo $data["FNAME"]; ?></td>
        <td><?php echo $data["LNAME"]; ?></td>
        <td><?php echo $data["INTEREST_1"]; ?></td>
        <td><?php echo $data["INTEREST_2"]; ?></td>
        <td><?php echo $data["DATEOFBIRTH"]; ?></td>
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