<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Oppgave 5: interesser</h1>

<form method="POST">
Search interest : <input type="text" name="INTEREST" placeholder="Search interest" Required>
    <br/>
    <input type="submit" name="submit" value="Search">
</form>

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

if(isset($_POST["submit"])) {
    $interest = $_POST["INTEREST"];

    $records = mysqli_query($db, "select * from interesser where INTEREST_1 LIKE '%$interest%' or INTEREST_2 LIKE '%$interest%' "); //henter data fra databasen

    if(!$records) {
        echo mysqli_error($db);
    } else {
        echo "Couldn't find anything";
    }

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
}
?>

<?php 
mysqli_close($db); //lukker connection 
?>
    
</body>
</html>