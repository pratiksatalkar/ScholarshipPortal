<?php

require_once("./config.php");
  
  $query='select id,scholarshipName,organizanationName,region,fundingStatus from internationalscholarships';
  $search_result=filterResult($query);

 function filterResult($query){
   global $con;
  //$con = mysqli_connect("localhost", "Anand", "anand", "demo");
  $search_result= mysqli_query($con,$query);
  return $search_result;
}
?>
<html>
<head>
	<title> INTERNATIONAL SCHOLARSHIP</title>
   <meta name="viewport" content="width=device-width, intial-scale=1">
   <link rel="stylesheet" href="../css/internationalpage.css">
   <link rel="stylesheet" href="../css/interdropdown.css">
    <link rel="stylesheet" href="../css/sample.css">
       <script src="../js/js1.js"></script>
   <link rel="shortcut-icon">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse" style="background-color:orange; border:none;">
	    <div class="container-fluid" style="height:100px;" >
			<div class="navbar-header">
				<h2 style="font-color:black;font-family:sans-serif;"><a href="#">WEBSITENAME</a></h2>
			</div>
				<ul class="nav navbar-nav" style="margin-top:70px; margin-left:20px; font-size:18px;font-color:red;">
				<li class="active"><a href="#" style="background-color:none;">Home</a></li>
				<li><a href="#">Page 1</a></li>
				<li><a href="#">Institue Login</a></li>
				<li><a href="#">About us</a></li>
				</ul>
				<form class="navbar-form navbar-right">
				<div class="form-group">
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> <a href="login.html">Log In</a></button>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-user"></span><a href="register.html"> New User</a></button>
          <button type="submit" class="btn btn-default"><a href="bankloan.php">Bank Loan</a></button>
				</div>
				</form>
		</div>
	</nav>

<div class="outerbox"></div>
    <div class="container-fluid">
    	<div class="row">
        <div class="jumbotron">
            <h2>Welcome to International Scholarships</h2>
            <hr>
                    <p>The International Scholarship Search is the premier financial aid, college scholarship and international scholarship resource for students wishing to study abroad. At this site, you will find the most comprehensive listing of grants, scholarships, loan programs, and other information to assist college and university students in their pursuit to study abroad.
</p>
                  </div>
    		
    			<div class="col-lg-9">
    				<div class="scholarshipbutton">
                                <h4>SCHOLARSHIP</h4>
                              </div>
          <div class="form-group">
		        <input type="text" id ="intersearch" onchange="intersearch()" class="form-control" placeholder="Search">
		              </div>
		                                                 
		                                     
		                              
                          
                     <div class="box1" id="box1">
                    <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_assoc($search_result)):?>
                
                    <div class="card">
                            <article class="col-lg-2">
                                 <img src="../images/cardi1.png" alt="hi" width="81.6px" height="50px"><br>
                                 <h5>2348 views</h5>
                            </article>
                            <article class="col-lg-7">
                                  <h3 class="card-head"><a href="ScholorshipDescription.php?id=<?php echo $row['id'];?>"><?php echo $row['scholarshipName'];?></a></h3>
                                  <p> <img src="../images/cardi2.png" alt="icon"> <b>Organizanation Name: </b><?php echo $row['organizanationName'];?></p>
                                  <p><img src="../images/cardi3.png" alt="award"><b>Region: </b><?php echo $row['region'];?></p>
                            </article>
                            <article class="col-lg-3" id="card-active" style="border-left:1px solid grey; padding-left:6%;">
                                   <b>Funding Status: </b><h3><?php echo $row['fundingStatus'];?></h3>
                                    </article>
                  </div>

                <?php endwhile;?>                   

                </div>
                </div>
               
                <div class="col-sm-3">
                	<div class="quicksearchbox" id="quicksearchbox">
                		<div class="quicksearchbutton">
                		  <h4>QUICK SEARCH</h4>
                	    </div>
                      <div>
                	    <select id="d1">
            <option value="0"  style="background-color:white">Where you want to Study</option>
            <option value="Asia">Asia</option>
            <option value="Australia">Australia</option>
            <option value="Europe">Europe</option>
            <option value="North America">North America</option>
            <option value="Middle East">Middle East</option>
          </select>
          <br><br>
          <select id="d2">
            <option value="0"  style="background-color:white">Select FundingStatus</option>
            <option value="Tution Fee">Tution Fee</option>
            <option value="Educational Fee">Educational Fee</option>
            <option value="All">Both</option>
          </select>
          <br><br>
          <select id="d3">
            <option value="0"  style="background-color:white">Select modeofStudy</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="All">Both</option>
          </select>
            <br><br>
          <!-- <input type="submit"  value="Go" onclick="interloaddata()" style="color:black; background-color: #f0bd00; border: 2px solid black; width: 80px; height: 35px; border-radius:25px;"> -->
          <input type="submit" name="Filter" onclick="interloaddata()">
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

</body>

<script type="text/javascript">
 function interloaddata(){
        // var data = document.getElementById("name").value;
       //  alert("hell0");
     var regionselect= document.getElementById('d1');
    var region =  regionselect.options[regionselect.selectedIndex].value;

    var fundselect= document.getElementById('d2');
    var fund =  fundselect.options[fundselect.selectedIndex].value;

    var studyselect= document.getElementById('d3');
    var studymode =  studyselect.options[studyselect.selectedIndex].value;


   /*  var field="<?php echo $_GET['field']?>"; */
    if(region==0&fund==0&studymode==0){
        alert("Enter Something");
    }
  else{
   var data ="region="+region+"&fund="+fund+"&studymode="+studymode; 
   //alert(data);
    $.ajax({
  type: 'post',
  url: 'http://localhost/jsonPractice/html/interscholorship.php',
  data: {
   region:region,
   fund:fund,
   studymode:studymode
  },
  success: function (response) {
   $('#box1').html(response);
  }
 });   
}
}

 

</script>

 
</html>
