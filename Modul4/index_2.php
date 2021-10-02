<html lang="en">
<head>
    
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

echo "<pre>";
print_r($form);
echo "<pre>";

?>          

<?php else: ?>

<div class="container"> 

<form action="index_2.php" method="POST">

First name:
<input type="text" name="form[]" required>

Last name:
<input type="text" name="form[]" required>

<br>Address:
<input type="text" name="form[]" required>

Zip code:
<input type="text" name="form[]" required>

City:
<input type="text" name="form[]" required>

<br>Phone number:
<input type="text" name="form[]" required>

email:
<input type="text" name="form[]" required>

<label for="dateofbirth">Date of birth:</label>
<input type="date" id="dateofbirth" name="form[]" required value="<?php echo date ('Y-m-d'); ?>"
min="1900-01-01"
max="<?php echo date ('Y-m-d'); ?>">

<br>
<label for="sex">Sex:</label>
<select name="form[]" id="sex" required>
<option value="male">male</option>
<option value="female">female</option>
<option value="another">another</option>
</select>

<br>Interests:
<input type="text" name="form[]" required>

Course activities:
<input type="text" name="form[]" required>

<br><label for="start">Member since:</label>
<input type="date" id="start" required name="form[]" value="<?php echo date ('Y-m-d'); ?>"
min="2010-01-01"
max="<?php echo date ('Y-m-d'); ?>"
>

<br>Kontingentstatus:
<input type="text" name="form[]" required>

</div>

<br>
<input type="hidden" name="form_submitted" value="1">

<input type="submit" value="Submit" class="submitbtn">

</form>

<?php endif; ?>

</body>
</html>