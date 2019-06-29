<?php
require_once("./config.php");

if(isset($_GET['region'])){	
  $Region=$_GET['region'];
 $query = "SELECT id,scholarshipName,organizanationName from internationalscholarships where region='$Region'";
 $search_result = filterResult($query);	

 // $query="select country from internationalscholarships where region='$Region'";
 // $result=filterResult($query);
}



function filterResult($query){
	 global $con;
	$search_result= mysqli_query($con,$query);

	if (!$search_result){
    die('Invalid query: ' . mysql_error());
}
else{
	return $search_result;
}
}

if($search_result->num_rows>0){
	while ($row=mysqli_fetch_assoc($search_result)) {
		echo "<div class='card'> 
               <article class='col-lg-2'>
                    <img src='demo.png' alt='hi' width='81.6px' height='50px'><br>
                    <h5>2348 views</h5>
               </article>
               <article class='col-lg-7'>";
    echo "<h3><a href='ScholorshipDescription.php?id=".$row['id']."'>".$row['scholarshipName']."</a></h3>";        
    echo "<p> <img src='demo1.png' alt='icon'>".$row['organizanationName']."</p>";
//    echo  "<p><img src='demo3.png' alt='award'>".$row['state']."</p>";
    echo  "</article>
            <article class='col-lg-3' style='border-left:1px solid grey;'>";
  //         echo   "<p>".$row['status']."</p>";
    echo "</article></div>";
	}
}

else{
	echo  "<center><b>No result Found</b></center>";
}

// if($result->num_rows>0){
//   echo "<select>";
//   while ($row=mysqli_fetch_assoc($result)) {

// echo "<option value='".$row['country']."'>".$row['country'];
// echo "</option>";
//   }
//   echo "</select>";
// }

// else{
//   echo  "<center><b>No result Found</b></center>";
// }
?>

<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/sample.css">

	<title></title>
</head>
<body>

</body>
</html>
