    function sea(){   
   var search = document.getElementById("search").value;
  // alert(search);
  //       demo(search);  
  if (search == "") {
    document.getElementById("box1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("box1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?search="+search, true);
  xhttp.send();
//alert(search); 
  } 

 function intersearch(){   
   var search = document.getElementById("intersearch").value;
   //alert(search);
  //       demo(search);  
  if (search == "") {
    document.getElementById("box1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("box1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/jsonPractice/html/interscholorship.php?intersearch="+search, true);
  xhttp.send();
//alert(search); 
  } 



 function ministry(){
   $(document).ready(function(){

$('#Ministry').change(function(){
var selectbox= document.getElementById('Ministry');
   var ministry = selectbox.options[selectbox.selectedIndex].value;

//alert(ministry);
if(ministry!=0){
   var xhttp;  
  if (ministry == "") {
    document.getElementById("box1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("box1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?ministry="+ministry, true);
  xhttp.send();
  
}
});
 });
}

function state(){
   $(document).ready(function(){

$('#State').change(function(){
var selectbox= document.getElementById('State');
   var state = selectbox.options[selectbox.selectedIndex].value;

//alert(state);
//})
//})
// }
if(state!=0){
   var xhttp;  
  if (state == "") {
    document.getElementById("box1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("box1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?state="+state, true);
  xhttp.send();
  
}
});
 });
}



function provider(){
   $(document).ready(function(){

$('#Provider').change(function(){
var selectbox= document.getElementById('Provider');
   var pro = selectbox.options[selectbox.selectedIndex].value;

//alert(pro);
//});
//});
//}
if(pro!=0){
   var xhttp;  
  if (pro == "") {
    document.getElementById("box1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("box1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?pro="+pro, true);
  xhttp.send();
  
}
});
 });
}

function studyField(){
  $(document).ready(function(){
$('#StudyField').change(function(){
var selectbox= document.getElementById('StudyField');
   var studyField = selectbox.options[selectbox.selectedIndex].value;

if(studyField !=0){
     window.location="http://localhost/jsonPractice/html/StudyField.php?field="+studyField;

}

});
});
}






// function demo(data1,data2){
//    var xhttp;  
//   if (data2 == "") {
//     document.getElementById("box1").innerHTML = "";
//     return;
//   }
//   xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("box1").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("GET", "http://localhost/jsonPractice/html/scholorship.php?"+data1+"="+data2, true);
//   xhttp.send();
// }