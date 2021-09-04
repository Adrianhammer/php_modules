<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="#">
        <label for="birthDate"><h4>Enter birthdate</h4></label><br>
        <input type="text" id="birthdate" name="birthDate">
        <input type="submit" value="Submit">
</form>
    
<?php

$birthDate = new DateTime("13.11.2000");
$today = new DateTime(date("d.m.y"));
$diff = $today->diff($birthDate);


//printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf(' Your age : %d years, %d days', $diff->y, $diff->d);

echo " Your current age is ".$diff->y." years ".$diff->m." months ".$diff->d." days";





?>




</body>
</html>