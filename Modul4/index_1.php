<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 1: skriv ut innholdet i en matrise</h1>



<?php

//Assosiativ array som har 0,3,5,7,8,15 som key
$cities = array(
    0 => "Oslo", 
    3 => "Bergen",
    5 => "Trondheim", 
    7 => "Tromsø", 
    8 => "Stavanger",
    15 => "Kristiansand");


//Printer ut $cities array
<<<<<<< HEAD
echo "<pre>";
print_r($cities);
echo "</pre>";
=======
print_r($cities);
>>>>>>> 912e056061ac844aae55920ddc9e3a440f09c851


//Foreach løkke som printer ut $cities array
foreach ($cities as $key => $value) {
    
    echo "<br>" . $key . " " . $value;
}






?>
</body>
</html>