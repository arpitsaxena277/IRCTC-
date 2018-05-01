<html>
<head><link rel="stylesheet" type="text/css" href="fareform.css">    </head>
<title> Fare Enquiry </title>
<body>
<script> 
function call1()
{
x=document.f1.xyz.value;
y=document.f1.abc.value;
code=document.f1.i1.value;
var valueDate = document.getElementById('date').value;
if(code==""|| code==null ) 
{window.alert("Please Don't leave the Train No. field empty");return false;}
if(valueDate.length==0){ window.alert("Please Enter Journey Date"); return false;}
if(x==y) 
{window.alert("Source And Destination Cannot be Same");return false;}
}
</script>
<h1><font color="#4863A0" size=6 >      INDIAN RAILWAY CATERING & TOURISM CORPORATION LTD. </font></h1>


<img src="http://localhost/download.png" height="150" width="200">


<a href="http://localhost/pnr.php"> PNR Status </a>
<a href="http://localhost/imp.php"> Trains Between Important Stations</a>
<a href="http://localhost/seat.php"> Seat Availablity</a>
<a href="http://localhost/fare.php"> Fare Enquiry</a>
<a href="http://localhost/tat.php"> Check Tatkal Charges</a>
<a href="http://localhost/glance.php"> Trains At a Glance</a>
<a href="http://localhost/sms.php"> SMS Service</a>

<a href="http://localhost/form1.php"> Home </a>
<a href="http://localhost/login.php"> Login </a>
<a href="http://localhost/sign.php"> Sign Up </a><br> <br><br>

<form name="f1" action="book2.php" method="get">
<p1>Train No. :</p1> <input type="text" name="i1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4"><br><br>
<p2>Date :</p2>  <input type="date" name="date"><br><br>
<p3> Source Station: </p3>  <select  name="xyz">
  <option value="1">Delhi</option>
  <option value="2">Ghaziabad</option>
  <option value="3">Agra</option>
  <option value="4">Lucknow</option>
   <option value="5">Bhopal</option>
   <option value="6">Mumbai</option>
  <option value="7">Pune</option>
  <option value="8">Kolkata</option> 
</select> <br> <br>
      <p4>Destination Station: </p4><select  name="abc">
  <option value="1">Delhi</option>
  <option value="2">Ghaziabad</option>
  <option value="3">Agra</option>
  <option value="4">Lucknow</option>
   <option value="5">Bhopal</option>
   <option value="6">Mumbai</option>
  <option value="7">Pune</option>
  <option value="8">Kolkata</option> 
</select>  <br><br>
<p5> Class: </p5>
<select name="op"> 
<option value="Sleeper"> Sleeper Class </option>
<option value="General"> General Class </option>
<option value="AC"> AC Class </option>
<option value="Chair Car"> Chair Car </option>
</select> <br><br>
<p6> Age: </p6>
<select> 
<option value="o21"> Child Age[5-11]</option>
<option value="o22"> Adult Age[12 or Above] </option>
<option value="o23"> Senior Citizen </option>
</select> <br><br>
<p7> <input type="Submit" value="Calculate Fare and Pay" onclick="return call1()"> </p7>
<p8> <input type="Reset" value="Clear"> </p8> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
$x=$_GET['ftg'];
echo '<p9> Hi <input type="text" name="ftg" value='.$x.' readonly></p9></form>'; 

?>
</body>
</html>