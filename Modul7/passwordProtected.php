<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

session_start();
if(!isset($_SESSION["user"]["loggedin"]) || $_SESSION["user"]["loggedin"] !==true) {
        header("Location: login.php");
        exit();
    }

    echo "If you can read this, you are logged in 👍";
?>


</body>
</html>