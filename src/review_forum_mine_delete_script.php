
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
$rid=$_REQUEST['rid'];
$result=mysqli_query($con,"DELETE FROM review_exchange WHERE rid='$rid'");

echo "<br/>The Review has been deleted successfully";
header("refresh:1, url=review_forum_mine.php");
mysqli_close($con);
?>
