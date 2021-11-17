<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 5: </h1>
    

<?php
 $contestants = array(
     'Adrian' => 0,
     'Adel' => 0,
     'Ronald' => 0,
     'Oskar' => 0,
     'Dzenet' => 0,
     'Verstappen' => 0,
     'Lewis' => 0,
     'Ricciardo' => 0,
     'Norris' => 0,
     'Bottas' => 0
    );

//$driver = array('Adrian', "Hammer");

    echo "<h3>The contestants are: </h3>";
    foreach ($contestants as $key => $value) {
        print_r( "Name: " . $key . "<br>");
    }

    echo "<br>";

    foreach ($contestants as $key => $value) {
        $contestantNum = rand(1, 50);
        $contestants[$key] = $contestantNum;
    }
    
    arsort($contestants);

    $timesRan = 0;

    while (count($contestants) > 1) {
        
        $timesRan += 1;
        echo "<br>";

        $min = min($contestants);
        $max = max($contestants);

        if(count($contestants) > 1){
            $contestantsLeft = count($contestants);
            echo "Round $timesRan with $contestantsLeft contestants left <br>";

            foreach ($contestants as $key => $value) {
                echo "Name: $key and score: $value <br>"; 
            }
            }

        //Sletter deltaker med minst score
        foreach ($contestants as $key => $value) {
            if($value === $min) {
            unset($contestants[$key]);
            echo "<br> Slettet $key - with the score of $value";
            }
        }

        if(count($contestants) === 1) {
            foreach ($contestants as $key => $value) {
                echo "<br> The winner is $key with a score of $value ! <br>";
            }
        }
        echo "<br>";
    }


?>
</body>
</html>