<html lang="en">
<head>
    <link rel="stylesheet" href="index2styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oppgave 2: registrering av nytt medlem</h1>
    <h2>Registration form</h2>

<?php if (isset($_POST['form_submitted'])) : ?> 

<h2>Thank you, your registration info can be seen below:</h2>


<?php

$form = $_POST['form'];
foreach ($form as $forms) {
    echo $forms."<br>";
}

print_r($form);

?>

<?php else: ?>

<div class="container"> 

<form action="index_2.php" method="POST">

First name:
<input type="text" name="form[]">

Last name:
<input type="text" name="form[]">

<br>Address:
<input type="text" name="form[]">

Zip code:
<input type="text" name="form[]">

City:
<input type="text" name="form[]">

<br>Phone number:
<input type="text" name="form[]">

email:
<input type="text" name="form[]">

<label for="dateofbirth">Date of birth:</label>
<input type="date" id="dateofbirth" name="form[]" value="<?php echo date ('Y-m-d'); ?>"
min="1900-01-01"
max="<?php echo date ('Y-m-d'); ?>">

<br>
<label for="sex">Sex:</label>
<select name="form[]" id="sex">
<option value="male">male</option>
<option value="female">female</option>
<option value="another">another</option>
</select>

<br>Interests:
<input type="text" name="form[]">

Course activities:
<input type="text" name="form[]">

<br><label for="start">Member since:</label>
<input type="date" id="start" name="form[]" value="<?php echo date ('Y-m-d'); ?>"
min="2010-01-01"
max="<?php echo date ('Y-m-d'); ?>"
>

<!-- HUSK KONTIGENTSTATUS GREIA -->

</div>

<br>
<input type="hidden" name="form_submitted" value="1">

<input type="submit" value="Submit" class="submitbtn">

</form>

<?php endif; ?>

</body>
</html>