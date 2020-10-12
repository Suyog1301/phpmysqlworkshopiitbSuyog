<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload file</title>
  </head>
  <body>
    <h1>Upload a file</h1>
    <form  action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file"><br>
    <br>  <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>

<?php
$name=$_FILES["file"]["name"];
$type=$_FILES["file"]["type"];
$size=$_FILES["file"]["size"];
$folder=$_FILES["file"]["tmp_name"];
echo  "Filename: " .$name . "<br>";
echo  "Filetype: " . $type . "<br>";
echo "Filesize: " . $size  . "<br>";
echo "Location: " . $folder;
 ?>