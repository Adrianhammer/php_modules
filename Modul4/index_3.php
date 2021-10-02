<?php

echo "<h1>Oppgave 3: endring av en medlemsoppføring</h1>";
echo "<h3> Medlemsinformasjon </h3>";

$infoMember  = array
(
      "firstName"           => "Adrian", 
      "lastName"            => "Hammer", 
      "address"             => "Kaserneveien 30", 
      "Zipcode"             => "4630", 
      "City"                => "Kristiansand",
      "Phonenumber"         => "91166190",
      "Email"               => "adrhmmr@gmail.com",
      "Dateofbirth"         => date("13-11-2000"),
      "Sex"                 => "Male",
      "Interests"           => "Music",
      "Courseactivities"    => "IT",
      "Membersince"         => date("01.10.2021"),
      "Kontingentstatus"    => "Betalt"

);



      $infoMember ["firstName"]         = $_GET["fName"] ?? "";
      $infoMember["lastName"]           = $_GET["lName"] ?? "";
      $infoMember["address"]            = $_GET["address"] ?? "";
      $infoMember["Zipcode"]            = $_GET["zip"] ?? "";
      $infoMember["City"]               = $_GET["city"] ?? "";
      $infoMember["Phonenumber"]        = $_GET["phoneNum"] ?? "";
      $infoMember["Email"]              = $_GET["email"] ?? "";
      $infoMember["Dateofbirth"]        = $_GET["dob"] ?? "";
      $infoMember["Sex"]                = $_GET["sex"] ?? "";
      $infoMember["Interests"]          = $_GET["interests"] ?? "";
      $infoMember["Courseactivities"]   = $_GET["courseAct"] ?? "";
      $infoMember["Membersince"]        = $_GET["memberSince"] ?? "";
      $infoMember["Kontingentstatus"]   = $_GET["kontStat"] ?? "";
    
      
      foreach ($infoMember as $output) {
        echo "<p>" . $output . "<p/>";
    }
    
      if (isset($_GET["form_submitted"])) {
          echo ("endringer gjort");
      } else 
       echo ("ingen endringer gjort");
    
    

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

</head>
<body>
<h2>Oppdatere informasjon</h2>

<form action="index_3.php">

<form method="POST" action="index_3.php">

First name:
<input type="text" name="fName" required value=<?php echo $infoMember ["firstName"];?>>

Last name:
<input type="text" name="lName"  required value=<?php echo $infoMember ["lastName"];?>>

<br>Address:
<input type="text" name="address" required value=<?php echo $infoMember ["address"];?>>

Zip code:
<input type="text" name="zip" required value=<?php echo $infoMember ["Zipcode"];?>>

City:
<input type="text" name="city" required value=<?php echo $infoMember ["City"];?>>

<br>Phone number:
<input type="text" name="phoneNum" required value=<?php echo $infoMember ["Phonenumber"];?>>

email:
<input type="text" name="email" required value=<?php echo $infoMember ["Email"];?>>

<label for="dateofbirth">Date of birth:</label>
<input type="date" id="dateofbirth" name="dob" required value="value=<?php echo $infoMember ["Dateofbirth"];?>"
min="1900-01-01"
max="<?php echo date ('Y-m-d'); ?>">

<br>
<label for="sex">Sex:</label>
<select name="sex" id="sex" required value=<?php echo $infoMember ["Sex"];?>>
<option value="male">male</option>
<option value="female">female</option>
<option value="another">another</option>
</select>

<br>Interests:
<input type="text" name="interests" required value=<?php echo $infoMember ["Interests"];?> >

Course activities:
<input type="text" name="courseAct" required value=<?php echo $infoMember ["Courseactivities"];?> >

<br>
<label for="start">Member since:</label>
<input type="date" id="start" required name="memberSince" value="value=<?php echo $infoMember ["Membersince"];?>"
min="2010-01-01"
max="<?php echo date ('Y-m-d'); ?>"
>

<br>Kontingentstatus:
<input type="text" name="kontStat" required value=<?php echo $infoMember ["Kontingentstatus"];?>>
<br>
<input type="hidden" name="form_submitted" value="1">
<input type="submit" value="Submit" class="submitbtn">


</form>
</body>
</html>