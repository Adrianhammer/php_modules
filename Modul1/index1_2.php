<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$age = 20;
$name = "Adrian";
$age2 = 21;
$name2 = "Hammer";


//Oppgave 3 table
echo "<table border=1 cellspacing=1 cellpading=2>

<tr><td><font color=red>$age</td><td>$name</font></td></tr> 

</table>";

//oppgave 3 ordered list
echo 
"<ol>
<li>$age, $name </li>
<li>$age2, $name2 </li>
</ol>";

//oppgave 3 unordered list
echo "<ul><li>$age, $name </li></ul>";


?>

<!-- oppgave 3 paragraph --> 
<p><?php echo $age, " ", $name; ?></p>


</body>
</html>




