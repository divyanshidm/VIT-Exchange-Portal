<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Welcome to VEP  </title>
<style type="text/css">


body{

color: white;

}
#note{
	color:hotpink;
}
</style>
<?php
session_start();
include("session.php");
?>
<hr/>
<h3> Please Fill The Following Form To Share Cab.</h3>
<div align='right'><a href='cab_search.php'>Search For Shared Cabs</a></div>
<form method='post' action='cab_insert.php'>

<table>
<tr><td>Source (lower case)*: </td><td><input type='text' name='source' style='text-transform:lowercase'/></td></tr>
<tr><td>Destination (lower case)*: </td><td><input type='text' name='destination' style='text-transform:lowercase'/></td></tr>
<tr><td>Date Of jounery*: </td><td><input type='date' name='doj'/></td></tr>
<tr><td>Time Of jounery*: </td><td><input type='time' name='toj'/></td></tr>
<tr><td>Comments (Optional): </td><td><textarea name='comment' cols='30' rows='3' ></textarea></td></tr>
<tr><td><br/></td></tr>
<tr><td><input type='submit' name='submit' value='Post'></td></tr>


</table>

</form>
<p><div id="note" > Note: Fields Marked with * are Mandatory.</div>
