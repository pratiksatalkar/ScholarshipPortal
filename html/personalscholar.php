<?php
require_once("./config.php");
if(isset($_POST['perscholar']))
{

$gender=$_POST['gender'];
$merit=$_POST['merit'];
$disability=$_POST['disability'];
$income=$_POST['income'];
$religion=$_POST['religion'];
$field=$_POST['field'];

	//echo $category;
}

	if($gender!="0"&$merit!="0"&$disability!="0"&$income!="0"&$religion!="0"&$field!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and gender='$gender' and merit='$merit' and income>=$income and  disability='$disability' and  studyField='$field' ";
    $search_result=filterResult($query); 

    if($search_result->num_rows>0){
	   // echo "<table class='table table-bordered'>";
		//echo "<thead>
		  //      <tr><th>Id</th>
            //   <th>Scholorship Name</th>
              // <th>State</th>
               //<th>Ministry</th>
			   //<th>Status</th>
			   //<th>View Details</th></tr></thead>";
	while($row=mysqli_fetch_assoc($search_result)){
	
		//echo "<tbody><tr>";
  		//echo "<td>".$row['id']."</td>";
		//echo "<td>".$row['scholorshipName']."</td>";
		//echo "<td>".$row['state']."</td>";
		//echo "<td>".$row['ministry']."</td>";
		//echo "<td>".$row['status']."</td>";
		//echo "<td><a href='schemeDetails.php?id=".$row['id']."'>View Details</a></td>";
		//echo "<td></td>";
		//echo "</tr></tbody>";

	echo "<div class='card'> 
               <article class='col-lg-2'>
                    <img src='../images/cardi1.png' alt='hi' width='81.6px' height='50px'><br>
                    <h5>2348 views</h5>
               </article>
               <article class='col-lg-7'>";
    echo "<h3 class ='card-head'><a href='ScholorshipDescription.php?id=".$row['id']."'>".$row['scholorshipName']."</a></h3>";        
    echo "<p> <img src='../images/cardi2.png' alt='icon'><b>Ministry: </b> ".$row['ministry']."</p>";
    echo  "<p><img src='../images/cardi3.png' alt='award'><b>State: </b>".$row['state']."</p>";
    echo  "</article>
            <article class='col-lg-3' id ='card-active' style='border-left:1px solid grey;  padding-left:6%;'>";
           echo   "<h1>".$row['status']."</h1>";
    echo "</article></div>";
	}	
	//echo "</table>";
}
else{
	echo  "<center><b>No result Found</b></center>";
}
   
}
else{
	$message = "fill all fields";
    echo "<script type='text/javascript'>alert('$message');</script>";

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


?>

<!DOCTYPE html>
 <html>
 <head>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="../css/sample.css">

     <title></title>
 </head>
 <body>
 
 </body>
 </html>
