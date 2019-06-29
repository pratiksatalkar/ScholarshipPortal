<?php
require_once("./config.php");

if(isset($_GET['id'])){
echo $_GET['id'];

}


 function filterResult($query){
	 global $con;
	//$con = mysqli_connect("localhost", "Anand", "anand", "demo");
	$search_result= mysqli_query($con,$query);
	return $search_result;
}

?>