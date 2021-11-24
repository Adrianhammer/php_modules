<?php

if (isset($_REQUEST['upload-send'])) {
    echo "<pre>";
    echo "This script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo "Filename: " . $_FILES['upload-file']['name'] . "<br>";
    echo "Tmp location/name: " . $_FILES['upload-file']['tmp_name'] . "<br>";
    echo "Type: " . $_FILES['upload-file']['type'] . "<br>";
    echo "Size: " . $_FILES['upload-file']['size'] . " bytes<br><br>";
    echo "</pre>";
    
    $messages = array();
    
    if (is_uploaded_file($_FILES['upload-file']['tmp_name'])) {
    
        $filetype = $_FILES['upload-file']['type'];
        $filesize = $_FILES['upload-file']['size'];
        
        $accepted_types = array("image/jpeg",
                               "image/gif",
                               "image/png");
        $max_file_size = 1536000; 
        $directory = $_SERVER['DOCUMENT_ROOT'] . "/Modul8/img/";

        if(!file_exists($directory)) {
            if (!mkdir($directory, 0777, true)) {
                die("Cannot create directory..." . $directory);
            }
        }
        
        $pos = strrpos($_FILES['upload-file']['type'], "/");
        $suffix = substr($_FILES['upload-file']['type'], $pos+1);
        
        do {
            $filename  = date('YmdHis', time()) . '.' . $suffix;
        }
        while(file_exists($directory . $filename));
        
        if (!in_array($filetype, $accepted_types)) {
            $types = implode(", ", $accepted_types);
            $messages[] = "Invalid filetype (only " . $types . " are accepted)";
        }
        if ($filesize > $max_file_size) {
            $messages[] = "The file (" . round($filesize * pow(10, -6), 2) . " MB) exceeds maximum filesize (" . round($max_file_size * pow(10, -6), 2) . " MB)";
        }
        
        if (count($messages) < 1) {
            $filepath = $directory . $filename;
            $uploaded_file = move_uploaded_file($_FILES['upload-file']['tmp_name'], $filepath);
            
            if (!$uploaded_file) {
                $messages[] = "The file could not be uploaded";
            } else {
                $messages[] = "Bildet er lastet opp: <strong>" . $filepath . "</strong>";
            }
        }
    } else {
        $messages[] = "No file selected";
    }

    
    foreach($messages as $message) {
        echo $message . '<br>';
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <p>
            <label for="upload-file">Velg fil</label>
            <input name="upload-file" type="file">
        </p>
        <p>
            <button type="submit" name="upload-send">Last opp fil</button>
            <button type="button" onclick="location.href='/Modul8/img/'" name="profile-picture">Se profil bilde</button>
        </p>
    </form>
</body>
</html>`