<?php
require_once("./config.php");
session_start();
if(isset($_POST['signin']))
{
	$name=$_POST['your_name'];
	$pass=$_POST['your_pass'];
$sql="select name,pass from user where name='".$name."' and  pass='".$pass."' ";
$query=mysqli_query($con,$sql);
if($query){
	//echo "done";
		
		$_SESSION["username"] = $name;
	    header('location:index.php');
}
else{
echo "Error";
}
	}

?>