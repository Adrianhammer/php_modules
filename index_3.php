<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Oppgave 3: finn ord</h1>

<?php 

$str = "Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.";
$word = "is";

echo "<h3>$str</h3>";

$strCount = substr_count($str, $word);

echo "Ordet $word dukker opp $strCount ganger i setningen";



?>

</body>
</html>