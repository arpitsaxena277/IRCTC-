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


<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$x=$_GET['txt1'];
$y=$_GET['txt2'];

$sql ="Insert into records(name,mobileno) values('$x','$y');";
$rs=mysqli_query($conn, $sql);
if($rs)
echo '<h3>SMS service will be soon activated at your mobile number thankyou</h3>';

mysqli_close($conn);
?> 
</body>
</html>
