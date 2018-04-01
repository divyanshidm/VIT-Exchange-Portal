<?php 
session_start();


if(!($_SESSION['regnum']=='admin@vep' && isset($_SESSION['regnum']))){
echo "ACCESS DENIED!";

}
else
{
include('session.php');
echo"<hr/>";


	$query= "SELECT * FROM  feedback ORDER BY fid desc";


$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

 $con= mysqli_connect($server, $username, $password1) or die("no connection established");

  mysqli_select_db($con,$db);

  $query=mysqli_query($con,$query);
	$num=mysqli_num_rows($query);
	
		echo "<center><h2>ALL FEEDBACKS</h2></center><p>TOTAL Feedback(s): $num<br/>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>fid</td><td>Regnum </td><td> Name</td><td>Subject </td><td>Feedback </td><td>Time</td></tr></b><p>";
		while($row=mysqli_fetch_array($query)){
			$fid=$row['fid'];
			$regnum1=$row['regnum'];
			$name=$row['name'];
			$subject=$row['subject'];
			$comment=$row['comment'];
			$time= $row['tim'];

			echo "<tr><td>$fid</td><td>$regnum1 </td><td> $name</td><td>$subject</td><td>$comment </td><td>$time</td></tr>";
		}
		echo "</table><p>";
	
}
mysqli_close($con);
?>

<a href="admin_enter.php"> Click here to go to your Home Page </a>
</body>

</head>
</html>