<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Welcome to VEP  </title>
<style type="text/css">


body{

color: white;

}

</style>

<?php
session_start();
include("session.php");
echo "<hr/>";
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

 $con= mysqli_connect($server, $username, $password1) or die("no connection established");

  mysqli_select_db($con,$db);
$search=$_POST['search'];
$query=mysqli_query($con,"SELECT * from discussion_forum where subject like '%$search%'");
$num=mysqli_num_rows($query);

echo "$num Result(s) found for \"$search\"<br/>";
echo "<table cellpadding='5px' border='1px' align='center'>
<tr><td>Registration Number</td><td>Name</td><td>Subject</td><td>Message</td><td>Time</td></tr>";
while ($row=mysqli_fetch_assoc($query)) {
	$regnum=$row['regnum'];
	$name=$row['name'];
	$subject=$row['subject'];
	$message=$row['message'];
	$tim=$row['tim'];
	$attachment=$row['attachment'];

echo"
<tr><td>".$regnum."</td><td>".$name."</td><td>".$subject."</td><td>".$message."</td><td>".$tim."</td></tr>
";

}


echo "</table>";
echo" <hr/>";
echo "<a href='discussion.php'>Back to Discussion Forum</a><br/>";



?>
<a href="enter.php"> Click here to go to your Home Page </a>
</body>

</head>
</html>