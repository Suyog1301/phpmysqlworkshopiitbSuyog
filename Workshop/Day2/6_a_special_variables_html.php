<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guess triangle</title>
  </head>
  <body>
    <form class="sides" action="triangle.php" method="post">
      <input type="number" name="a" value="side1" placeholder="side1">
      <input type="number" name="b" value="side2" placeholder="side2">
      <input type="number" name="c" value="side3" placeholder="side3">
      <button type="Submit" name="submit">Submit</button>
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
    if (($a*$a)+($b*$b)==$c*$c || ($b*$b)+($c*$c)==$a*$a || ($a*$a)+($c*$c)==$a*$a ) {
      echo "It's a Right angle triangle";
    }
    elseif ($a==$b && $b==$c&& $c==$a) {
      echo "IT'S AN EQUILATERAL TRIANGLE";
    }
    elseif ($a==$b ||$b==$c || $c==$a) {
      echo "IT'S AN ISOSCELES TRIANGLE";
    }
    else {
     echo "IT'S AN SCALIAN TRIANGLE";
    }
  }
 ?>