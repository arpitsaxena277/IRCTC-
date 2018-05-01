<html>
<head><link rel="stylesheet" type="text/css" href="seatform.css">    </head>
<title>Trains between important stations </title>
<body>
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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$x=$_GET['i1'];
$sql ="Select * from trains where trainno='$x';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) 
{ 
$y=$row['Nos'];
echo '<h3> Number of seats available :'.$y;
}
}

$a=$_GET['xyz'];
$b=$_GET['abc'];
$sql ="Select * from status where trainno='$x';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) 
{ $y=$row['Waiting']; 
  $av=$y-2;
  $u=$_GET['MNO'];
  if($y==0)
  echo "<h3>Seats Available In '$u' class</h3>";
  else if($y<=2)
  echo "<h3>R.A.C. Seats Available In '$u' class</h3>";
  else 
  echo "<h3>Waiting Seats Available In '$u' class <br> Waiting : $av<h3>";
}} 
else 
echo "<h3>Invalid Train No. or No Trains available from '$a' to '$b'<h3>";

?>
</body>
</html>