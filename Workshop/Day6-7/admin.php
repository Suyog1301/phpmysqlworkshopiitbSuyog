<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
  <body>
    <nav>
      <nav class="nav navbar-dark navbar-expand-sm fixed-top bg-primary">
        <div class="container">
          <h3 style="color: aliceblue;">Admin-Server</h3>
        </div>
        <form class="" action="admin.php" method="post">
          <button type="submit" class="btn btn-primary" name="logout">LogOut</button>
        </form>
      </nav>
    </nav>
<div class="modal fade" id="addstudents" role="dialog">
  <div class="modal-dialog modal-lg" role="content">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h2 style="color:#ffffff;">Add Student</h2>
        <button type="button" class="close" data-dismiss="modal" style="color:#ffffff">&times;</button>
      </div>
      <div class="modal-body">
        <form  action="admin.php" method="post">
          <div>
            <label for="Firstname">Firstname</label>
            <input type="text" name="fname1">
            &nbsp; &nbsp;<label for="Lastname">Lastname</label>
            <input type="text" name="lname1">
          </div>
          <br><div>
            <label for="Email">Email-Id</label>
            <input type="email" name="email1" style="width:300px;">
          </div>
          <br><div>
            <label for="username">Username</label>
            <input type="text" name="uname1">
            &nbsp; &nbsp;<label for="Lastname">Password</label>
            <input type="password" name="pname1">
          </div>

          <br><h4>Add Marks</h4>
          <br><div>
            <label for="php">PHP</label>
            <input type="number" name="php1" style="width:100px;">
            &nbsp; &nbsp;<label for="Lastname">MYSQL</label>
            <input type="number" name="mysql1" style="width:100px;">
            &nbsp; &nbsp;<label for="Lastname">HTML</label>
            <input type="number" name="html1" style="width:100px;">
          </div>
          <br><button type="submit" class="btn btn-primary" name="add1">Register Student</button>
        </form>
      </div>
    </div>
  </div>

</div>
<div class="modal fade" id="updatemarks" role="dialog">
  <div class="modal-dialog modal-lg" role="content">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h2 style="color:#ffffff;">Update Marks</h2>
        <button type="button" class="close" data-dismiss="modal" style="color:#ffffff;">&times;</button>
      </div>
      <div class="modal-body">
        <form  action="admin.php" method="post">
          <label for="id">Enter the serial Number of the students whose records has to be Updated</label>
          <input type="number" name="id2">
          <br><br><h4>Update Marks</h4>
          <br><br><label for="php">PHP</label>
          <input type="number" name="upphp">
          <br><br><label for="mysql">MYSQL</label>
          <input type="number" name="upmysql">
          <br><br><label for="html">HTML</label>
          <input type="number" name="uphtml">
          <br><br><button type="submit" class="btn btn-primary" name="update1">Update Marks</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deleterecord" role="dialog">
  <div class="modal-dialog modal-sm" role="content">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h2 style="color:#ffffff;">Delete Record</h2>
        <button type="button" class="close" data-dismiss="modal" style="color:#ffffff;">&times;</button>
      </div>
      <div class="modal-body">
        <form  action="admin.php" method="post">
          <label for="id">Enter the Serial no of the student tobe Deleted from the Records</label>
          <input type="number" name="idno" style="width:100px;">
          <br><br><button type="submit" class="btn btn-primary" name="delete1">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <h2 align="center" style="margin-top:100px;">Admin server</h2>
    <div class="access_button" align="center" style="margin-top:50px;">
      <button type="submit" class="btn btn-primary" name="add" id="openstudent" data-toggle="modal" data-target="#addstudents">ADD</button>
      <button type="submit" class="btn btn-primary" name="update" id="openupdate"data-toggle="modal" data-target="#updatemarks">UPDATE</button>
      <button type="submit" class="btn btn-primary" name="delete"data-toggle="modal" data-target="#deleterecord">DELETE</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>

<?php
$username = "root";
$password = "root";
$db="studentportal";
$table="portal_db";
$conn = mysqli_connect("localhost:3307", $username, $password,$db) or die(mysqli_connect_error());
mysqli_select_db($conn,$db) or die(mysqli_error($conn));
session_start();
if(isset($_POST['logout'])){
  session_destroy();
  header('Location:index.php');
}
if(isset($_POST['add1']))
{
$fname1=$_POST['fname1'];
$lname1=$_POST['lname1'];
$email1=$_POST['email1'];
$uname1=$_POST['uname1'];
$pname1=$_POST['pname1'];
$php1=$_POST['php1'];
$mysql1=$_POST['mysql1'];
$html1=$_POST['html1'];
$total=$php1+$mysql1+$html1;
$per=($total*100)/300;
if($php1!=0 && $mysql1!=0 && $html1!=0){
  $sqlcom="INSERT INTO `portal_db`( `Firstname`, `Lastname`, `Email`, `Userid`, `Password`, `PHP`, `HTML`, `MYSQL`, `Total`, `Percentage`) VALUES ('$fname1','$lname1','$email1','$uname1','$pname1','$php1','$html1','$mysql1','$total','$per') ";
$addit=mysqli_query($conn,$sqlcom);
if($addit){
  echo "<center><h3>Records Updated Successfully</h3></center>";
}
}
else {
  echo "<center><h3>Please Enter all the Credantials</h3></center>";
}
}
if(isset($_POST['update1'])){
  $num=$_POST['id2'];
  $upphp=$_POST['upphp'];
  $upmysql=$_POST['upmysql'];
  $uphtml=$_POST['uphtml'];
  $total1=$upphp+$uphtml+$upmysql;
  $per1=($total1*100)/300;
  if($upphp!=0 && $upmysql!=0 && $uphtml!=0){
  $sqlcom1="UPDATE `portal_db` SET `PHP`='$upphp',`HTML`='$uphtml',`MYSQL`='$upmysql',`Total`='$total1',`Percentage`='$per1' WHERE `id`='$num'";
  $updateit=mysqli_query($conn,$sqlcom1);
  if($updateit){
    echo "<center><h3>Records Updated Successfully</h3></center>";
  }
}
else {
  echo "<center><h3>Please Enter all the Credantials</h3></center>";
}
}
if(isset($_POST['delete1'])){
  $num1=$_POST['idno'];
  if ($num1!=0) {
    $sqlcom2="DELETE FROM `portal_db` WHERE `id`='$num1'";
    $deleteit=mysqli_query($conn,$sqlcom2);
    if($delteit){
      echo "<center><h3>Records Deleted Successfully</h3></center>";
    }
  }
  else {
    echo "<center><h3>Please Enter all the Credantials</h3></center>";
  }
}
$sql2=" SELECT * FROM `portal_db` ";
$check2=mysqli_query($conn,$sql2);

$getrows=mysqli_num_rows($check2);

echo "
<h4 style=\"margin-left:80px;\">No of Students Registered Till now</h4>
<style>
th,td{
  padding: 15px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<table border =1 align=\"center\" style=\" margin-top:10px; width:90%;\">
<tr>
<th>No</th>
<th>Name</th>
<th>Username</th>
<th>Password</th>
<th>PHP</th>
<th>HTML</th>
<th>MYSQL</th>
<th>total</th>
<th>Percentage</th>
</tr>";
if($getrows!=0){
  while($rows=mysqli_fetch_assoc($check2))
  {
    echo "
    <tr>
    <td>" . $rows['id'] . "</td>
    <td>" . $rows['Firstname']. "  " . $rows['Lastname'] . "</td>
    <td>" . $rows['Userid'] . "</td>
    <td>" . $rows['Password'] . "</td>
    <td>" . $rows['PHP']  . "</td>
    <td>" . $rows['HTML'] . "</td>
    <td>" . $rows['MYSQL'] . "</td>
    <td>" . $rows['Total'] . "</td>
    <td>" . $rows['Percentage']  . "</td>
    </tr>";
  }
}
echo "</table>";
mysqli_close($conn);

 ?>