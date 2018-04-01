<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<style type="text/css">


body{
font-family: Georgia;
color: white;
}

</style>
</head>
<body>
<?php
session_start();
include("session.php");
echo "<hr/>";
if(!isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED";
}
else
{

	
echo "<h3>UPDATE FORM<h3><br/>";

echo "<h3>Edit User: " .$_REQUEST['regnums']. "</h3>

<form enctype=\"multipart/form-data\" method=\"post\" action=\"change.php\"> 
<table border='0' width='25%'>
<tr><td >Name: </td> <td><input type='text' name='newname' value='".$_REQUEST['names']."'/></td></tr>
<tr><td width='30%'>Email: </td> <td><input type='text' name='newemail' value='".$_REQUEST['emails']."'></td></tr>
<tr><td width='30%'>Gender: </td> <td><input type='text' name='newgender' value='".$_REQUEST['genders']."'></td></tr>
<tr><td width='30%'>Address: </td> <td><input type='text' name='newaddress' value='".$_REQUEST['addresses']."'></td></tr>
<tr><td width='30%'>Mobile: </td> <td><input type='text' name='newmobile' value='".$_REQUEST['mobiles']."'></td></tr>
<tr><td width='30%'>Password: </td> <td><input type='password' name='newpassword' value=''</td></tr>
</table><p>
<table width='25%'>
<tr><td>Choose your new picture:</td><td> <input type='file' name='newupload'></td></tr>
<tr><td><p></td></tr>
<tr><td><input type='submit' name='submit' value='Save & Update'/></td><tr>
<tr><td><input type='hidden' name='id' value='".$_REQUEST['regnums']."'/></td><tr>
</table>
</form>

<hr/>
<p>
<a href='enter.php'> Click here to go to your Dashboard </a>
<hr/>";
}
?>