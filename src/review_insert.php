<?php

session_start();
include("session.php");
echo "<hr/>";
if(!isset($_SESSION['regnum']) or !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$place=$_POST['place'];
$rating = $_POST['rating'];
$comment=$_POST['comment'];
$attachment='NO';

	
	if($place && $rating &&$comment)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s',time()+(3.5*3600));
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
mysqli_query($con,"INSERT INTO review_exchange(regnum,name,place,rating,comment,tim,attachment) values('$regnum','$name','$place','$rating','$comment','$tim','$attachment')");

echo "Your Reviews About \"".$place."\" Have Been Posted Successfully";
header("refresh:1, url=reviewsexc.php");

}
else if($place && $rating)
{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s',time()+(3.5*3600));

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

mysqli_query($con,"INSERT INTO review_exchange(regnum,name,place,rating,tim,attachment) values('$regnum','$name','$place','$rating','$tim','$attachment')");

echo "Your Reviews About \"".$place."\" Have Been Posted Successfully";
header("refresh:1, url=reviewsexc.php");
}
else
{
	echo "Fields Marked with * Can't Be Empty";
}

}

mysqli_close($con);
?>