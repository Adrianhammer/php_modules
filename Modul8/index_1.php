<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<td><a href=""></a></td>

<?php

$local_dir = "../";

$pointer = opendir($local_dir);

echo "<table border=\"1\">";
echo "<tr>";
echo "<th>Filnavn</th>";
echo "<th>Filtype</th>";
echo "<th>Filstørrelse</th>";
echo "<th>Sist endret</th>";
echo "<th>Kjørbar</th>";
echo "<th>Lesbar</th>";
echo "<th>Skrivbar</th>";
echo "</tr>";


while($file = readdir($pointer)) {
    echo "<tr>";
    echo "<td><a href=\"" . $local_dir . $file . "\">" . $file . "</a></td>";
    echo "<td>" . filetype($local_dir . $file) . "</td>";
    echo "<td>" . filesize($local_dir . $file) . " kb" . "</td>";
    echo "<td>" . date("F d Y H:i:s" , filemtime($local_dir . $file)) . "</td>";

    if (is_executable($local_dir . $file)){
        echo " <td>Is executable </td>";
    } else {
        echo "<td>Is not executable </td>";
    }

    if (is_readable($local_dir . $file)){
        echo " <td>yes</td>";
    } else {
        echo "<td>no</td>";
    }

    if (is_writeable($local_dir . $file)){
        echo " <td>yes</td>";
    } else {
        echo "<td>no</td>";
    }

    echo "</tr>";
}
   
closedir($pointer);

?>

</body>
</html>