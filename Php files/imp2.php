<html>
<head><link rel="stylesheet" type="text/css" href="impform.css">    </head>
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
$x=$_GET["xyz"];
$y=$_GET['abc'];
$sql ="Select * from trains where source='$x' and dest='$y';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) 
{ 
$s=$row['Source']; 
$d=$row['Dest'];
$t=$row['TrainNo'];
$n=$row['TrainName'];
$co=$row['Noc'];
$so=$row['Nos'];
echo '<table cellpadding ="50px"  style="width:60%">
<tr>
    <th >Train No.</th>
    <th >Train Name</th> 
    <th >Source</th>
    <th >Destination </th>
    <th >Number of coaches </th>
    <th >Number of seats available</th>
  </tr> 
    <tr>
    <td width="15%">'.$t.'</td>
    <td width="22%">'.$n.' </td>
    <td width="22%">'. $s.' </td>
    <td width="10%">'. $d.' </td>
    <td width="10%">'. $co.' </td>
    <td width="10%">'. $so.' </td> </tr>
</table>';
}
}
$sql ="Select * from Trains where Trainno in (Select TrainNo from Route where (Stat1='$x' or Stat2='$x' or Stat3='$x' or Stat4='$x' or Stat5='$x') and (Stat1='$y' or Stat2='$y' or Stat3='$y' or Stat4='$y' or Stat5='$y' ));";
$rs = mysqli_query($conn, $sql);
if (mysqli_num_rows($rs) > 0) {
while($row = mysqli_fetch_assoc($rs)) 
{ 
$s=$row['Source']; 
$d=$row['Dest'];
$tn=$row['TrainNo'];
$n=$row['TrainName'];
$co=$row['Noc'];
$so=$row['Nos'];
if(isset($t)) {if($tn==$t) continue;}

echo '<table cellpadding ="50px" style="width:60%">
   <tr>
    <td width="10%">'.$tn.'</td>
    <td width="20%">'.$n.' </td>
    <td width="25%">'. $s.' </td>
    <td width="20%">'. $d.' </td>
    <td width="5%">'. $co.' </td>
    <td width="5%">'. $so.' </td> </tr>
</table>';
}}
?>
</body>
</html>
