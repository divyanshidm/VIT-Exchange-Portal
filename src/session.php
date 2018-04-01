<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Welcome to VEP  </title>
<style type="text/css">

body{
font-family: Georgia;
font-weight: 900;
}

#samay{
text-align: right;
color: white;
}
#photu{
height: auto;
width: auto;
text-align: center;
margin-top: -40px;
}



#bahar{
text-align: center;
color: white;	
}
a:link {
    color: white;
}

a:visited {
    color: hotpink;
}

a:hover {
    color: hotpink;
}

a:active {
    color: blue;
}

body {
    position: relative;
    background-image: url("blur.jpg");
    background-repeat:no-repeat;
	    background-attachment: fixed;
    background-size:100% 100vh;}

</style>
</head>
<body>


<?php
$date= date('F d, Y, g: i: s a');
echo "<div id= 'samay' >";
echo "Today is ".$date."<br/>"; 
echo "</div>";

if(!isset($_SESSION['regnum']) && isset($_COOKIE['vep'])){
	
	$_SESSION['regnum']=$_COOKIE['vep'];

}


$dir="profiles/".$_SESSION['regnum']."/images/";
$open=opendir($dir);

while(($files =readdir($open)) != FALSE){
	if($files!="."&& $files!=".." && $files!="Thumbs.db"){
		echo "<div id='photu'><br/><img border='1' width='150' height='150' src='$dir/$files'> <br /> </div> ";
	}
}

echo "<div id='bahar'> Welcome ".$_SESSION['regnum']."<br/> <a href='logout.php'>Logout</a> </div>";

?>

</body>
</html>

