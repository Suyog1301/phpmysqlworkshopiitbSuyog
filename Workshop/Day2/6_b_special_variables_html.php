<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marks</title>
  </head>
  <body>
  <form class="marks" action="marks.php" method="post">
    <div class="marks1">
      <label for="s1">Subject1:</label>
      <input type="number" name="m1" placeholder="marks">
    </div><br>
    <div class="marks2">
    <label for="s1">Subject2:</label>
      <input type="number" name="m2" placeholder="marks">
    </div><br>
    <div class="marks3">
      <label for="s1">Subject3:</label>
      <input type="number" name="m3" placeholder="marks">
    </div><br>
    <div class="marks4">
      <label for="s1">Subject4:</label>
      <input type="number" name="m4" placeholder="marks">
    </div><br>
    <div class="marks5">
      <label for="s1">Subject5</label>
      <input type="number" name="m5" placeholder="marks">
    </div><br>
    <button type="submit" name="submit">Submit</button>
  </form>

    </div>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $m1=$_POST['m1'];
  $m2=$_POST['m2'];
  $m3=$_POST['m3'];
  $m4=$_POST['m4'];
  $m5=$_POST['m5'];

  $total=$m1+$m2+$m3+$m4+$m5;
  $perc=($total/500)*100;
  echo "Total marks obtained: " . $total ."<br>";
  echo "\n";
  echo "Total Marks : 500" . "<br>";
  echo "\n";
  echo "Percentage: " . $perc;
}
 ?>