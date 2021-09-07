<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Oppgave 5: passordgenerator</h1>


<?php

/*
            function randPass() {
                $charSet = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $pass = array(); //deklarerer $pass som en array
                $passLen = strlen($charSet) -1; //putter lengden -1 i cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $passLen);
                    $pass[] = $charSet[$n];
                }
                return implode($pass); //implode() funksjonen returnerer en string fra array elementer
            } 
    
        echo randPass();
*/
            
            function randomPass($len) {

                //definerer symboler
                $charSets = array();
                $charSets[] = "ABCDEFGHJKLMNPQRSTUVWXYZ";
                $charSets[] = "abcdefghjkmnpqrstuvwxyz";
                $charSets[] = "1234567890";

                $pass = "";

                //legger til et tegn fra hvert sett
                foreach($charSets as $charSet) {
                    $pass .= $charSet[array_rand(str_split($charSet))];
                }

                //bruker alle symbolene til å fylle opp $len
                while (strlen($pass) < $len) {
                    //får et random set
                    $ranSet = $charSets[array_rand($charSets)];

                    //legger til en random char fra et random set
                    $pass .= $ranSet[array_rand(str_split($ranSet))];
                }
            
                //shuffler passord stringen før return
                return str_shuffle($pass);
            }

            echo randomPass(8);

?>



</body>
</html>