<?php
require_once("./config.php");
session_start();
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$repassword=$_POST['re_pass'];
	if($password==$repassword){
$sql="insert into user(name,mobile,email,pass) values('".$name."',".$mobileno.",'".$email."','".$password."')";
$query=mysqli_query($con,$sql);

if($query){
	    $_SESSION["username"] = $name;
	    header('location:index.php ');
        }
else{
       echo "Error";
    }
	}
	else
	{
		echo "Please Enter Same Password";
	}
}
?>