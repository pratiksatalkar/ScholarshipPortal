<?php
require_once("./config.php");
$today = date("Y-m-d");
if(isset($_GET['search'])){	
$valueToSearch = $_GET['search'];
 $query = "SELECT id,scholorshipName,state,ministry,status FROM govtscheme WHERE id like '%$valueToSearch%' or scholorshipName like '%$valueToSearch%' or state like '%$valueToSearch%' or ministry like '%$valueToSearch%'";
$active="select id,scholorshipName,state,ministry,start_date, end_date from govtscheme where end_date>='$today' order by end_date";
    $active_result=filterResult($active);

 $search_result = filterResult($query);	

if($active_result->num_rows>0){
    while($row= mysqli_fetch_assoc($active_result)){
        $data = array();
        // $data["studyField"]=$row['studyfield'];
        $data["start"]=$row['start_date'];
        $data["end"]=$row['end_date'];

       
                    }
}


}

// if(isset($_GET['state'])){
// 	$query="select id,scholorshipName,state,ministry,status from govtscheme where state='".$_GET['state']."' ";
// 	$search_result=filterResult($query);
// }
if(isset($_GET['ministry'])){
$query="select id,scholorshipName,state,ministry,status from govtscheme where ministry='".$_GET['ministry']."'  ";
	$search_result=filterResult($query);	
}

if(isset($_GET['pro'])){
$query="select id,scholorshipName,state,ministry,status from govtscheme where provider='".$_GET['pro']."'  ";
	$search_result=filterResult($query);	
}

if(isset($_GET['state'])){
$query="select id,scholorshipName,state,ministry,status from statescholarships where state='".$_GET['state']."'  ";
	$search_result=filterResult($query);	
}

if(isset($_GET['gender']))	{
	$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='".$_GET['gender']."' ";
	$search_result=filterResult($query);	
}

if(isset($_GET['Gender'],$_GET['field']))	{
	$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='".$_GET['Gender']."' and 
	studyField='".$_GET['field']."' ";
	$search_result=filterResult($query);	
}

if(isset($_GET['intersearch'])){	
$valueToSearch = $_GET['intersearch'];
 $query ="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships WHERE id like '%$valueToSearch%' or scholorshipName like '%$valueToSearch%' or region like '%$valueToSearch%' or organizanationName like '%$valueToSearch%'";
 $search_result = filterResult($query);	
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

header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
  header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
  header( "Cache-Control: no-cache, must-revalidate" );
  header( "Pragma: no-cache" );

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
