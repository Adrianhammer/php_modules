<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>oppgave 2</h1>
    

<?php

$file = fopen("log.txt", "a") or die("Cant open file");

$txt = "Refreshed at " . date("F d Y H:i:s") . "\n";


$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');


if($is_page_refreshed){
    echo "Yes page Refreshed <br>";
    fwrite($file, $txt);
}else{
    echo "No";
}


$data = array_slice(file("log.txt"), -10);
foreach ($data as $line) {
    echo "<br>" . $line;
}




fclose($file);



?>

</body>
</html>