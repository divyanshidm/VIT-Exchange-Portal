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

<h2> <center> WELCOME TO DISCUSSIONS FORUM  </h2> 
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

$per_page=5;


$pages_query=mysqli_query($con,"SELECT count(regnum) from users");
$total=mysqli_fetch_row($pages_query);
$total1=$total[0];
$pages=ceil($total1/$per_page);



echo "<h3> TOTAL Users(s): $total1 </h3>";
$page= (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start= ($page-1)*$per_page;
 
$query=mysqli_query($con,"SELECT * from users limit $start,$per_page");
echo "<table cellpadding='5px' border='1px' align='center'>
<tr><td>Registration Number</td><td>Name</td><td>Gender</td><td>Mobile No.</td><td>Email ID</td><td>Address</td><td colspan='2'>Option(s)</td></tr>";
while ($row=mysqli_fetch_assoc($query)) {
	$regnum=$row['regnum'];
	$name=$row['name'];
	$gender=$row['gender'];
	$mobile=$row['mobile'];
	$address=$row['address'];
	$email=$row['email'];

	

echo"
<tr><td>$regnum</td><td>".$name."</td><td>".$gender."</td><td>".$mobile."</td><td>".$email."</td><td>".$address."</td><td><a href='admin_user_edit.php?regnums=$regnum&names=$name&emails=$email&genders=$gender&mobiles=$mobile&addresses=$address'>EDIT</a></td><td><a href='admin_user_delete.php?regnums=$regnum'>DELETE</a></td></tr>
";

}


echo "</table>";
echo" <hr/>";

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
<p><a href="admin_enter.php"> Click here to go to your Home Page </a><br/>
<div id="footer"> &copy; VEP 2017 | All Rights Reserved </div>
</body>
</html>



