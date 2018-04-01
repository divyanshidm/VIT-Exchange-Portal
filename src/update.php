<?php
session_start();

if(!isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED";
}
else
{
include('session.php');
	
echo "<h3>UPDATE FORM<h3><br/>";

echo "<h3>Edit User: .\"$_REQUEST['names']\". </h3>

<form enctype=\"multipart/form-data\" method=\"post\" action=\"change.php\"> 
<table border='0' width='60%'>
<tr><td width='30%'>Name: </td> <td><input type='text' name='newname' value='$_REQUEST['names']'</td></tr>
<tr><td width='30%'>Email: </td> <td><input type='text' name='newemail' value='$_REQUEST['emails']'</td></tr>
<tr><td width='30%'>Password: </td> <td><input type='text' name='newpassword' value=''</td></tr>
</table><p>

Choose your new picture: <input type='file' name='newupload'><p>

<input type='submit' name='submit' value='Save & Update'/>
<input type='hidden' name='id' value='$_REQUEST['regnums']'/>

</form>

";


}
?>