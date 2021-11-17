<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Oppgave 2: registrering av nytt medlem</h1>

<?php

include "dbConn.php"; //bruker db connection fil

if(isset($_POST["submit"]))
{
    $fName = $_POST["FNAME"];
    $lName = $_POST["LNAME"];
    $address = $_POST["ADDRESS"];
    $zipcode = $_POST["ZIPCODE"];
    $city = $_POST["CITY"];
    $phoneNum = $_POST["PHNUM"];
    $email = $_POST["EMAIL"];
    $dob = $_POST["DATEOFBIRTH"];
    $sex = $_POST["SEX"];
    $interests = $_POST["INTERESTS"];
    $courseAct = $_POST["COURSEACT"];
    $membSince = $_POST["MEMBSINCE"];
    $kontStat =  $_POST["KONTSTAT"];

    $insert = 
    mysqli_query($db,  "INSERT INTO medlemmer_info_2(`FNAME`, `LNAME`, `ADDRESS`, `ZIPCODE`, `CITY`, `PHNUM`, `EMAIL`, `DATEOFBIRTH`, `SEX`, `INTERESTS`, `COURSEACT`, `MEMBSINCE`, `KONTSTAT`)
    VALUES ('$fName', '$lName', '$address', '$zipcode', '$city', '$phoneNum', '$email', '$dob', '$sex', '$interests', '$courseAct', '$membSince', '$kontStat') ");

    if(!$insert) {
        echo mysqli_error($db);
    } else {
        echo "Member succesfully added!";
    }
}

mysqli_close($db); //lukke connection
?>

<h3>Fill the form 👍</h3>

<form method="POST">
    Full Name : <input type="text" name="FNAME" placeholder="Enter Full Name" Required>
    <br/>
    last name : <input type="text" name="LNAME" placeholder="Enter Last Name" Required>
    <br/>
    Address : <input type="text" name="ADDRESS" placeholder="Enter Address" Required>
    <br/>
    Zip code : <input type="text" name="ZIPCODE" placeholder="Enter zip code" Required>
    <br/>
    City : <input type="text" name="CITY" placeholder="Enter city" Required>
    <br/>
    Phone number : <input type="text" name="PHNUM" placeholder="Enter phone number" Required>
    <br/>
    email : <input type="text" name="EMAIL" placeholder="Enter email" Required>
    <br/>

    <label for="dateofbirth">Date of birth:</label>
    <input type="date" id="dateofbirth" name="DATEOFBIRTH" required value="<?php echo date ('Y-m-d'); ?>"
    min="1900-01-01"
    max="<?php echo date ('Y-m-d'); ?>">

    <br>
    <label for="sex">Sex:</label>
        <select name="SEX" required>
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="another">another</option>
        </select>
    
    <br/>
    Interests : <input type="text" name="INTERESTS" placeholder="Enter interests" Required>
    <br/>
    Course activities : <input type="text" name="COURSEACT" placeholder="Enter course activities" Required>

    <br><label for="start">Member since:</label>
    <input type="date" id="start" required name="MEMBSINCE" value="<?php echo date ('Y-m-d'); ?>"
    min="2010-01-01"
    max="<?php echo date ('Y-m-d'); ?>">

    <br/>
    Kontingentstatus: <input type="text" name="KONTSTAT" placeholder="Enter kontingentstatus" Required>
    <br/>
    
  <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>
