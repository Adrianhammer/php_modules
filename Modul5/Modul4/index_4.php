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

//Array som heter drivers som inneholder 10 navn
$drivers = array("Adrian", "Adel", "Oskar", "Ronald", "Dzenet", "Hamilton", "Vettel", "Leclerc", "Verstappen", "Ricciardo");

//array_replace funksjon bytter ut navn fra drivers array med de nye
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

//Setter den nye indexen til 10 istedenfor 0
$newIndex1 = 10;

//alteredIndex bruker array_combine og array_values til å dytte alle opp 10 indekser
$alteredIndex = array_combine(range($newIndex1, count($alteredDrivers) + ($newIndex1-1)), array_values($alteredDrivers));


echo "<pre>";
echo print_r($alteredIndex);
echo "</pre>";

?>



</body>
</html>