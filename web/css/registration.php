<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
#$gender = $_POST['Gender'];
$mobile= $_POST['mobile'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['psw'];
$dbConnected= mysqli_connect("localhost","root","");
$dbSelected =mysqli_select_db($dbConnected,"sih");
$dbsucess=true;
if($dbConnected)
{
     if($dbSelected){
	     $dbsucess=true;
      }
     else{
	     $dbsucess=false;
      }
}
else
{
	$dbsucess=false;
}


if($dbsucess){
    $sql= "insert into registration  values('$firstname','$lastname','$mobile','$dob','$email','$password')";
        if(mysqli_query($dbConnected,$sql))
        {
	        echo" <script>alert('Registration done successfully');</script>";

          }
        else{
	       echo"<script>alert('registration failed');</script>";
         }

    }

?>
