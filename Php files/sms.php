<html>
<head><link rel="stylesheet" type="text/css" href="smsform.css">    </head>
<title>SMS SERVICE ACTIVATION </title>
<body>
<script>
function allLetter(inputtxt)  
  {  
   var letters = /^[A-Za-z]+$/;  
   if(inputtxt.value.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     window.alert("Only Alphabets Allowed..!");  
     return false;  
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

<h2> <font size=5 face="Arial" ><b>SMS SERVICE ACTIVATION </font></h2></b>
<marquee> Now Stay connected to the latest alerts regarding your preferred trains and journeys @2Rs./Month</marquee>
<form name="f1" action="sms2.php"><p1> Enter your name: </p1><input type="text" name="txt1" > <br><br>
      <p2> Enter your mobile no. </p2> <input type="text" name="txt2"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10"><br>
<p3><input type="submit" name="Submit" value="Submit" onclick="return allLetter(document.f1.txt1)" />  
</p3></form>

</body>
</html>