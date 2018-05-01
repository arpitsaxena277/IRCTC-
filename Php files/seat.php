<html>
<head><link rel="stylesheet" type="text/css" href="seatform.css">    </head>
<title>Seat Availablity </title>
<body>
<script> 
function call()
{
x=document.f1.xyz.value;
y=document.f1.abc.value;
code=document.f1.i1.value;
var valueDate = document.getElementById('date').value;
if(code==""|| code==null ) {window.alert("Please Don't leave the Train No. field empty");return false;}
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
<a href="http://localhost/sign.php"> Sign Up </a>

<h2> Accommodation Availability Enquiry on Trains till Departure </h2><br>
<marquee><font size=3> NOTE: This Enquiry is available from 0030 hrs to 2330 hrs IST (GMT+5:30 hrs)</font> </marquee>
<form name="f1"  action="seat2.php" method="get"> 
<p1>Train No.: </p1>        <input type="text" name="i1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4">
      <p2> Journey Date <input type="date" id="date"></p2> <br> <br>
       <p3> Source Station: </p3><select  name="xyz">
  <option value="Delhi">Delhi</option>
  <option value="Agra">Agra</option>
  <option value="Ghaziabad">Ghaziabad</option>
  <option value="Lucknow">Lucknow</option>
   <option value="Mumbai">Mumbai</option>
  <option value="Pune">Pune</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Bhopal">Bhopal</option> 
</select> 
      <p4>Destination Station: </p4><select  name="abc">
  <option value="Delhi">Delhi</option>
  <option value="Agra">Agra</option>
  <option value="Ghaziabad">Ghaziabad</option>
  <option value="Lucknow">Lucknow</option>
   <option value="Mumbai">Mumbai</option>
  <option value="Pune">Pune</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Bhopal">Bhopal</option> 
</select>  <br> <br>
      <p5>Class :</p5>
      <select name="MNO">
  <option value="Sleeper">Sleeper</option>
  <option value="AC">AC Class</option>
  <option value="Chair Car">Chair Car</option>
  <option value="General">General</option>
</select> <br> <br>
<p6><input type="submit" value="Get Availablity" onclick ="return call()" ></p6>
<input type="Reset" value="Clear All" >
</form> 
</body>
</html>