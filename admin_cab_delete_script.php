
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

  
$cid=$_REQUEST['cid'];
$result=mysqli_query($con,"DELETE FROM cab_forum WHERE cid='$cid'");

echo "<br/>The Cab Details has been deleted successfully";
header("refresh:1, url=admin_view_cab.php");
mysqli_close($con);
?>
