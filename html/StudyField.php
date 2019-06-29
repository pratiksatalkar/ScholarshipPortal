<?php
require_once("./config.php");
$today = date("Y-m-d");
if(isset($_GET['field'])){
$query="select id,scholorshipName,state,ministry,status from govtscheme where studyField='".$_GET['field']."' ";
$query1="select * from studyfielddesc where studyfield='".$_GET['field']."' ";
$active="select id,scholorshipName,state,ministry,start_date, end_date from govtscheme where end_date>='$today' order by end_date";

    $search_result=filterResult($query);
    $field_result=filterResult($query1);
    $active_result=filterResult($active);
}

if($field_result->num_rows>0){
    while($row= mysqli_fetch_assoc($field_result)){
        $data = array();
        // $data["studyField"]=$row['studyfield'];
        $data["description"]=$row['description'];
                    }
}

if($active_result->num_rows>0){
    while($row= mysqli_fetch_assoc($active_result)){
        $data = array();
        // $data["studyField"]=$row['studyfield'];
        $data["start"]=$row['start_date'];
        $data["end"]=$row['end_date'];

       
                    }
}





 function filterResult($query){
     global $con;
    //$con = mysqli_connect("localhost", "Anand", "anand", "demo");
    $search_result= mysqli_query($con,$query);
    return $search_result;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scholarship</title>

    <!-- Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Styles -->
   
    <link rel="shortcut-icon">
<meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet"  href="../css/nationalhome.css">
       <link rel="stylesheet" href="../css/sample.css">
       <link rel="stylesheet" href="../css/dropdown.css">
       <link rel="stylesheet" href="../css/footer.css">


    <meta name="keywords" content="tiger,chandrapur,tadoba,safari" /> 
    <meta name="description" content="national wildlife sanctuary" /> 
    <meta name="revised" content=" 04/11/2014" />

</head>
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
        

    <div class ="grid">
    <div class="container-fluid">
        <div class="row">
<!-- <div class="col-lg-12 col-xs-12 " style="background-color:white;">
  <p> 
  <?php  echo $data["description"]; ?>
</p>
</div> -->
           
                <div class="col-lg-3 col-xs-12 " style="background-color:white;">
                                
                            <div class="box-l">
                  <h2 class="borderbox">Notice</h2>
                  <p><marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction ="up" height ="100%" hspace="10px" scrolldelay ="150">sbuhudbugubw dhubwcudvb cgdbuhcbduh bcdgvcgdc bdchudbcdhbcuhdbc</marquee></p>
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

            
       
            <div class="col-lg-9 col-xs-12 ">

        <select id="Gender">
            <option value="0" style="background-color:white">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="All">Both</option>
        </select>
        
            <select id="Merit">
            <option value="0" style="background-color:white">Select Merit</option>
            <option value="Minimum 50%">50%</option>
            <option value="Minimum 75%">75%</option>
            <option value="Minimum 80%">80%</option>
            <option value="Minimum 90%">90%</option>
        </select>
        

            <select id="Disability">
            <option value="0" style="background-color:white">Select Disability</option>
            <option value="Yes">YES</opton>
                                  <option value="No">NO</option>
                                   <option value="All">All</option>
        </select>
        

            
            <select id="Income">
            <option value="0" style="background-color:white">Select Income</option>
            <option  value="100000">100,000</option>
            <option  value="200000">200,000</option>
            <option value="300000">300,000</option>
            <option value="400000">400,000</option>
            <option value="500000">500,000</option>
            <option value="600000">600,000</option>
            <option value="700000">700,000</option>
            <option value="800000">800,000</option>
            <option value="900000">900,000</option>
            <option value="1000000">10,00,000</option>

        </select>
        <select id="Religion">
          <option value="0" style="background-color:white">Select category</option>
            <option  value="All">All</option>
            <option  value="Minority">Minority</option>
            <option  value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="OBC">OBC</option>
            <option value="Jain">Jain</option>
           <!--  <option value="600000">600,000</option>
            <option value="700000">700,000</option> -->
            
        </select>
        <input type="submit"  value="Filter" onclick="loaddata();" style="color:black; background-color: #f0bd00; border: 2px solid black; width: 80px; height: 35px; border-radius:25px ">
        <!--<button type="button" value="Filter" onclick="loaddata()" class="btn btn-warning">Filter</button>
        -->


      <div id ="displaydata" class="box1">
       <!--   <table>
                <tr>
                    <th>Id</th>
                    <th>Scholorship Name</th>
                    <th>State</th>
                    <th>Ministry</th>
                    <th>Status</>
                    <th>View Details</th>
                </tr> -->

                <?php while($row = mysqli_fetch_assoc($search_result)):?>
               <!--  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['scholorshipName'];?></td>
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
                   <p> <img src="../images/cardi2.png" alt="icon"><b>Ministry: </b><?php echo $row['ministry'];?></p>
                   <p><img src="../images/cardi3.png" alt="award"><b>State: </b><?php echo $row['state'];?></p>
                </article>
                <article class="col-lg-3" id="card-active" style="border-left:1px solid grey; padding-left:6%;">
                    <div class="activeStyle" style="font-size: 40px; font-style: bold; margin: auto;">
                      <?php 
                      $diff=date_diff(date_create($today),date_create($data["end"]));
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

                        echo "Last date : ".$data["end"];
                        echo "<br/>";
                        echo $difference;

                      ?>
                    </div>

                </article>
    </div>
                <?php endwhile;?>
          <!--   </table> -->
    </div>
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
        </footer>

 
   



   
</body>

<script type="text/javascript">
 function loaddata(){
        // var data = document.getElementById("name").value;
        // alert(data);
     var genderselect= document.getElementById('Gender');
    var gender =  genderselect.options[genderselect.selectedIndex].value;

    var meritselect= document.getElementById('Merit');
    var merit =  meritselect.options[meritselect.selectedIndex].value;

    var disabilityselect= document.getElementById('Disability');
    var disability =  disabilityselect.options[disabilityselect.selectedIndex].value;

    var incomeselect= document.getElementById('Income');
    var income =  incomeselect.options[incomeselect.selectedIndex].value; 

    var religionselect= document.getElementById('Religion');
    var religion =  religionselect.options[religionselect.selectedIndex].value; 

    var field="<?php echo $_GET['field']?>";
    if(gender==0&merit==0&disability==0&income==0&religion==0){
        alert("Enter Something");
    }
    else{
   //var data ="gender="+gender+"&merit="+merit+"&disability="+disability+"&income="+income+"&field="+field; 
//   alert("hello");


   $.ajax({
  type: 'post',
  url: 'http://localhost/jsonPractice/html/DEMO.php',
  data: {
   gender:gender,
   merit:merit,
   disability:disability,
   income:income,
   religion:religion,
   field:field
  },
  success: function (response) {
   $('#displaydata').html(response);
  }
 });    
    }
 
}

    // $(document).ready(function(){

// $('#Gender').change(function(){
//    var selectbox= document.getElementById('Gender');
//   // var meritbox= document.getElementById('Merit');
//    if (selectbox!=0) {
//     //meritbox.options[meritbox.selectbox].value +"#"+
//    var search =  selectbox.options[selectbox.selectedIndex].value;
//     var field="<?php echo $_GET['field']?>";
//     var heading="Gender";

//     demo(search,field,heading);
// }

//     });
// });


//      $(document).ready(function(){

// $('#Merit').change(function(){
//    var selectbox= document.getElementById('Merit');
//   // var meritbox= document.getElementById('Merit');
//    if (selectbox!=0) {
//     //meritbox.options[meritbox.selectbox].value +"#"+
//    var search =  selectbox.options[selectbox.selectedIndex].value;
//     var field="<?php echo $_GET['field']?>";
//     var heading="Merit";

//     demo(search,field,heading);
// }

//     });
// });
       



  //      function demo(data1,data2,heading){
  //         var xhttp;  
  // if (data1 == "") {
  //   document.getElementById("displaydasta").innerHTML = "";
  //   return;
  // }
  // xhttp = new XMLHttpRequest();
  // xhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {
  //     document.getElementById("displaydata").innerHTML = this.responseText;
  //   }
  // };
  // xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?"+heading+"="+data1+"&field="+data2, true);
  // xhttp.send();
  //      }
//alert(search);
    
   
      
</script>
    
</html>