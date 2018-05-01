<html>
<head><link rel="stylesheet" type="text/css" href="glanceform.css">    </head>
<title>Trains at a Glance</title>
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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="Select * from trains;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo '<table cellspacing="5" cellpadding="0" style="width:60%">
<tr>
    <th width=10%>Train No.</th>
    <th width=15%>Train Name</th> 
    <th width=15%>Source</th>
    <th width=15%>Destination </th>
  <th width=20%>Number of coaches </th>
    <th width=25%>Number of seats available</th> 
  </tr>
  </table>';
while($row = mysqli_fetch_assoc($result)) 
{ 
$s=$row['Source']; 
$d=$row['Dest'];
$t=$row['TrainNo'];
$n=$row['TrainName'];
$co=$row['Noc'];
$so=$row['Nos'];
echo '<table cellspacing="5" cellpadding="7" style="width:60%">
<tr>
    <td width=10%>'.$t.'</td>
    <td width=10%>'.$n.' </td>
    <td width=10%>'. $s.' </td>
    <td width=15%>'. $d.' </td>
    <td width=10%>'. $co.' </td>
    <td width=10%>'. $so.' </td>
</tr>
</table> ';
}
}


?>






</body>
</html>