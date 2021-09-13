<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 4: sjekk av fylkestilhørighet</h1>


    <form method="post" action="#">
        <label for="kommyne"><h4>Write in kommune</h4></label><br>
        <input type="text" id="kommune" name="kommune">
        <input type="submit" value="Søk">
</form>

<?php



$kommune = $_POST["kommune"];

$result = match($kommune) {
    "Kristiansand", "Lillesand", "Birkenes", "Bjerkreim" => "Agder",

    "Harstad", "Kvæfjord", "Tromsø", "Alta" => "Troms og Finnmark",

    "Bergen"  => "Vestland",

    "Trondheim", => "Trøndelag",

    "Bodø", => "Nordland",

    default => "Finner ikke kommune i registeret",
};


printf ("$kommune ligger i $result fylke");





?>



</body>
</html>