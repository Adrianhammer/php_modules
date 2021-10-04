<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Oppgave 4: overskriving av matrise</h1>


<?php

/*
$names = array(
    1   => "Adrian", 
    2   => "Adel", 
    3   => "Oskar", 
    4   => "Ronald", 
    5   => "Dzenet", 
    6   => "Hamilton", 
    7   => "Vettel", 
    8   => "Leclerc", 
    9   => "Verstappen", 
    10  => "Ricciardo"
);

$alteredNames = array_replace($names, 
[
    1   => "Hammer", 
    2   => "Hodzalari", 
    3   => "Testad", 
    4   => "Mpararo", 
    5   => "Bero", 
    6   => "Lewis", 
    7   => "Sebastian", 
    8   => "Charles", 
    9   => "Max", 
    10  => "Daniel"
]);

echo "<pre>";
print_r($names);
print_r($alteredNames);
echo "</pre>";

*/

$drivers = array("Adrian", "Adel", "Oskar", "Ronald", "Dzenet", "Hamilton", "Vettel", "Leclerc", "Verstappen", "Ricciardo");


$alteredDrivers = array_replace($drivers, 
[
    "Hammer",
    "Hodzalari",
    "Testad",
    "Mpararo",
    "Dzenet",
    "Lewis",
    "Sebastian",
    "Charles",
    "Max",
    "Daniel",
]);


echo "<pre>";
echo print_r($drivers);
echo "</pre>";

echo "<pre>";
echo print_r($alteredDrivers);
echo "</pre>";




$newIndex1 = 10;




$alteredIndex = array_combine(range($newIndex1, count($alteredDrivers) + ($newIndex1-1)), array_values($alteredDrivers));


echo "<pre>";
echo print_r($alteredIndex);
echo "</pre>";







?>



</body>
</html>