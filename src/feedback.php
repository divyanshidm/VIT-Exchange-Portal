<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Welcome to VEP  </title>
<style type="text/css">
#div1 {
  font-size:48px;
}

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

h3{

	text-align:left;
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<h2> <center> FEEDBACK FOR VEP  </h2> 

<?php

session_start();

if(!isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED!";
}

else{

include("session.php");
echo "<hr/><h3> Kindly Fill the Form To Post feedback. Your Feedback is Heartily Accepted.</h3>
<div id='div1' class='fa'>
</div>
<script>
function smile() {
  var a;
  a = document.getElementById('div1');
  a.innerHTML = '&#xf118;';
  setTimeout(function () {
      a.innerHTML = '&#xf11a;';
    }, 1000);
  setTimeout(function () {
      a.innerHTML = '&#xf119;';
    }, 2000);
  setTimeout(function () {
      a.innerHTML = '&#xf11a;';
    }, 3000);
}
smile();
setInterval(smile, 4000);
</script>";

echo "</center><form method='post' action='feedback_insert.php'>

<table>
<tr><td width='10'>Subject:</td><td><textarea name='subject' cols='30' rows='1'></textarea></td></tr>
<tr><td width='10'>Feedback:</td><td><textarea name='feedback' cols='30' rows='3' ></textarea></td></tr>
</table>
<p align='left'><input type='submit' name='submit' value='Post Feedback'>
<p></form>";

}

?>
<div id="footer"> &copy; VEP 2017 | All Rights Reserved </div>
</body>
</html>



