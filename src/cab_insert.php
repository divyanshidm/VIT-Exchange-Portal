<?php

session_start();

if(!isset($_SESSION['regnum']) && !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$source=$_POST['source'];
$destination=$_POST['destination'];
$toj=$_POST['toj'];
$doj=$_POST['doj'];
$comment=$_POST['comment'];

	
	if($source && $destination && $toj && $doj &&$comment)
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
mysqli_query($con,"INSERT INTO cab_forum(regnum,name,source,destination,start_time,doj,comment,tim) values('$regnum','$name','$source','$destination','$toj','$doj','$comment','$tim')");

echo "Your Cab Details Have Been Posted Successfully";
header("refresh:1, url=forums.php");

}
else if($source && $destination && $toj && $doj)
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
mysqli_query($con,"INSERT INTO cab_forum(regnum,name,source,destination,start_time,doj,comment,tim) values('$regnum','$name','$source','$destination','$toj','$doj','','$tim')");

echo "Your Cab Details Have Been Posted Successfully";
header("refresh:1, url=forums.php");
}
else
{
	echo "Fields Marked with * Can't Be Empty";
}

}
mysqli_close($con);
?>