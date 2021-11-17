<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 2: teller</h1>


<?php

//Setter sum til 0
$sum = 0;

//For løkke som teller til 9
for ($i = 0; $i <= 9; $i++) {
    echo "$i <br>";

    //Legger til 1 i $sum etter hver iterasjon
    $sum = $sum + $i;
    
}



echo "Ferdig å telle! Summen av tallene ble $sum";



?>




</body>
</html>