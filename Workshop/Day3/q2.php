<?php
$username = "root";
$password = "root";
$db="result";
$table="class1";
$conn = mysqli_connect("localhost:3307", $username, $password,$db) or die(mysqli_connect_error());
mysqli_select_db($conn,$db) or die(mysqli_error($conn));
echo "Connected successfully <br>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marks</title>
  </head>
  <body>
    <form  action="connect.php" method="post">
      <label for="Name">Name: </label>
      <input type="text" name="name"><br>
      <br><label for="sub1">Sub1: </label>
      <input type="text" name="sub1"><br>
      <br><label for="sub2">Sub2: </label>
      <input type="text" name="sub2"><br>
      <br><label for="sub3">Sub3: </label>
      <input type="text" name="sub3"><br>
      <br><label for="sub4">Sub4: </label>
      <input type="text" name="sub4"><br>
      <br><label for="sub5">Sub5: </label>
      <input type="text" name="sub5" ><br>
      <br><input type="submit" name="submit">
    <input type="Submit" name="update" value="Update">
    </form>
  </body>
</html>
<?php

if(isset($_POST['submit'])){
$name=$_POST['name'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$total_ob=$sub1+$sub2+$sub3+$sub4+$sub5;
$total=500;
$per=($total_ob/$total)*100;
echo "Total Marks Obtained: " . $total_ob ."<br>";
echo "Total Marks: " . $total ."<br>";
echo "Percentage: " . $per ."<br>" ;

$sql ="INSERT INTO `class1`( `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percentage`) VALUES ('$name','$sub1','$sub2','$sub3','$sub4','$sub5','$total_ob','$total','$per')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

}
if (isset($_POST['update'])) {
  $name=$_POST['name'];
  $sub1=$_POST['sub1'];
  $sub2=$_POST['sub2'];
  $sub3=$_POST['sub3'];
  $sub4=$_POST['sub4'];
  $sub5=$_POST['sub5'];
  $total_ob=$sub1+$sub2+$sub3+$sub4+$sub5;
  $total=500;
  $per=($total_ob/$total)*100;
  echo "Total Marks Obtained: " . $total_ob ."<br>";
  echo "Total Marks: " . $total ."<br>";
  echo "Percentage: " . $per ."<br>" ;
  $sql="UPDATE `class1` SET `sub5`='$sub5',`total obtained`='$total_ob',`percentage`='$per' WHERE 1";
  if(mysqli_query($conn, $sql)){
      echo "Records updated successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>