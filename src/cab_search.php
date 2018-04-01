<?php 
session_start();
include('session.php');
echo"<hr/>";
?>

<html>
<head>
		<style type="text/css">
body{
	color: white;
}
#note{
	color:darkblue;
}
</style>
<body>
<center>
<h3> Please Fill The Following Form To Search Cab.</h3>
<div align='right'><a href='cab_form.php'>Share Your Own Cab</a></div>
<form method='GET' action='cab_search.php'>

<table>

<tr><td>Source (lower case)*: </td><td><input type='text' name='source' style='text-transform:lowercase'/></td></tr>
<tr><td>Destination (lower case)*: </td><td><input type='text' name='destination' style='text-transform:lowercase'/></td></tr>
<tr><td>Date Of journey*: </td><td><input type='date' name='doj'/></td></tr>
<tr><td><br/></td></tr>
<tr><td><input type='submit' name='submit' value='search'></td></tr>

</table>

</form>
<div id="note"><p>Note: Fields Marked with * are Mandatory.</div>
</center>
<hr/>

<?php

if(!isset($_SESSION['regnum'])){
echo "ACCESS DENIED!";

}
else{


if(isset($_REQUEST['source']) && isset($_REQUEST['destination']) && isset($_REQUEST['doj']))
{

	$source=$_GET['source'];
	$destination=$_GET['destination'];
	$doj=$_GET['doj'];
	

	$query= "SELECT * FROM cab_forum WHERE source='$source' and destination='$destination' and doj='$doj order by cid DESC'";

	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

		$server = $url["host"];
		$username = $url["user"];
		$password1 = $url["pass"];
		$db = substr($url["path"],1);

		$con= mysqli_connect($server, $username, $password1) or die("no connection established");

		mysqli_select_db($con,$db);
	$query=mysqli_query($con,$query);
	$num=mysqli_num_rows($query);

	if($num > 0){
		echo "$num Result(s) found for Source: \"$source\" || Destination: \"$destination\" || Date Of Journey: \"$doj\"<br/>
		<p>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>Regnum </td><td> Name</td><td>Time Of journey </td><td>Comment </td><td>Mobile Number </td><td>Email ID</td></tr></b>";
		while($row=mysqli_fetch_assoc($query)){
			
			$toj=$row['start_time'];
			$comment=$row['comment'];
			$name=$row['name'];
			$regnum=$row['regnum'];
			$query2=mysqli_query($con,"SELECT mobile,email from users where regnum='$regnum'");
			$row2=mysqli_fetch_assoc($query2);
			$email=$row2['email'];
			$mobile=$row2['mobile'];
			
			echo"
			
			<tr><td>$regnum </td><td> $name</td><td>$toj </td><td>$comment </td><td>$mobile </td><td>$email</td></tr>";


		}}
	else{
		echo "NO Results Found";

	}

	mysqli_close($con);

	}


else
{echo "No Search Value can be empty";}
echo"</table><hr/><center><h3>";
echo "<a href='cab_forum_mine.php'>My Cab Posts</a><br/>";
echo "</h3>
<a href='enter.php'> Click here to go to your Dashboard </a></center>";

echo "<hr/>";
}
?>

</body>

</head>
</html>


