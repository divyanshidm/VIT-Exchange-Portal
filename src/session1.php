<?php


$date= date('F d, Y, g: i: s a');
echo "Today is ".$date."<br/>";

if(!isset($_SESSION['regnum']) && isset($_COOKIE['vep'])){
	
	$_SESSION['regnum']=$_COOKIE['vep'];

}


$dir="profiles/".$_SESSION['regnum']."/images/";
$open=opendir($dir);

while(($files =readdir($open)) != FALSE){
	if($files!="."&& $files!=".." && $files!="Thumbs.db"){
		echo "<br/><img border='1' width='80' height='100' src='$dir/$files'>";
	}
}

echo "&nbsp".$_SESSION['regnum']."'s session<br/> <a href='logout.php'>Logout</a>";




?>