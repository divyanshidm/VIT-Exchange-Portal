<?php
session_start();


if(!($_SESSION['regnum']=='admin@vep' && isset($_SESSION['regnum']))){
echo "ACCESS DENIED!";

}
else
{
include('session.php');
echo"<hr/>";

	
echo "<h3>UPDATE FORM<h3><br/>";

echo "<h3>Edit User: " .$_REQUEST['regnums']. "</h3>

<form enctype=\"multipart/form-data\" method=\"post\" action=\"admin_change.php\"> 
<table border='0' width='25%'>
<tr><td >Name: </td> <td><input type='text' name='newname' value='".$_REQUEST['names']."'/></td></tr>
<tr><td width='30%'>Email: </td> <td><input type='text' name='newemail' value='".$_REQUEST['emails']."'></td></tr>
<tr><td width='30%'>Gender: </td> <td><input type='text' name='newgender' value='".$_REQUEST['genders']."'></td></tr>
<tr><td width='30%'>Address: </td> <td><input type='text' name='newaddress' value='".$_REQUEST['addresses']."'></td></tr>
<tr><td width='30%'>Mobile: </td> <td><input type='text' name='newmobile' value='".$_REQUEST['mobiles']."'></td></tr>
</table><p>
<table width='25%'>
<tr><td>Choose your new picture:</td><td> <input type='file' name='newupload'></td></tr>
<tr><td><p></td></tr>
<tr><td><input type='submit' name='submit' value='Save & Update'/></td><tr>
<tr><td><input type='hidden' name='id' value='".$_REQUEST['regnums']."'/></td><tr>
</table>
</form>

<a href=\"admin_enter.php\"> Click here to go to your Home Page </a>";


}
?>