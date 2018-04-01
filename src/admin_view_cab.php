<?php 
session_start();
include('session.php');
echo"<hr/>";
?>

<html>
<head>
	
<body>
<center>
<h3> All Cabs To Share</h3>
</center>
<hr/>

<?php

if(!isset($_SESSION['regnum'])){
echo "ACCESS DENIED!";

}
else{


	$query= "SELECT * FROM cab_forum ORDER BY cid desc";

	
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
		echo "TOTAL Result(s): $num <br/>
		<p>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>CID</td><td>Regnum </td><td> Name</td><td> Source</td><td> Destination</td><td>Date Of Journey<td>Time Of journey </td><td>Comment </td><td>Mobile Number </td><td>Email ID</td><td>TimeStamp</td><td>Options(s)</td></tr></b>";
		while($row=mysqli_fetch_assoc($query)){
			$cid=$row['cid'];
			$toj=$row['start_time'];
			$comment=$row['comment'];
			$name=$row['name'];
			$tim=$row['tim'];
			$regnum=$row['regnum'];
			$query2=mysqli_query($con,"SELECT mobile,email from users where regnum='$regnum'");
			$row2=mysqli_fetch_assoc($query2);
			$email=$row2['email'];
			$mobile=$row2['mobile'];
			$source=$row['source'];
			$destination=$row['destination'];
			$doj=$row['doj'];
			
			echo"
			<tr><td>$cid</td><td>$regnum </td><td> $name</td><td> $source</td><td> $destination</td><td>$doj</td><td>$toj </td><td>$comment </td><td>$mobile </td><td>$email</td><td>$tim</td><td><a href='admin_cab_delete.php?cid=$cid'>DELETE</a></td></tr>";


		}

	echo"</table><hr/>";
	}
	else{
		echo "NO Results Found";

	}

mysqli_close($con);

	}

?>

</body>
<a href="admin_enter.php"> Click here to go to your Home Page </a>
</head>
</html>


