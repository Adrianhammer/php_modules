<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Oppgave 4: aktiviteter</h1>

<table border="1">
    <tr>
        <td>aktivitetsnavn</td>
        <td>ansvarlig</td>
        <td>starttidspunkt</td>
        <td>sluttidspunkt</td>
    </tr>



<?php

include "dbConn_2.php"; //bruker database connection filen


$records = mysqli_query($db, "select * from aktiviteter where starttidspunkt >= curdate() ");


while($data = mysqli_fetch_array($records)) {
    ?>
    <tr>
    <td><?php echo $data["aktivitetsnavn"]; ?></td>
        <td><?php echo $data["ansvarlig"]; ?></td>
        <td><?php echo $data["starttidspunkt"]; ?></td>
        <td><?php echo $data["sluttidspunkt"]; ?></td>
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