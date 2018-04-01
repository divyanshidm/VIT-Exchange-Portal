
<?php

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

		$server = $url["host"];
		$username = $url["user"];
		$password1 = $url["pass"];
		$db = substr($url["path"],1);

		$con= mysqli_connect($server, $username, $password1) or die("no connection established");

		mysqli_select_db($con,$db);
$mid=$_REQUEST['mid'];
$result=mysqli_query($con,"DELETE FROM discussion_forum WHERE mid='$mid'");

echo "<br/>The Message has been deleted successfully";
header("refresh:1, url=discussion_forum_mine.php");
mysqli_close($con);

?>
