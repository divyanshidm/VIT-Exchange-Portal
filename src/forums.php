<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<html>
<head>
<title> VIT EXCHANGE PORTAL </title>
<style type="text/css">
ul {list-style-type: square;
border: 1px;}

h2 {color: white
 background-color: black;
 border: 3px solid white;}
  body {background-color: #1B4F72;
color: white;
font-family: Monotype Corsiva;
font-size: 25px;
}


#header #nav{
margin-top: -50px;
text-align: center;

}


#header #nav ul li{
list-style-type: none;
display: inline;
padding: 3px 8px 3px 8px;
background-color: black;
font-size: 30px;
font-family: pristina;
}

#header #nav a{
text-decoration: none;
color: white;
}

#header #nav ul li a:link{
color: white;
}


#header #nav ul li a:hover{
color: orange;
}

#header #nav ul li a:active{
color: red;
}



</style>
</head>
<body>
<h2> <center> FORUMS </h2>

<?php
session_start();

if(isset($_SESSION['regnum']) || isset($_COOKIE['vep'])){

include('session.php');

echo"</br>
</br>
<div id='header'>
<div id='nav'>
<ul>
<li> <a href='review_search.php'> Reviews Exchange </a>  </li>
<li> <a href='cab_search.php'>Cab Sharing </a></li>
<li> <a href='discussion.php'> Discussions Forum </a> </li>
</ul>
</div>
</div>

<a href='enter.php'> Click here to go to your Dashboard </a>
" 
;}
else {echo "Access Denied!!";
}
?>
</body>
</html>