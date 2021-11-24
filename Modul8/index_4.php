<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 4</h1>

    <form action="index_4.php" method="get">
        <input type="hidden" name="act" value="run">
        <input type="submit" value="Last ned">
    </form>


<?php


if (!empty($_REQUEST['act'])) {
    download("C:/xampp/htdocs/files/log.pdf");
}

function download ($filepath) {

    if (file_exists($filepath)) {

        header('Content-Description. File Transfer');
        header('Content-Type: application/octet-stream');
        header('Cache-Control: no cache, must-revalidate');
        header('Expires: 0');
        header('Content-Disposition: atachment; filename="'.basename($filepath).'"');
        header('Content-Length: ' . filesize($filepath));
        header('Pragma: public');

        ob_clean();
        flush();
        readfile($filepath);
        exit();
    }
}

?>






</body>
</html>