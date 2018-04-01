<?php

session_start();
if(!isset($_POST['submit']) || !isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED";
}

else
{
	$subject=$_POST['newsubject'];
	$message=$_POST['newmessage'];
	$mid=$_REQUEST['mid'];
	if($subject && $message)
	{
		$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

		$server = $url["host"];
		$username = $url["user"];
		$password1 = $url["pass"];
		$db = substr($url["path"],1);

		$con= mysqli_connect($server, $username, $password1) or die("no connection established");

		mysqli_select_db($con,$db);
		mysqli_query($con,"UPDATE discussion_forum set subject='$subject',message='$message' where mid='$mid' ");
		
		echo "Your Message Has Been Updated And Posted Successfully";
		header("refresh:1, url=discussion_forum_mine.php");


	}
	else
	{
		echo "No Fiels Can Be Empty";
	}


}
mysqli_close($con);
?>