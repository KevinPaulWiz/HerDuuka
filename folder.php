<?php

// change the name below for the folder you want
$dir = "new_folder_name";

$file_to_write = 'test.txt';
$content_to_write = "The content";

if( is_dir($dir) === false )
{
    mkdir($dir);
}

$file = fopen($dir . '/' . $file_to_write,"w");

// a different way to write content into
// fwrite($file,"Hello World.");

fwrite($file, $content_to_write);

// closes the file
fclose($file);

// this will show the created file from the created folder on screen
include $dir . '/' . $file_to_write;

?>

<?php
    if(isset($_POST['submit'])){
session_start();
$allowedExts = array("doc", "docx");
$extension = end(explode(".", $_FILES["upload"]["name"]));

if (($_FILES["upload"]["size"] < 200000)
&& in_array($extension, $allowedExts)) {
    if ($_FILES["upload"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["upload"]["error"] . "<br />";
    }
    else
    {
        echo "Upload: " . $_FILES["upload"]["name"] . "<br />";
        echo "Type: " . $_FILES["upload"]["type"] . "<br />";
        echo "Size: " . ($_FILES["upload"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["upload"]["tmp_name"] . "<br />";

        if (file_exists("Proposals/".$_SESSION["FirstName"] ."/" . $_FILES["upload"]["name"]))
        {
            echo $_FILES["upload"]["name"] . " already exists. ";
        }
        else
        {
            // Check if directory exists if not create it 
            if(!is_dir("Proposals/". $_SESSION["FirstName"] ."/")) {
               mkdir("Proposals/". $_SESSION["FirstName"] ."/");
             }
             move_uploaded_file($_FILES["upload"]["tmp_name"],
            "Proposals/". $_SESSION["FirstName"] ."/". $_FILES["upload"]["name"]);
            echo "Stored in: " . "Proposals/". $_SESSION["FirstName"] ."/". $_FILES["upload"]["name"];
        }
    }
} else {
    echo "Invalid file";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    Select a file: <input type="file" name="upload">
<input type="submit">
</body>
</html>