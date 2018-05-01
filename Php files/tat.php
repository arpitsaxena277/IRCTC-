<html>
<head><link rel="stylesheet" type="text/css" href="tatform.css">    </head>
<title>Tatkal charges </title>
<body>
<style>
p
{
padding-left:400px;
}
table {
    width: 30%;
    border: 1px solid black;
     border-collapse: collapse;
    }
tr:hover {background-color: #f5f5f5}

</style>
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
$sql ="Select a.TrainNo,a.Charge,b.TrainName from tatkal a,trains b where b.trainno=a.trainno ";
$result = mysqli_query($conn, $sql);
echo '<p> <table> <tr>
      <th width=20%> TrainNo. </th>
      <th width=10%> Charge </th>
      <th width=70%> Train Name </th> </tr> </table>';
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) 
{  $x=$row['TrainNo'] ;
   $y=$row['Charge'];
   $z=$row['TrainName'];
echo '<p><table> 
      <tr>
      <td width=20%>'.$x.'</td> 
      <td width=30%>'.$y.'</td>
      <td width=60%>'.$z.' Express</td>
      </tr>
      </table></p>';
}
}
?>
</body>
</html>