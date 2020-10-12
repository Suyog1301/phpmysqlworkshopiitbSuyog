<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strings</title>
  </head>
  <body>
    <form  action="tri.php" method="post">
      <label for="string">Enter any String</label>
      <input type="text" name="string"><br>
      <input type="submit" name="submit">
    </form>
  </body>
</html>
<?php
if(isset($_POST["submit"]))
{
  $string=$_POST["string"];
  echo strlen($string) , "<br>";
  $new=explode(" ",$string);
  $name1=implode($new);
  echo $name1 . "<br>";
  echo strrev($string). "<br>";
  echo mb_strtolower($string). "<br>";
  echo mb_strtoupper($string) . "<br>";
  $substring="Nothing";
  echo "Before Replacing Substring =  " . $substring . "<br>";
  $res=substr_replace($substring,$string,0,strlen($substring));
  echo "After Replacing Substring = " . $res . "<br>";
}
 ?>