<html>
<head><link rel="stylesheet" type="text/css" href="loginform.css">
<title>Home Page </title>
</head>
<body>
<script>
function call()
{
x=document.f1.abc.value;
y=document.f1.xyz.value;
if(x==null||x=="") 
{window.alert("Plz. Enter a user id"); return false;}
if(y==null||y=="") 
{window.alert("Plz. Enter a password"); return false;}

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
<form name="f1" action="login2.php" method="get" >
<p><b>User Id: </b><input type="text" name="abc"> </p> 
<p><b>Password :</b>  <input type="password" name="xyz" ></p>
<p1> <input type="Submit" Value="Submit" onclick="return call()" > </p1> 
</body> </html>
