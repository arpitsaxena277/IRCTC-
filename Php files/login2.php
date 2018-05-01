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
<a href="http://localhost/sign.php"> Sign Up </a><br> <br> <br> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$x=$_GET['abc'];
$p=$_GET['xyz'];
$sql ="Select * from records where userid ='$x' and password ='$p';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{ 
echo '<p2><b>Successfully Logged In......<br></p2></b> '; 
echo '<b><marquee>Hi  '.$x.'</marquee></b><br>';
echo '<form name="f1" action="book.php" method="get">
<p2><input type="submit" name="submit"  value="Book Tickets"> </form>
</p2> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
<p3>Hi <form name="f2" action="book.php" method="get"> <input type="text" name="ftg" value='.$x.' readonly> </p3></form>';
}
else 
{echo '<p2><b>Invalid Password, Please Try again...! </b></p2><br>';
}
?>

</body>
</html>
