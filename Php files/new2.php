<?php
$x=$_GET['h'];
$n=$_GET['name'];
$con=mysqli_connect("localhost","root","","arpit");
mysqli_query($con,"Insert into booking values(1,2017-08-16,5,'$n')");

?>