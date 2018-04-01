<?php

session_start();

if(!isset($_SESSION['regnum']) && !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$subject=$_POST['subject'];
$message=$_POST['message'];
	
	if($subject && $message)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s');
$attachment="NO";
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
mysqli_query($con,"INSERT INTO discussion_forum(regnum,name,subject,message,tim,attachment) values('$regnum','$name','$subject','$message','$tim','$attachment')");

echo "Your Message Has Been Posted Successfully";
header("refresh:2, url=discussion.php");

}
else
{
	echo "No Fields Can Be Empty";
}

}
mysqli_close($con);
?>