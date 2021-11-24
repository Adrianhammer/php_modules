<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>
</head>
<body>
    <?php
    if(isset($_REQUEST['LOGIN'])) {

        // Include fil med passord:
        require_once("include/includeDB.php");

        // Lager variabler for henting av passord og user
        $user = $_REQUEST['FNAME'];
        $password = $_REQUEST['PWORD'];
        
        // Lager spørring
        $sql = "SELECT FNAME, LNAME, PWORD
                FROM medlemmer WHERE FNAME = ?";
        
        // Initialiserer spørringen og forberederen den m/ error catch
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            echo "Tilfeldig feil";
            exit(); 
        }
        
        // Binder sammen $user variabel med spørringen
        mysqli_stmt_bind_param($stmt, "s", $user);
        
        // Utfører spørring
        mysqli_stmt_execute($stmt);

        // Henter resultat fra spørringen
        $member = mysqli_stmt_get_result($stmt);

        // Henter ut resultatet i form av en array
        $user = mysqli_fetch_assoc($member);       

        // Lager ny variabel for det krypterte passordet i Databasen.
        $hashedPassword = $user['PWORD'];
       
        // Sjekker passord inputen, mot det krypterte passordet i databasen
        $checkPassword = password_verify($password, $hashedPassword);
        
        // Lager en løkke for å sjekke om passordet fungerer, hvis ikke så printer den feilmelding.
        if($checkPassword === TRUE) {
            //Passord matcher, setter session:
            session_start();
            $_SESSION['FNAME'] = $user['FNAME'];
            $_SESSION['LNAME'] = $user['LNAME'];

            //Videresender useren til innsiden av systemet
            header("Location: passordbeskyttet.php");
            exit();
        } else if ($checkPassword === FALSE) {
            echo "brukernavn og/eller passord er ikke riktig.";
        }
        mysqli_stmt_close($stmt);
    }
    ?>

<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
        <label for="FNAME"><b>brukernavn</b></label>
        <input type="text" placeholder="Skriv inn brukernavn" name="FNAME" required>

        <label for="PWORD"><b>Passord</b></label>
        <input type="password" placeholder="Skriv inn passord" name="PWORD" required>

        <input type="submit" name="LOGIN" value="Logg inn">
    </div>
</form>
</body>
</html>