<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    
    
    
</head>
<body>
    
<h1>Oppgave 1: sjekk av etternavn</h1>


<form method="post" action="#">
        <label for="lastName"><h4>Write in lastname</h4></label><br>
        <input type="text" id="lastName" name="lastName">
        <input type="submit" value="Add">
</form>


<?php

$lastName = $_POST['lastName'];

echo ucfirst (strtolower($lastName));
echo ("<br/>");
echo strlen($lastName);
echo " ord langt";

?>


</body>
</html>