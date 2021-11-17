<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Oppgave: autentisering</h1>

<?php

//prøvd å logge inn?
if(isset($_REQUEST["login"])) {
    //koble til db
    require_once("");

    //lager sql query struktur
    $sql = "SELECT ID, FNAME, LNAME, PWORD
            FROM members WHERE USERNAME = :USERNAME";

    //steg1 1: forberede query
    $sp = $pdo->prepare($sql);

    //steg 2: kobler parametrene våre med SQL-query structure
    $sp->bindParam(":USERNAME", $username, PDO::PARAM_STR);
    $username = $_REQUEST["uname"];

    //steg 3: utfører query og henter resultatet
    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

    //hent data om medlemmet
    $member = $sp->fetch(PDO::FETCH_OBJ);

    //burde ha en sjekk om hvorvidt database returnerte et treff
    //Må alltid "vaske" input fra brukeren før vi bruker det

    //Sjekker om passordet er gyldig
    if(password_verify($_REQUEST["pword"], $member->PASSWORD)) {
        //Passordene matcher: setter SESSION
        session_start();
        $_SESSION["user"]["loggedin"] = true;
        $_SESSION["user"]["FNAME"] = $member->FNAME;
        //videresender brukeren til innsiden av systemet
        header("Location: passwordProtected.php");
        exit();
    } else {
        echo "Username and/or password is wrong";
    }
}

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Type in username" name="uname" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Type in password" name="pword" required>

        <input type="submit" name="login" value="Login"/>
    </div>
</form>


</body>
</html>