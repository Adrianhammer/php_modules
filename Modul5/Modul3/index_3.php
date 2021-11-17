<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 3: liten regnemaskin</h1>


<?php

$tall1 = 1;
$tall2 = 10;

// Tall 2 kan være en annen datatype som Float uten at det vil skape problemer men ikke datatypen String f.eks

//For løkke som itererer 10 ganger
for ($i = 0; $i <= 10; $i++) {

    //Adderer
    $addSum = $tall1+$tall2;

    //Finner differanse men tar hensyn til negative tall
    $diffSum = abs($tall1 - $tall2);

    //Finner gjennomsnittet
    $avgSum = ($tall1+$tall2)/2;

    echo "add sum is: ", $addSum, ", diff sum is: ", $diffSum, ", average sum is: ", $avgSum, "<br><br>";


    $tall1++;
    
}


?>


</body>
</html>