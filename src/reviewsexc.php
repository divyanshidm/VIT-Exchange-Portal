<?php
session_start();
include("session.php");

?>
<html>
<head>
<title> VIT EXCHANGE PORTAL </title>
<style type="text/css">
<!--- <link rel="stylesheet" type="text/css" href="style.css" /> --->
 h2 {color: white;
 background-color: black;
 border: 3px solid white;}
 body {background-color: #1B4F72;
color: white;
font-family: Monotype Corsiva;
font-size: 25px;
}
 table{font-size: 20px;}

 a:link {font-size:20px;
 text-decoration: none;}
 a:visited {color: red;}

 
 span { font-size: 30px;
 color: red;}
 
</style>
</head>
<body>
<hr/>
<h3> <center> Reviews Exchange Forum  </h3><div id='postlink' align='right'><a href='review_search.php'>Search For Reviews</a></div> <hr/>

<h3>Please Fill The Form.</h3>
<form method='post' action='review_insert.php'>
<table cellpadding="4px" cellspacing="3px">
<tr><td>Name of place (In Upper Case)*: </td><td><input type='text' name='place' style='text-transform:uppercase'/></td></tr>
<tr><td>Rating*:</td><td><select name="rating">
	<option value=""> --Select-- </option>
	<option value="1"> 1 </option>
	<option value="1.5"> 1.5 </option>
	<option value="2"> 2 </option>
	<option value="2.5"> 2.5 </option>
	<option value="3"> 3 </option>
	<option value="3.5"> 3.5 </option>
	<option value="4"> 4 </option>
	<option value="4.5"> 4.5 </option>
	<option value="5"> 5 </option>
</select>	</td></tr>

<tr><td>Comments (optional): </td><td>
<textarea name="comment" rows="10" cols="60"></textarea></td></tr>
<tr><td><p></p></td></tr>
<tr><td><input type='submit' name='submit' value='Post'/></td></tr>
</table>
</form>
<b>Note: Fields marked with * are mandatory.</b><br/>
<a href='enter.php'> Click here to go to your Dashboard </a>
</body>
</html>