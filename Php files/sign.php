<html>
<head><link rel="stylesheet" type="text/css" href="loginform.css">
<title>Sign Up Page </title>
</head>
<body>
<script>
function call()
{ 
name=document.f1.name.value;
x=document.f1.abc.value;
y=document.f1.xyz.value;
z=document.f1.xyzr.value;
var letterNumber = /^[0-9a-zA-Z]+$/;  
if(name==null||name=="") 
{window.alert("Plz. Enter a name"); return false;}
if(x==null||x=="") 
{window.alert("Plz. Enter a user id"); return false;}
if(y==null||y=="") 
{window.alert("Plz. Enter a password"); return false;}
if(z==null||z=="") 
{window.alert("Plz. Enter repeat password"); return false;}
if(y!=z) 
{window.alert("Passwords don't match"); return false;}
if(y.length>10)
 {window.alert("Password should not be of more than 10 characters"); return false;}
if(x.match(letterNumber))
{return true;}
else {window.alert("Only AlphaNumeric Characters allowed"); return false;}
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
<a href="http://localhost/sign.php"> Sign Up </a><br> <br> <br> 

<form name="f1" action="sign2.php" method="get">
<p3><b>Name :</p3></b> <input type="text" name="name"> <br> <br>
<p4><b>User ID :</b> </p4><input type="text" name="abc"> <br> <br>
<p5><b>Password :</b></p5> <input type="password" name="xyz"><br> <br>
<p6><b>Repeat Password :</b></p6> <input type="password" name="xyzr"> <br> <br>
<p7><b>Mobile No. :</p7> </b><input type ="text" name="no" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> <br><br><br>
<p8><input type="submit" value="Submit"onclick="return call()"> </p8></form>

</body>
</html>


