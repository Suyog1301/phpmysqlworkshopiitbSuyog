<?php
$username = "root";
$password = "root";
$db="studentportal";
$table="portal_db";
$conn = mysqli_connect("localhost:3307", $username, $password,$db) or die(mysqli_connect_error());
mysqli_select_db($conn,$db) or die(mysqli_error($conn));

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.style{
    border:1px solid black;
    border-radius: 10px;
    margin-top: 150px;
    margin-left: 250px;
    height: 500px;
}
.style1{
    border: 1px solid black;
    border-radius: 10px;
    margin-top: 90px;
    margin-left: 50px;
    height: 600px;

}
.style h2
{
    justify-content: center;
    margin: 30px;
    margin-left: 80px;
}
.style1 input{
    width: 300px;
    border-radius: 10px;
}
.style1 button{
    margin-left: 120px;
    width: 100px;
}
.style1 h2
{
    justify-content: center;
    margin: 30px;
    margin-left: 120px;
}
.style button{
    margin-left: 80px;
    width: 100px;
    margin-top: 50px;
}
.style input{
    width: 250px;
    border-radius: 10px;
}
.or{
  margin-top: 290px;
  margin-left: 40px;
  color:grey;
}
</style>
<body>
    <nav class="nav justify-content-center fixed-top bg-primary">
      <h2 style="color: aliceblue;">Student Portal</h2>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 style">
                <h2>Login</h2>
                <form action="index.php" method="post">
                    <div>
                        <label for="Username">Username</label><br>
                        <input type="text" name="username">
                    </div><br>
                    <div>
                        <label for="password">Password</label><br>
                        <input type="password" name="password">
                    </div><br>
                    <div>
                        <label for="loginas"> Login As</label><br>
                        <select name="logins">
                        <option value="LoginAs">...</option>
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                        </select>
                    </div><br>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>

                </form>
            </div>
            <div class="or">
            <center><h2>OR</h2></center>
            </div>

            <div class="col-sm-4 style1">
                <h2>Register</h2>
                <form action="index.php" method="post">
                    <div>
                        <label for="fname">Firstname</label><br>
                        <input type="text" name="fname">
                    </div><br>
                    <div>
                        <label for="lname">Lastname</label><br>
                        <input type="text" name="lname">
                    </div><br>
                    <div>
                        <label for="email">Email</label><br>
                        <input type="text" name="email">
                    </div><br>
                    <div>
                        <label for="userid">Set Username</label><br>
                        <input type="text" name="uname">
                    </div><br>
                    <div>
                        <label for="pass">Set Password</label><br>
                        <input type="password" name="pname">
                    </div><br>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['login']))
{
  session_start();
  $userid=$_POST['username'];
  $pass=$_POST['password'];
  $type=$_POST['logins'];
if($userid=="" && $pass=="")
{
  echo "<br><center><h3>Please enter the all Credentials<h3></center>";
}
elseif ($userid=='admin' && $pass=='admin1234' && $type=='admin') {
  //admin username=admin password=admin1234 select type as admin
  $_SESSION['admin']=="Admin";
  header('Location:admin.php');
}
else  {
  $sql1="SELECT `Userid`,`Password` FROM $table WHERE `Userid`='$userid' " ;
  $check=mysqli_query($conn, $sql1);
  $count=mysqli_num_rows($check);
  if($count!=0)
  {
    while($row=mysqli_fetch_assoc($check)){
      $dbusername=$row['Userid'];
      $dbpassword=$row['Password'];
    }
    if($userid==$dbusername && $pass==$dbpassword){
      $_SESSION['username']=$userid;
      header('Location:student.php');
    }
    else {
      echo "<center><h3>Incorrect username or Password</h3></center>";
    }
  }

}
}
if(isset($_POST['register'])){
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $Email=$_POST['email'];
  $Userid=$_POST['uname'];
  $Password=$_POST['pname'];
if($Userid!=NULL && $Password!=NULL)
{
  $sql="INSERT INTO `portal_db`( `Firstname`, `Lastname`, `Email`, `Userid`, `Password`, `PHP`, `HTML`, `MYSQL`, `Total`, `Percentage`) VALUES ('$firstname','$lastname','$Email','$Userid','$password',0,0,0,0,0)";
  if(mysqli_query($conn, $sql)){
      echo "<br><center><h3>Registeration Successfull please Login to view your Result</h3></center><br>";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
else {
  echo "<br><center><h3>Please enter All the Credentials</h3></center>";
}

  mysqli_close($conn);
}
?>