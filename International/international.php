<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<table>
		<tr>
			<td>
				<select id="Region"  onchange="showRegion(this)">
		<option value="0">Select Region</option>
		<option value="Asia">Aisa</option>
		<option value="Australia">Australia</option>
		<option value="Europe">Europe</option>
		<option value="Middle East">Middle East</option>
		<option value="North America">North America</option>
	</select>
			</td>
		<td id="country"></td>

		</tr>
	</table>
		

	<div id="demo"></div>
</form>
</body>
<script type="text/javascript">
	function showRegion(Region){
var Region=Region.options[Region.selectedIndex].value;
  //alert(Region);
if(Region!=0){
   var xhttp;  
  if (Region == "") {
    document.getElementById("demo").innerHTML = "";
   // document.getElementById("country").innerHTML="";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
     // document.getElementById("country").innerHTML=this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/jsonPractice/International/InternationalScholorship.php?region="+Region, true);
  xhttp.send();
  
}



	}

</script>
</html>