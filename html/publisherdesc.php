<?php
require_once("./config.php");
if(isset($_POST['submit'])){
  $scholarshipname = $_POST['scholarshipname'];
$organization = $_POST['organization'];
$objective= $_POST['objective'];
$eligiblity = $_POST['eligiblity'];
$benefits = $_POST['benefits'];
$type=$_POST['type'];
 $timestamp = date("Y-m-d H:i:s");
//  $con= mysqli_connect("localhost","pushkar","danish","demo");

// if($con){
//   echo "connected";
// }
// else{
//   echo "not connected";
// }

 $sql= "insert into publishedscholoaship(scholarshipName,organization,objective,eligibility,benefits,type,Timestamp) values('$scholarshipname','$organization','$objective','$eligiblity','$benefits','$type','$timestamp')";

 //echo $sql;

        if(mysqli_query($con,$sql))
        {
          //echo "'upload done successfully";
header('location: scheme.php ');
          }
        else{
         echo "upload failed";
         }
$msg = "New scholarship submitted on SAKAR portal by ".$organization." ! Verify and Approve now to make the update live... Regards, Admin- SAKAR Portal" ;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("omkarjoshi9545@gmail.com","AICTE Approval",$msg);

}

?>
