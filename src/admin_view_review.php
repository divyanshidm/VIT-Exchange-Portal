<?php 
session_start();
include('session.php');
echo "<hr/>";

if(!isset($_SESSION['regnum'])){
echo "ACCESS DENIED!";

}
else{


	$query= "SELECT * FROM  review_exchange ORDER BY rid desc";


$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

 $con= mysqli_connect($server, $username, $password1) or die("no connection established");

  mysqli_select_db($con,$db);

  $query=mysqli_query($con,$query);
	$num=mysqli_num_rows($query);
	
		echo "<center><h2>ALL REVIEWS</h2></center><p>TOTAL Review(s): $num<br/>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>Rid</td><td>Regnum </td><td> Name</td><td>Place</td><td>Rating </td><td>Comment </td><td>Time</td><td>Option(s)</td></tr></b><p>";
		while($row=mysqli_fetch_array($query)){
			$rid=$row['rid'];
			$regnum1=$row['regnum'];
			$name=$row['name'];
			$rating=$row['rating'];
			$comment=$row['comment'];
			$time= $row['tim'];
			$place=$row['place'];

			echo "<tr><td>$rid</td><td>$regnum1 </td><td> $name</td><td>$place</td><td>$rating</td><td>$comment </td><td>$time</td><td><a href='admin_review_delete.php?rid=$rid'>DELETE</a></td></tr>";
		}
		echo "</table><p>";
	
}
mysqli_close($con);
?>

<a href="admin_enter.php"> Click here to go to your Home Page </a>
</body>

</head>
</html>