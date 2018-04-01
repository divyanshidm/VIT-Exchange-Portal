<?php
session_start();

if(!isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED!";
}
else{

$mid=$_REQUEST['mid'];

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

		$server = $url["host"];
		$username = $url["user"];
		$password1 = $url["pass"];
		$db = substr($url["path"],1);

		$con= mysqli_connect($server, $username, $password1) or die("no connection established");

		mysqli_select_db($con,$db);

$query=mysqli_query($con,"SELECT * from discussion_forum where mid='$mid'");
$row=mysqli_fetch_assoc($query);
$name=$row['name'];
$subject=$row['subject'];
$message=$row['message'];
$tim=$row['tim'];
$attachment=$row['attachment'];

echo"

<form  method=\"post\" action=\"discussion_forum_edit_message_mine_script.php\"> 
<table border='0' width='25%'>
<tr><td >Subject: </td> <td><textarea type='text' name='newsubject' cols='30' rows='1' />".$subject."</textarea></td></tr>
<tr><td >Message: </td> <td><textarea type='text' name='newmessage' cols='30' rows='3' >".$message."</textarea></td></tr>
</table><p>

<input type='submit' name='submit' value='Save & Post'/>
<input type='hidden' name='mid' value='".$mid."'/>
</form>
";



}
mysqli_close($con);

?>