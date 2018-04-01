<?php

session_start();
include("session.php");
echo "<hr/>";

if(!isset($_SESSION['regnum']) && !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$subject=$_POST['subject'];
$feedback=$_POST['feedback'];
	
	if($subject && $feedback)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s');

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

 $con= mysqli_connect($server, $username, $password1) or die("no connection established");

  mysqli_select_db($con,$db);

$query=mysqli_query($con,"SELECT * from users where regnum='$regnum'");
$row=mysqli_fetch_assoc($query);

$name=$row['name'];
mysqli_query($con,"INSERT INTO feedback(regnum,name,subject,comment,tim) values('$regnum','$name','$subject','$feedback','$tim')");

echo "Your Feedback Has Been Posted Successfully. <br/> Thank You for Showing Your Interest in Us.";
header("refresh:1, url=enter.php");

}
else
{
	echo "No Fields Can Be Empty";
}

}
?>