<?php

session_start();

if(isset($_SESSION['regnum']) || isset($_COOKIE['vep'])){

	include('session.php');
	include("links.php");

}else{
	echo "Not Allowed";
}

?>