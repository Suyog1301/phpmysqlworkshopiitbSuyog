<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <nav>
      <nav class="nav navbar-dark navbar-expand-sm fixed-top bg-primary">
        <div class="container">
          <h3 style="color: aliceblue;">Results</h3>
        </div>
        <form class="" action="student.php" method="post">
          <button type="submit" class="btn btn-primary" name="logout">LogOut</button>
        </form>
      </nav>
    </nav>
    <div class="modal fade" id="sendmail" role="dialog">
      <div class="modal-dialog modal-sm" role="content">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h2 style="color:#ffffff;">Sendmail</h2>
            <button type="button" class="close" data-dismiss="modal" style="color:#ffffff;">&times;</button>
          </div>
          <div class="modal-body">
            <form  action="student.php" method="post">
              <label for="id">Enter the Email-Id</label>
              <input type="email" name="email" style="width:250px;">
              <br><br><button type="submit" class="btn btn-primary" name="sendmail">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
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
    $name= $_SESSION['username'];
    echo "<br><br><h1><center> Here goes your Result</center></h2>";
    $getname="SELECT `Firstname` FROM `portal_db` WHERE `Userid`='$name'";
    $check=mysqli_query($conn,$getname);
    $getrow=mysqli_num_rows($check);
    if($getrow!=0){
      while($row=mysqli_fetch_assoc($check)){
        $name1=$row['Firstname'];
      }
    $sql="SELECT * FROM `portal_db` WHERE `Userid`='$name'";
    $check1=mysqli_query($conn,$sql);
    $getrow1=mysqli_num_rows($check1);
    echo "
    <style>
    th,td{
      padding: 15px;
      text-align: left;
    }
    tr:nth-child(odd) {background-color: #f2f2f2;}
    </style>
    <table border=1 align=\"center\" style=\" margin-top:50px; width:80%;\">
    <tr>
    <th>Subject Name</th>
    <th>Marks Obtained</th>
    <th>Out Off</th>
    </tr>";
    if($getrow1!=0)
    {
      while($row1=mysqli_fetch_array($check1)){
        $name=$row1['Firstname'] ." " .$row1['Lastname'];
        echo "<br><center><h3>Name: $name </h3></center>" ;
        echo "
        <tr>
        <td> PHP</td>
        <td>" . $row1['PHP'] . "</td>
        <td>100</td>
        </tr>";
        echo "<tr>";
        echo "<td> HTML </td>";
        echo "<td>" . $row1['HTML'] . "</td>";
        echo "<td>100</td>";
        echo "<tr>";
        echo "</tr>";
        echo "<td> MYSQL </td>";
        echo "<td>" . $row1['MYSQL'] . "</td>";
        echo "<td>100</td>";
        echo "</tr>";
        $PHP=$row1['PHP'];
        $MYSQL=$row1['MYSQL'];
        $HTML=$row1['HTML'];
        $total= $row1['Total'];
        $per=$row1['Percentage'];
        echo "<br><center><h3>Total: $total/300   || Percentage: $per%</h3></center>" ;
        if($per<60 && $per>35)
        {
          echo "<br><center><h3>BETTER LUCK NEXT TIME</h3></center>";
          $type1="Pass";
        }
        elseif($per<35 && $per>1)
        {
          echo "<br><center><h3>BETTER LUCK NEXT TIME</h3></center>";
          $type1="Fail";
        }
        elseif ($per==0 || $per==NULL) {
          echo "<br><center><h3>Your result is not declared yet please try again after sometime</h3></center>";
        }
        else {
          echo "<br><center><h3>Congratulations!! You have Secured DISTINCTION in your Examination</h3></center>";
          $type1="DISTINCTION";
        }
      }

    }
    echo "</table>";
    }
    if(isset($_POST['sendmail'])){
      echo "<center><h3>Mail Sent Successfully</h3></center>";
      $mailto = $_POST["email"];
      $adminmail= "prafulponnappan@gmail.com";
      $subject = "Result of your child";
      $msg = "Hello Sir/Ma'am,\nResults has been declared.Your's child result as follows: \n Name:$name \n Marks obtained in \n PHP=$PHP \n HTML=$HTML \n MYSQL=$MYSQL \n TOTAL=$total/300  \n PERCENTAGE=$per% \n RANK SECURED=$type1 ";
      $msg = wordwrap($msg, 200);
      $headers = "From: prafulponnappan@gmail.com";
      $headers1 = "From: $mailto";
      mail($mailto,$subject,$msg,$headers);
    }
    mysqli_close($conn);
     ?>
     <center><button type="button" name="button" class="btn btn-primary" style="margin-top:50px;" data-toggle="modal" data-target="#sendmail" >Send Mail To</button></center>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>