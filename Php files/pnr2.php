<html>
<head>  <link rel="stylesheet" type="text/css" href="pnrform.css">  
<title> PNR Status </title> </head>
<body>
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
<p7><font size=6><?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$c=1;
$x=$_GET['demo'];
$sql ="Select * from status";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         if($x==$row['PNR']) 
          {  $c=0;
 	 if($row['Waiting']<=2 && $row['Waiting']!=0) echo "R.A.C.(Reservation Against Cancellation)";
         else if($row['Waiting']==0) echo "Reservation Confirmed.";
         else { $y=$row['Waiting']-2;
                 echo "Waiting : ".$y;
             } break;
          }
  }
}
echo "<br></p7><p7>"; 
if($c==1) echo "Invalid PNR(Try again by going back to the previous webpage)";
else {echo "Train No. :-".$row['TrainNo']; 
echo "<br></p7><p7>"; 
echo "PNR No. :- ".$row['PNR'];}
mysqli_close($conn); 
?> </font>

</p7>
</body>
</html>