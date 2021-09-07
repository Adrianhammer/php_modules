<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Oppgave 4: alder</h1>



<?php




$startOfYear = new DateTime("01-01-2021");
$birthDate = new DateTime("13-11-2000");
$birthDateThisYear = new DateTime("13-11-2021");
$today = new DateTime(date("d.m.y"));

$diff = $today->diff($birthDate);
$diff2 = $startOfYear->diff($birthDateThisYear);



echo " Your current age is ".$diff->y." years and ".$diff2->days." days";



?>




</body>
</html>