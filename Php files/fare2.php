<html>
<head><link rel="stylesheet" type="text/css" href="fareform.css">    </head>
<title> Fare Enquiry </title>
<body>
<script> 
function call1()
{
x=document.f1.xyz.value;
y=document.f1.abc.value;
code=document.f1.i1.value;
var valueDate = document.getElementById('date').value;
if(code==""|| code==null ) 
{window.alert("Please Don't leave the Train No. field empty");return false;}
if(valueDate.length==0){ window.alert("Please Enter Journey Date"); return false;}
if(x==y) 
{window.alert("Source And Destination Cannot be Same");return false;}
}
function call2()
{
window.alert("The Payment for the booked ticket will be done through PayTm Account. You will be soon notified over your phone with the PNR status and other details");
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
<a href="http://localhost/sign.php"> Sign Up </a><br>
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
$s=$_GET['xyz'];
$d=$_GET['abc'];
$c=$_GET['op'];
$sql ="Select * from fare where TrainNo='$x'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
       {
            $base=$row['base_fare'];
            $food=$row['food'];
            $res=$row['res'];
            $diff=abs($s-$d);
	    if($c=="General")
            {$cl=100; $res=0; $food=0;}
	    else if($c=="Sleeper")
            $cl=200;
            else if($c=="AC")
            $cl=300;
            else $cl=400;
            $net=$base+$food+$res+$diff*100+$cl;
	    echo "<h1> Base Charges :- ".$base."</h1>";
            echo "<h1> Food Charges :- ".$food."</h1>";
            echo "<h1> Reservation Charges :- ".$res."</h1>";
            echo "<h1>Net Charges (Inclusive of all the charges) :-".$net."</h1>";
            
        }
}
else echo 'Invalid Train No.';
?>
</body>
</html>
