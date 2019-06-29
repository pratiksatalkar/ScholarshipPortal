<?php 
require_once("./config.php");
if(isset($_POST['region'],$_POST['fund'],$_POST['studymode'])){
$region=$_POST['region'];
$fund=$_POST['fund'];
$studymode=$_POST['studymode'];	


//Only region
if($region!="0"&$fund=="0"&$studymode=="0"){
$query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where region='$region'";
    $search_result=filterResult($query);    
}

// only fund
if($region=="0"&$fund!="0"&$studymode=="0"){
$query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where fundingStatus='$fund'";
    $search_result=filterResult($query);    
}
//only studymode
if($region=="0"&$fund=="0"&$studymode!="0"){
$query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where modeofStudy='$studymode'";
    $search_result=filterResult($query);    
}

//studymode and fund
if($region=="0"&$fund!="0"&$studymode!="0"){
  $query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where modeofStudy='$studymode' and fundingStatus='$fund'";
    $search_result=filterResult($query);    
}

//studymode and region
if($region!="0"&$fund=="0"&$studymode!="0"){
  $query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where modeofStudy='$studymode' and region='$region'";
    $search_result=filterResult($query);    
}
// fund and region
if($region!="0"&$fund!="0"&$studymode=="0"){
  $query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where fundingStatus='$fund' and region='$region'";
    $search_result=filterResult($query);    
}

// fund and region and studymode
if($region!="0"&$fund!="0"&$studymode!="0"){
  $query="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships where fundingStatus='$fund' and region='$region' and modeofStudy='$studymode'";
    $search_result=filterResult($query);    
}

}


if(isset($_GET['intersearch'])){	
$valueToSearch = $_GET['intersearch'];
 $query ="select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships WHERE id like '%$valueToSearch%' or scholarshipName like '%$valueToSearch%' or region like '%$valueToSearch%' or organizanationName like '%$valueToSearch%' or fundingStatus like '%$valueToSearch%'";
 $search_result = filterResult($query);	
}


// echo $region;
// echo $fund;

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
    echo "<h3 class ='card-head'><a href='ScholorshipDescription.php?id=".$row['id']."'>".$row['scholarshipName']."</a></h3>";        
    echo "<p> <img src='../images/cardi2.png' alt='icon'><b>Organizanation Name: </b> ".$row['organizanationName']."</p>";
    echo  "<p><img src='../images/cardi3.png' alt='award'><b>Region: </b>".$row['region']."</p>";
    echo  "</article>
            <article class='col-lg-3' id ='card-active' style='border-left:1px solid grey;  padding-left:6%;'>";
           echo   "<b>Funding Status: </b><h3>".$row['fundingStatus']."</h3>";
    echo "</article></div>";
	}	
	//echo "</table>";
}
else{
	echo  "<center><b>No result Found</b></center>";
}

?>