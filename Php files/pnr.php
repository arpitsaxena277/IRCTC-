<html>
<head>  <link rel="stylesheet" type="text/css" href="pnrform.css">  
<title> PNR Status </title> </head>
<body>
<script type="text/JavaScript">
function call1()
{ 
var x=document.f1.demo.value;
 if(x==null || x=="")
  {window.alert("Please Don't leave the field empty");
return false;
  }
   else if(x.length!=10)
   { window.alert("Invalid PNR Number");
return false; }
 else { window.alert("Your PNR Status is being loaded. Wait for few moments");

return true;}


}
</script>
<h1><font color="#4863A0" size=6 >      INDIAN RAILWAY CATERING & TOURISM CORPORATION LTD. </font></h1>
<img src="http://localhost:8080/download.png" height="150" width="200">
<a href="http://localhost:8080/pnr.php"> PNR Status </a>
<a href="http://localhost:8080/imp.php"> Trains Between Important Stations</a>
<a href="http://localhost:8080/seat.php"> Seat Availablity</a>
<a href="http://localhost:8080/fare.php"> Fare Enquiry</a>
<a href="http://localhost:8080/tat.php"> Check Tatkal Charges</a>
<a href="http://localhost:8080/glance.php"> Trains At a Glance</a>
<a href="http://localhost:8080/sms.php"> SMS Service</a>

<a href="http://localhost:8080/form1.php"> Home </a>
<a href="http://localhost:8080/login.php"> Login </a>
<a href="http://localhost:8080/sign.php"> Sign Up </a>
<h2> <font color="black" size=6 >Passenger Current Status </font></h2>
<p> Enter the PNR for your booking below to get the Current status </p>
<form name="f1" action="pnr2.php" method="get" >
<input type="text" name='demo' value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br>
<input type="submit" name="submit" onclick="return call1()" value="Get Status">
<input type="reset"> </form>

</body>
</html>