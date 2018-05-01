<html>
<head><link rel="stylesheet" type="text/css" href="impform.css">    </head>
<title>Trains between important stations </title>
<body>
<script>
function call()
{
var x=document.f1.xyz.value;
var y=document.f1.abc.value;
if(x==y) 
{window.alert("Source And Destination Cannot be Same");return false;}
var valueDate = document.getElementById('jdate').value;

if(valueDate.length==0){ window.alert("Please Enter Journey Date"); return false;
}
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
<a href="http://localhost/sign.php"> Sign Up </a>


<h2> <font face="Arial" size=4 >Trains Accomodation Availablity between Important Stations</font> </h2>
<form name="f1" action="imp2.php" method="get"  >
<p1> Source Station:  </p1> 
<select  name="xyz">
  <option value="Delhi">Delhi</option>
  <option value="Agra">Agra</option>
  <option value="Ghaziabad">Ghaziabad</option>
  <option value="Lucknow">Lucknow</option>
   <option value="Mumbai">Mumbai</option>
  <option value="Pune">Pune</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Bhopal">Bhopal</option> 
</select> <br>
<p2> Destination Station: </p2> 
<select name="abc">
  <option value="Delhi">Delhi</option>
  <option value="Agra">Agra</option>
  <option value="Ghaziabad">Ghaziabad</option>
  <option value="Lucknow">Lucknow</option>
   <option value="Mumbai">Mumbai</option>
  <option value="Pune">Pune</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Bhopal">Bhopal</option>
</select>
<p3> Class: </p3>
<select> 
<option value="o31"> Sleeper Class </option>
<option value="o32"> General Class </option>
<option value="o33"> AC Class </option>
<option value="o34"> Chair Car </option>
</select> <br>
<p4>
  Journey Date:
  <input type="date" id="jdate" name="jdate">
</p4> <br><br><br>

<p5><input type="submit" onclick="return call()" value="Get Details"> 
<input type="reset" value="Clear"></p5></form>





</body>
</html>