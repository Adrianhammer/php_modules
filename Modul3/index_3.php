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


while ($tall1 <= 10) {

    $addSum = $tall1+$tall2;

    $diffSum = $tall1 - $tall2;

    $avgSum = ($tall1+$tall2)/2;

    echo "add sum is: ", $addSum, ", diff sum is: ", $diffSum, ", average sum is: ", $avgSum, "<br><br>";


    $tall1++;
} 










?>



</body>
</html>