<?php
    session_start();
    if(isset($_SESSION["FNAME"]) !== true) {
        header("Location: index7.1.php");
        exit();
    } else{
        echo "Hei " . $_SESSION["FNAME"] . " " .$_SESSION["LNAME"] . ","; 
        echo " Dersom du kan lese dette, så er du logget inn<br><br>";
    }

    if (isset($_REQUEST['loggut'])) {
        session_unset();
        session_destroy();
        header("Location: index7.1.php");
        exit();
    }
?>


<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="request">
<input type="submit" name="loggut" value="Logg Ut">
</form>