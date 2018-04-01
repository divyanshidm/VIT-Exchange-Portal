<?php

session_start();

if(!isset($_SESSION['regname']))
{
	echo "Access Denied!";
	exit;
}
else
{

include("session.php");
include("links.php");
}
?>