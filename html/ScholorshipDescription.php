<?php 
require_once("./config.php");
    if(isset($_GET['id'])){
     $query="select * from govtscheme  where id=".$_GET['id']." " ;
    $search_result=filterResult($query);
    $query1="select Year,Noofuser from scholarshipanaylsis where ScholarshipId=".$_GET['id']."";
    $search_result1=filterResult($query1);
    }

 function filterResult($query){
     global $con;
    //$con = mysqli_connect("localhost", "Anand", "anand", "demo");
    $search_result= mysqli_query($con,$query);
    return $search_result;
}

if($search_result->num_rows>0){
    while($row= mysqli_fetch_assoc($search_result)){
        $data = array();
        $data["scholorshipName"]=$row['scholorshipName'];
        $data["state"]=$row['state'];
        $data["income"]=$row['income'];
        $data["merit"]=$row['merit'];
        $data["studyField"]=$row['studyField'];
        $data["gender"]=$row['gender'];
        $data["description"]=$row['description'];
        $data["eligibility"]=$row['eligibility'];
        $data["benefits"]=$row['benefits'];
        $data["howtoapply"]=$row['howtoapply'];
                    }
}
?>

<html>
	<head>
		<title>description</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Styles -->
    <link rel="stylesheet"  href="../css/discription.css">
    <link rel="stylesheet"  href="../css/footer.css">
  <script src="../js/loader.js"></script>

    </head>

     <script type="text/javascript">
     // var Name="<?php  echo $data['scholorshipName']?>"; 
            google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
               
                var data = google.visualization.arrayToDataTable([  
                          ['Year', 'Noofuser'],  
                          <?php  
                          while($row = mysqli_fetch_array($search_result1))  
                          {  
                               echo "['".$row["Year"]."', ".$row["Noofuser"]."],";  
                          } 
        
                          ?>  
                     ]);  
                var options = {  
                    animation:{
                        easing:'out',
                       duration :2000,
                       startup :true 
                    },
                      title: 'Percentage of Users for this Scholorship for previous different Years',  
                          is3D:true, 
                       //  pieHole: 0.4

                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
    </script>
    <body>
    	<nav class="navbar navbar-inverse">
                <div class="container-fluid" >
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Scholarship Portal</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.html">Home</a></li>
                        <li><a href="login.html">Institue Login</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                        <li><a href="aboutus.html">About us</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> <a href="login.html">Log In</a></button>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-user"></span><a href="register.html"> New User</a></button>
                        </div>
                    </form>
                </div>
                
            </nav>

            <div class="col-lg-12 col-xs-12">
                    <h1 class="Sname" style="text-align: center;"><?php echo  $data["scholorshipName"]; ?></h1>

                </div>
    <div class = "grid">

    	<div class="container-fluid">
    		<div class="row">
                
    			<div class="col-lg-6 col-xs-12 " id="cover" style="margin: auto;">
                    <h3>Description</h3>
                    <h4><?php  echo $data['description']; ?></h4>
                    <hr>
                    <h3>Eligibility</h3>
                    <h4><?php  echo $data['eligibility']; ?></h4>
                    <hr>
    				<h3>Criteria</h3>
                    <h4>State: <?php  echo $data['state']; ?></h4>
                    <h4>Merit: <?php  echo $data['merit']; ?></h4>
                   <h4>Income: <?php  echo $data['income']; ?></h4>
                    <h4>StudyField: <?php  echo $data['studyField']; ?></h4>
                    <h4>Gender: <?php  echo $data['gender']; ?></h4>
                    <hr>
                    <h3>How to apply</h3>
                    <h4><?php  echo $data['howtoapply']; ?></h4>
                    <hr>
                    <h3>Benefits</h3>
                    <h4><?php  echo $data['benefits']; ?></h4>
                    <hr>

    			</div>
                <div class="col-lg-6 col-xs-12" id ="cover" style="margin: auto;">
                    <!-- <h3> </h3> -->
                   <div id="piechart" style="width: 700px; height: 380px;margin-left:20px"></div> 

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
</html>