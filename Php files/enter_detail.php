
<?php
$con=mysqli_connect('localhost','root','','project');

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo '<form method="post" action="">
        <ul style="list-style: none;">

        <li>

        Name:&emsp; &emsp;<input type="text" name="name" />
        </li>
        <li>
        Enrollment Number:&emsp; &emsp; &emsp;<input type="text" name="eno">
        </li>
        <li>
        Branch:&emsp; <input type="text" name="branch">
        </li>
        <li>
        Subject Marks:<input type="text" name="s" />
        </li>
        <li>
        <input type="submit" value="Register" />
        </li>
        </ul>
     </form>';
}
else{
  $a = mysqli_real_escape_string($con, $_POST['name']);
  $b = mysqli_real_escape_string($con, sha1($_POST['eno']));
  $c = mysqli_real_escape_string($con, $_POST['branch']);
  $d = mysqli_real_escape_string($con, $_POST['s']);
  if($_POST['s']<30)
  {
    $gr='f';
  }
  elseif ($_POST['s']>=30 & $_POST['s']<39) {
    $gr='d';
  }
  elseif ($_POST['s']>=40 & $_POST['s']<49) {
    $gr='c';
  }
  elseif ($_POST['s']>=50 & $_POST['s']<59) {
    $gr='c+';
  }
  elseif ($_POST['s']>=60 & $_POST['s']<69) {
    $gr='b';
  }
  elseif ($_POST['s']>=70 & $_POST['s']<79) {
    $gr='b+';
  }
  elseif ($_POST['s']>=80 & $_POST['s']<89) {
    $gr='a';
  }
  elseif ($_POST['s']>=90) {
    $gr='a+';
  }
  $sql="INSERT INTO students (name,eno,branch,marks,grade )  VALUES ('$a', '$b', '$c','$d','$gr')";
  $result = mysqli_query($con,$sql);
}
?>
