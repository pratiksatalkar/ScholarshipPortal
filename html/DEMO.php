<?php 

require_once("./config.php");

$gender=$_POST['gender'];
$merit=$_POST['merit'];
$disability=$_POST['disability'];
$income=$_POST['income'];
$religion=$_POST['religion'];
$field=$_POST['field'];



 //echo $gender;
// echo $merit;
// echo $disability;
// echo $income;
// echo $field;
//Only Gender
if($gender!=0&$merit=="0"&$disability=="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and 
    studyField='$field' ";
    $search_result=filterResult($query);    
}
//Only Merit
if($gender=="0"&$merit!="0"&$disability=="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where merit='$merit' and 
    studyField='$field' ";
    $search_result=filterResult($query);    
}

// Only Disability
if($gender=="0"&$merit=="0"&$disability!="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where disability='$disability' and 
    studyField='$field' ";
    $search_result=filterResult($query);    
}
// Only Income
if($gender=="0"&$merit=="0"&$disability=="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where income>=$income and 
    studyField='$field' ";
    $search_result=filterResult($query);    
}
//Only religion
if($gender=="0"&$merit=="0"&$disability=="0"&$income=="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and 
    studyField='$field' ";
    $search_result=filterResult($query);    
}
// Gender and Merit
if($gender!="0"&$merit!="0"&$disability=="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and 
    studyField='$field' and merit='$merit' ";
    $search_result=filterResult($query);    
}
//Gender And Disability
if($gender!="0"&$merit=="0"&$disability!="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and 
    studyField='$field' and disability='$disability' ";
    $search_result=filterResult($query);    
}
//Gender And Income
if($gender!="0"&$merit=="0"&$disability=="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and 
    studyField='$field' and  income>=$income";
    $search_result=filterResult($query);    
}
// Gender And Religion
if($gender!="0"&$merit=="0"&$disability=="0"&$income=="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and 
    studyField='$field' and  religion='$religion'";
    $search_result=filterResult($query);    
}
//Merit And Disability
if($gender=="0"&$merit!="0"&$disability!="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where merit='$merit' and 
    studyField='$field' and disability='$disability' ";
    $search_result=filterResult($query);    
}
//Merit And Income
if($gender=="0"&$merit!="0"&$disability=="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where merit='$merit' and 
    studyField='$field' and income>=$income ";
    $search_result=filterResult($query);    
}
//Merit And Religion
if($gender=="0"&$merit!="0"&$disability=="0"&$income=="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where merit='$merit' and 
    studyField='$field' and religion='$religion' ";
    $search_result=filterResult($query);    
}
//Disability And Income
if($gender=="0"&$merit=="0"&$disability!="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where disability='$disability' and 
    studyField='$field' and incom>e=$income ";
    $search_result=filterResult($query);    
}
//Disability And Religion
if($gender=="0"&$merit=="0"&$disability!="0"&$income=="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where disability='$disability' and 
    studyField='$field' and religion='$religion' ";
    $search_result=filterResult($query);    
}
//Income And Religion
if($gender=="0"&$merit=="0"&$disability=="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and 
    studyField='$field' and income>=$income ";
    $search_result=filterResult($query);    
}

//Gender ,merit,Disability
if($gender!="0"&$merit!="0"&$disability!="0"&$income=="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender'and merit='$merit' and disability='$disability' and studyField='$field' ";
    $search_result=filterResult($query);    
}
// merit,dis,income
if($gender=="0"&$merit!="0"&$disability!="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where merit='$merit' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
// gender,dis,income
if($gender!="0"&$merit=="0"&$disability!="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
// dis,income,religion
if($gender!="0"&$merit=="0"&$disability=="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
// gender,income,religion
if($gender!="0"&$merit=="0"&$disability=="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and gender='$gender' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}

// gender,merit,income
if($gender!="0"&$merit!="0"&$disability=="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and gender='$gender' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}

//gemder,merit,dis,religon
if($gender!="0"&$merit!="0"&$disability!="0"&$income=="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and merit='$merit' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}

//gemder,merit,dis,inocme
if($gender!="0"&$merit!="0"&$disability!="0"&$income!="0"&$religion=="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where gender='$gender' and merit='$merit' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
//merit,dis,inocme,religion
if($gender=="0"&$merit!="0"&$disability!="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and merit='$merit' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
//gender,dis,inocme,religion
if($gender!="0"&$merit=="0"&$disability!="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and gender='$gender' and disability='$disability' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
//gender,merit,inocme,religion
if($gender!="0"&$merit!="0"&$disability=="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and gender='$gender' and merit='$merit' and income>=$income and studyField='$field' ";
    $search_result=filterResult($query);    
}
//gender,merit,dis,inocme,religion
if($gender!="0"&$merit!="0"&$disability!="0"&$income!="0"&$religion!="0"){
$query="select id,scholorshipName,state,ministry,status from govtscheme where religion='$religion' and gender='$gender' and merit='$merit' and income>=$income and  disability='$disability' and  studyField='$field' ";
    $search_result=filterResult($query);    
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
    while($row=mysqli_fetch_assoc($search_result)){
    echo "<div class='card'> 
               <article class='col-lg-2'>
                    <img src='../images/cardi1.png' alt='hi' width='81.6px' height='50px'><br>
                    <h5>2348 views</h5>
               </article>
               <article class='col-lg-7'>";
    echo "<h3 class='card-head'><a href='ScholorshipDescription.php?id=".$row['id']."'>".$row['scholorshipName']."</a></h3>";        
    echo "<p> <img src='../images/cardi2.png' alt='icon'>".$row['ministry']."</p>";
    echo  "<p><img src='../images/cardi3.png' alt='award'>".$row['state']."</p>";
    echo  "</article>
            <article class='col-lg-3' id='card-active' style='border-left:1px solid grey; padding-left:6%;'>";
           echo   "<h1>".$row['status']."</h1>";
    echo "</article></div>";
    }   
}
else{
    echo  "<center><b>No result Found</b></center>";
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