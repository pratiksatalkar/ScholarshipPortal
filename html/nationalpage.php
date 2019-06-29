<?php
session_start();
require_once("./config.php");
	
	$today = date("Y-m-d");
	
	$query="select id,scholorshipName,state,ministry,start_date, end_date from govtscheme where end_date>='$today' order by end_date";
	$negativeQuery = "select id,scholorshipName,state,ministry,start_date, end_date from govtscheme where end_date<'$today' order by end_date desc";
	$search_result=filterResult($query);
	$search_negative_result=filterResult($negativeQuery);

 function filterResult($query){
	 global $con;
	//$con = mysqli_connect("localhost", "Anand", "anand", "demo");
	$search_result= mysqli_query($con,$query);
	return $search_result;
}

header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
  header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
  header( "Cache-Control: no-cache, must-revalidate" );
  header( "Pragma: no-cache" );

?>

<html>
<head>
	<title>SCHOLARSHIP</title>

   <link rel="stylesheet" href="../css/nationalhome.css">
   <link rel="stylesheet" href="../css/sample.css">
   <link rel="stylesheet" href="../css/dropdown.css">
   <link rel="stylesheet" href="../css/footer.css">
   <script src="../js/js1.js"></script>
	<!--<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/jquery.js"></script>-->
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
   
		<nav class="navbar navbar-default" style="background-color: #f0bd00;position: relative;min-height:70px;">
				<div class="container-fluid" >
					<div class="navbar-header">
						<h2 >Scholarship Portal</h2>
					</div>
					<ul class="nav navbar-nav" style="margin-top:40px;font-size:20px; margin-left:4%; color: white; ">
						<li ><a href="home.html">Home</a></li>
						<li><a href="login.html">Institue Login</a></li>
						<li><a href="feedback.php">Feedback</a></li>
						<li><a href="aboutus.php">About us</a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<button type="submit" class="btn btn-default" style="margin-top:40px;"><a href="personalregister.html">Personalized</a></button>
							<button type="submit" class="btn btn-default" style="margin-top:40px;"><a href="publisherscholarship.html">Publish Scholarship</a></button>
							<button type="submit" class="btn btn-default" style="margin-top:40px;"><span class="glyphicon glyphicon-log-in"></span> <a href="signin.html">Log In</a></button>
							<button type="submit" class="btn btn-default" style="margin-top:40px;"><span class="glyphicon glyphicon-user"></span><a href="signup.html"> New User</a></button>
						</div>
					</form>
				</div>
				
			</nav>




<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">

		
			<div id="my-slider" class="carousel slide" data-ride="carousel" data-interval="3000">
				<ol class="carousel-indicators">
					<li data-target = "#my-slider" data-slide-to="0"></li>
					<li data-target = "#my-slider" data-slide-to="1"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">

						<img src="../images/International.jpeg" alt ="pic1"/>
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">

						<img src="../images/a.jpeg" alt ="pic2" />

						<div class="carousel-caption">
					</div>
					</div>

					<a class="left carousel-control" href="#my-slider" role = "button" data-slide = "prev">
						<span class="glyphicon glyphicon-chevron-left" area-hidden= "true"></span>
						<span class="sr-only">previous</span>
					</a>
					<a class="right carousel-control" href="#my-slider" role = "button" data-slide = "next">
						<span class="glyphicon glyphicon-chevron-right" area-hidden= "true"></span>
						<span class="sr-only">previous</span>
					</a>
				</div>

			</div>
		</div>
	</div>
</div>
<!--carousel slide closed -->


			    <div  class="topmarquee">
			    	<marquee><h4> text some text some text some text</h4></marquee>
				</div>
			
				<div class="jumbotron">
						<h1>Welcome to National Scholarships</h1>
						<hr>
						<p>The National Scholarship Search is the premier financial aid, college scholarship and international scholarship resource for students wishing to study abroad. At this site, you will find the most comprehensive listing of grants, scholarships, loan programs, and other information to assist college and university students in their pursuit to study abroad.</p>
				</div>
			
				    
				
				<div class="grid">
				   <div class="container-fluid">
				        <div class="row">
							<div class="col-lg-3 col-xs-12 " style="background-color:white;">
								<div class="box-l">
									<h2 class="borderbox">Notice</h2>
									<p><marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction ="up" height ="300px" hspace="10px" scrolldelay ="150">sbuhudbugubw dhubwcudvb cgdbuhcbduh bcdgvcgdc bdchudbcdhbcuhdbc</marquee></p>
								</div>
									<div class="box2">
										<h2 class="borderbox">Help</h2>
										<p style="padding:4px 8px 2px 8px; "><br>Candidates can contact the help desk for resolution of technical problem.</p>
										<hr>
										<h3 style="padding:0px 0px 0px 4px;  color:red; "><span class="glyphicon glyphicon-earphone" style="margin-right:8px;"> </span>+919087654321</h3>
										<hr>
								<h3 style="padding:0px 0px 0px 4px; color:red;"><span class="glyphicon glyphicon-envelope" style="margin-right:8px;"> </span>helpdesk@gmail.com</h3>
								</div>
							</div>
							
							
							<div class="col-lg-9 col-xs-12">
				<select id="Ministry" onclick="ministry();">
      <option  value="0" style="background-color:white"> Select Ministry</option>
      <option value="Ministry of Minority Affairs">Ministry of Minority Affairs</option>
      <option  value="Department of Empowerment of Persons with Disabilities">Department of Empowerment of Persons with Disabilities</option>
      <option  value="Ministry of Trible Affairs">Ministry of Trible Affairs</option>
      <option  value="Ministry of Human Resource Development">Ministry of Human Resource Development</option>
      <option  value="Department of Higher Education">Department of Higher Education</option>
    </select>
  
       
      <select id="StudyField" onclick="studyField();">
      <option value="0" style="background-color:white">Study Field</option>
      <option value="Pre" >Pre Metric</option>
      <option value="Post">Post Metric</option>
      <option value="Post Graduation">Post Graduation</option>
      <option value="PhD">PhD</option>
    </select>

     <select id="State" onclick="state();">
      <option value="0" style="background-color:white">State</option>
      <option value="Maharashtra" >Maharashtra</option>
      <option value="Punjab">Punjab</option>
      <option value="West Bengal">West Bengal</option>
      <option value="Assam">Assam</option>
      <option value="Tamilnadu">Tamil Nadu</option>
    </select>

     <select id="Provider" onclick="provider();">
      <option value="0" style="background-color:white">Type</option>
      <option value="Government">Government</option>
      <option value="Private">Private</option>
    </select>
     
		   
   <input type="text" id ="search" class="form-control" placeholder="Search" onchange="sea();"  style="width: 20%; float: right; margin-right:4%;" >
		    

    <!-- <input type="text" name="Valuetosearch" id="search" placeholder="Type to Search" required onchange="loaddata();" >
         -->  <!-- <input type="submit"  id ="search" value="Filter" onclick="loaddata();"><br></td> -->			
           
             <div class="box1" id ="box1">
           
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_assoc($search_result)):?>
                <!-- <tr>
                    <td><?php echo $row['id'];?></td>
                    <td style="width: 10px;"><?php echo $row['scholorshipName'];?></td>
                    <td><?php echo $row['state'];?></td>
                    <td><?php echo $row['ministry'];?></td>
	                <td><?php echo $row['status'];?></td>
					<td><a href="schemeDetails.php?id=<?php echo $row['id'];?>">View Details</td>
                </tr> -->
                 <div class="card">
               <article class="col-lg-2">
                    <img src="../images/download.jpg" alt="hi" width="81.6px" height="50px"><br>
                    <h5>2348 views</h5>
               </article>
               <article class="col-lg-7">
                   <h3 class="card-head"><a href="ScholorshipDescription.php?id=<?php echo $row['id'];?>"><?php echo $row['scholorshipName'];?></a></h3>
                   <p> <img src="../images/cardi2.png" alt="icon"> <b>Ministry: </b><?php echo $row['ministry'];?></p>
                   <p><img src="../images/cardi3.png" alt="award"><b>State: </b><?php echo $row['state'];?></p>
                </article>
                <article class="col-lg-3" id="card-active" style="border-left:1px solid grey; padding-left:6%;">
                    <div class="activeStyle" style="font-size: 40px; font-style: bold; margin: auto;">
                    	<?php 
                    	$diff=date_diff(date_create($today),date_create($row['end_date']));
                    	$difference = $diff->format("%R%a days");

                    	if ($difference <= 0) {
                    		echo '<div style="color:red">';
                    		echo "Inactive";
                    		echo "</div>";
                    	}
                    	else{
							echo '<div style="color:green">';
                    		echo "Active";
                    		echo "</div>";
                    	}
                    		

                    ?></div>
                    <div style="font-size: 18px; margin-left: -20px">
                    	<?php 

                    		echo "Last date : ".$row['end_date'];
                    		echo "<br/>";
                    		echo $difference;

                    	?>
                    </div>

                   
                </article>
    </div>

                <?php endwhile;?>

                <!-- negative days starts -->

                <?php while($row = mysqli_fetch_assoc($search_negative_result)):?>
                <!-- <tr>
                    <td><?php echo $row['id'];?></td>
                    <td style="width: 10px;"><?php echo $row['scholorshipName'];?></td>
                    <td><?php echo $row['state'];?></td>
                    <td><?php echo $row['ministry'];?></td>
	                <td><?php echo $row['status'];?></td>
					<td><a href="schemeDetails.php?id=<?php echo $row['id'];?>">View Details</td>
                </tr> -->
                 <div class="card">
               <article class="col-lg-2">
                    <img src="../images/cardi1.png" alt="hi" width="81.6px" height="50px"><br>
                    <h5>2348 views</h5>
               </article>
               <article class="col-lg-7">
                   <h3 class="card-head"><a href="ScholorshipDescription.php?id=<?php echo $row['id'];?>"><?php echo $row['scholorshipName'];?></a></h3>
                   <p> <img src="../images/cardi2.png" alt="icon"> <b>Ministry: </b><?php echo $row['ministry'];?></p>
                   <p><img src="../images/cardi3.png" alt="award"><b>State: </b><?php echo $row['state'];?></p>
                </article>
                <article class="col-lg-3" id="card-active" style="border-left:1px solid grey; padding-left:6%;">
                    <div class="activeStyle" style="font-size: 40px; font-style: bold; margin: auto;">
                    	<?php 
                    	$diff=date_diff(date_create($today),date_create($row['end_date']));
                    	$difference = $diff->format("%R%a days");

                    	if ($difference <= 0) {
                    		echo '<div style="color:red">';
                    		echo "Inactive";
                    		echo "</div>";
                    	}
                    	else{
							echo '<div style="color:green">';
                    		echo "Active";
                    		echo "</div>";
                    	}
                    		

                    ?></div>
                    <div style="font-size: 18px; margin-left: -20px">
                    	<?php 

                    		echo "Last date : ".$row['end_date'];
                    		echo "<br/>";
                    		echo $difference;

                    	?>
                    </div>

                   
                </article>
    </div>

                <?php endwhile;?>
            					</div>
							    </div>
							</div>
							
						</div>
				   </div>
					 <footer class="site-footer">
						<div class="footer-bar">
								<div class="container">
										<div class="row">
												<div class="col-12">
														<p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by Scholarship Portal <a href="https://colorlib.com" target="_blank"></a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
												</div><!-- .col-12 -->
										</div><!-- .row -->
								</div><!-- .container -->
						</div><!-- .footer-bar -->
				</footer><!-- .site-footer -->
		<!-- footer ends -->


<script>

   
//    function loaddata(){
	   
//    var search = document.getElementById("search").value;

//    var xhttp;  
//   if (search == "") {
//     document.getElementById("box1").innerHTML = "";
//     return;
//   }
//   xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("box1").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?data="+search, true);
//   xhttp.send();
// //alert(search);
//  }
//  function gender(){
//    $(document).ready(function(){

// $('#Gender').change(function(){
// var selectbox= document.getElementById('Gender');
//    var Gender = selectbox.options[selectbox.selectedIndex].value;

// //alert(Gender);
// if(Gender !="0"){}
// 	var xhttp;  
//   if (Gender == "") {
//     document.getElementById("box1").innerHTML = "";
//     return;
//   }
//   xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("box1").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?gender="+Gender, true);
//   xhttp.send();
  
// });
//  });
// }


</script>
 
				</body>
				</html>


