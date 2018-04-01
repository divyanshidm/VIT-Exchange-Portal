<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Welcome to VEP  </title>
<style type="text/css">


body{
font-family: Georgia;
color: white;
text-align: center;

}

#footer{
height: 40px;
border-top: 1px solid grey;
text-align: center;
font-size: 15px;
color: white;
}


h2{
color: white;
margin-top: -5px;
background: black;	
 border: 1px solid white;
}

</style>
</head>
<body>




<?php

session_start();

if(!isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED!";
}

else{

include("session.php");
echo "<hr/>";
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

 $con= mysqli_connect($server, $username, $password1) or die("no connection established");

  mysqli_select_db($con,$db);
$regnum=$_SESSION['regnum'];

$per_page=5;

$pages_query=mysqli_query($con,"SELECT count('mid') from discussion_forum where regnum='$regnum'" );
$total=mysqli_fetch_row($pages_query);
$total1=$total[0];
$pages=ceil($total1/$per_page);

$page= (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start= ($page-1)*$per_page;

$query=mysqli_query($con,"SELECT * from discussion_forum where regnum='$regnum' order by mid DESC limit $start,$per_page");
echo "<table cellpadding='5px' border='1px' align='center'>
<tr><td>Registration Number</td><td>Name</td><td>Topic</td><td>Message</td><td>Time</td></tr>";
while ($row=mysqli_fetch_assoc($query)) {
	
	$name=$row['name'];
	$subject=$row['subject'];
	$message=$row['message'];
	$tim=$row['tim'];
	$attachment=$row['attachment'];
	$mid=$row['mid'];

echo"
<tr><td>".$regnum."</td><td>".$name."</td><td>".$subject."</td><td>".$message."</td><td>".$tim."</td><td><a href='discussion_forum_edit_message_mine.php?mid=$mid'>Edit</a></td><td><a href='discussion_forum_delete_message_mine.php?mid=$mid'>Delete</a></td></tr>
";

}


echo "</table>";
echo" <hr/>";
echo "<a href='discussion.php'>Go Back To Discussion Forum</a><br/>";
$prev = $page-1;
$next = $page+1;

echo "<br/><center>";

if($page>1){
echo "<a href='?page=$prev'>prev</a> ";
}

if($pages >=1){

	for($x=1;$x<=$pages;$x++)
	{
		
		echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
	}
}
if(!($page>=$pages))
echo "<a href='?page=$next'>next</a> ";


}
mysqli_close($con);
?>

<div id="footer"> &copy; VEP 2017 | All Rights Reserved </div>
</body>
</html>

