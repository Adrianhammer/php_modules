<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Oppgave 5: sjakk og hvete</h1>

     <table width="650px" height="600px" align="center" cellspacing="0px" cellpadding="0px" border="1px">

<?php

/*
for ($row=1; $row<=8; $row++)  
    {
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
        $total=$row+$col;
        if($total%2==0)
    {
        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
    }
    else
    {
        echo "<td height=30px width=30px bgcolor=#000000></td>";
    }
    } 
    echo "</tr>";
} */

$sum = 1; 

//logikken for danning av "sjakkbrett" og matten
for ($i = 1; $i <= 64; $i++) {
  $filtrerNummer = filtrerNummer($sum); 
  echo "<br>Rute $i har $filtrerNummer hvetekorn<br>";
  $sum = $sum * 2; 
}


function filtrerNummer($nummer) { 
  // Hvis nummeret er mindre enn 1 milliard 
  // kaller på number_format funksjonen med ingen decimaler
  // Kaller på explode funksjonen som tar en string til array men spesifiserer ingen elementer den skal returnere
  if($nummer > 1000000000) { 
     $formatedNumber = number_format($nummer, 0, null," "); 
     $formatedNumber = explode(' ', $formatedNumber); 

     $nummer = ""; 

     //Hvis formatedNumber har fler enn 7 siffer si trillioner
    if( count($formatedNumber) >= 7 ){
      $nummer .= (int)$formatedNumber[count($formatedNumber)-7] . ' Trillion(er), ';
      }

      //Hvis formatedNumber har fler enn 6 siffer si Billiarder
    if( count($formatedNumber) >= 6 ){
    $nummer .= (int)$formatedNumber[count($formatedNumber)-6] . ' Billiard(er), ';
    }

    //Hvis formatedNumber har fler enn 5 siffer si Billioner
    if( count($formatedNumber) >= 5 ){
      $nummer .= (int)$formatedNumber[count($formatedNumber)-5] . ' Billion(er), ';
    }
    
    //setter antall hundre
    $antallHundre = (((int)($formatedNumber[3] / 100) ?: '')); 

    //Hvis formatedNumber har 1,2,3,4 sifre si Milliarder, Millioner, Tusen, antall hundre og 
    $nummer .= (int)$formatedNumber[count($formatedNumber)-4] . ' Milliard(er), ';
    $nummer .= (int)$formatedNumber[count($formatedNumber)-3] . ' Million(er), ';  
    $nummer .= (int)$formatedNumber[count($formatedNumber)-2] . ' Tusen, ' . (($antallHundre != '' ? $antallHundre . ' Hundre, ' : ''));
    $nummer .= " og " . (int)($formatedNumber[count($formatedNumber)-1] % 100);
  }
  return $nummer;
}

?>

</table>
</body>
</html>