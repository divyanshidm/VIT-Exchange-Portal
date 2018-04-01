<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<style type="text/css">


body{
font-family: Georgia;
color: white;
text-align: center;
}

</style>
</head>
<body>
<?php

session_start();
include("session.php");
echo "<hr/>";
$regnum=$_SESSION['regnum'];
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

  $con=mysqli_connect($server, $username, $password1);

  mysqli_select_db($con,$db);

$query1=mysqli_query($con,"SELECT * from users where regnum='$regnum'");
$query=mysqli_fetch_assoc($query1);
$name=$query['name'];
$email=$query['email'];
$gender=$query['gender'];
$address=$query['address'];
$mobile=$query['mobile'];
$password=$query['password'];


echo "
<table cellpadding=\"5px\">
<tr><td>Registration Number: </td><td>$regnum </td></tr>
<tr><td>Name: </td><td>$name </td></tr>
<tr><td>Gender: </td><td>$gender </td></tr>
<tr><td>Email: </td><td>$email </td></tr>
<tr><td>Address: </td><td>$address </td></tr>
<tr><td>Mobile: </td><td>$mobile </td></tr>


";

$dir="profiles/".$_SESSION['regnum']."/images";
$open=opendir($dir);

while(($files =readdir($open)) != FALSE){
	if($files!="."&& $files!=".." && $files!="Thumbs.db"){
		echo "<tr><td>Profile Picture</td><td><img border='1' width='80' height='100' src='$dir/$files'></td></tr></table>";
	}
}

echo "
<hr/>

	<a href='edit.php?regnums=$regnum&names=$name&emails=$email&genders=$gender&mobiles=$mobile&addresses=$address&passwords=$password\'>EDIT PROFILE</a>
	<p>
<a href='enter.php'> Click here to go to your Dashboard </a>

<hr/>

";

?>
</body>
</html>