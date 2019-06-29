<?php
require_once("./config.php");
if(isset($_GET['field'])){
$query="select id,scholorshipName,state,ministry,status from govtscheme where studyField='".$_GET['field']."' ";
	$search_result=filterResult($query);
}


 function filterResult($query){
	 global $con;
	//$con = mysqli_connect("localhost", "Anand", "anand", "demo");
	$search_result= mysqli_query($con,$query);
	return $search_result;
}
 ?>
<html>
<head>
	<title>SCHOLARSHIP</title>

   <link rel="stylesheet" href="../css/home.css">
	<!--<script src="bootstrap/js/jquery.min.js"></script>
	<!--<script src="bootstrap/js/jquery.js"></script>-->
	<!-- <script src="../js/js1.js"></script> -->
<link rel="shortcut-icon">
<meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="keywords" content="tiger,chandrapur,tadoba,safari" /> 
    <meta name="description" content="national wildlife sanctuary" /> 
    <meta name="revised" content=" 04/11/2014" />
   </head>

<body>
	
		<table>	
<tr>
		<td><select id="Gender">
			<option value="0">Select Gender</option>
			<option value="male">Male</option>
			<option  value="female">Female</option>
		</select></td>
		<td>
			<select id="Merit">
			<option ="0">Select Merit</option>
			<option>90%</option>
			<option>80%</option>
			<option>70%</option>
		</select>
		</td>

		<td>
			<select id="Disability">
			<option ="0">Select Disability</option>
			<option>Yes</option>
			<option>No</option>
		</select>
		</td>

			<td>
			<select id="Income">
			<option ="0">Select Income</option>
			<option>10,000-200,000</option>
			<option>200,000-400,000</option>
			<option>400,000-600,000</option>
			<option>600,000-above</option>
		</select>
		</td>
		<!-- <td><input type="submit"  value="Filter" onclick="loaddata();"></td> -->
</tr>
	</table>
	
	<div id="displaydata">
		 <table>
                <tr>
                    <th>Id</th>
                    <th>Scholorship Name</th>
                    <th>State</th>
                    <th>Ministry</th>
					<th>Status</>
					<th>View Details</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['scholorshipName'];?></td>
                    <td><?php echo $row['state'];?></td>
                    <td><?php echo $row['ministry'];?></td>
	                <td><?php echo $row['status'];?></td>
					<td><a href="schemeDetails.php?id=<?php echo $row['id'];?>">View Details</td>
                </tr>
                <?php endwhile;?>
            </table>
	</div>
<!-- 	<div id="demo">
	</div> -->
</body>


<script type="text/javascript">

	$(document).ready(function(){

$('#Gender').change(function(){
   var selectbox= document.getElementById('Gender');
  // var meritbox= document.getElementById('Merit');
  // if (selectbox!=0) {
   	//meritbox.options[meritbox.selectbox].value +"#"+
   var search =  selectbox.options[selectbox.selectedIndex].value;
  //  var field="<?php echo $_GET['field']?>";

   // demo(search,field);
//}
alert(search);
  //  var xhttp;  
  // if (search == "") {
  //   document.getElementById("displaydata").innerHTML = "";
  //   return;
  // }
  // xhttp = new XMLHttpRequest();
  // xhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {
  //     document.getElementById("displaydata").innerHTML = this.responseText;
  //   }
  // };
  // xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?Gender="+search+"&field="+field, true);
  // xhttp.send();
});
	});
	   
	 //   function demo(data1,data2){
	 //   	 var xhttp;  
  // if (data1 == "") {
  //   document.getElementById("displaydata").innerHTML = "";
  //   return;
  // }
  // xhttp = new XMLHttpRequest();
  // xhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {
  //     document.getElementById("displaydata").innerHTML = this.responseText;
  //   }
  // };
  // xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?Gender="+data1+"&field="+data2, true);
  // xhttp.send();
	 //   }
//alert(search);
</script>
	
</html>