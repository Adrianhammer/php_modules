<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Oppgave 5: kryptering</h1>

<?php

    $string = "Encryption";
    
    print "Original string: <b>$string</b> \n";
    
    $encrypt = encrypt($string);
    $decrypt = decrypt($encrypt); 
    
    //encrypt funksjon som krypterer string
    //str_split splitter stringen til en array
    function encrypt($stringInput) {
      
      $splitString = str_split($stringInput);
      $tempArr = [];
      
      //ord funksjonen returnerer ASCII verdien av første karakteren av stringen
      foreach ($splitString as $char) {
        $kryptert = ord($char); 
        $tempArr[] = (string)$kryptert; 
      }
      
      $encryptedString = implode("", $tempArr);
    
      print "<br>the encrypted string: <b>$encryptedString</b>";

      return $tempArr;
      
    }
    
    //decrypt funksjon som dekrypterer string

    function decrypt($input) {
      $tempArr = [];

      //chr funksjonen returnerer en bokstav fra ASCII verdien 
      foreach ($input as $char) {
        $dekrypt = chr($char); 
        $tempArr[] = (string)$dekrypt;
      }
      
      $decryptedString = implode("", $tempArr);
      
      print "<br>The decrypted string: <b>$decryptedString</b>";
    }

    ?>


</body>
</html>