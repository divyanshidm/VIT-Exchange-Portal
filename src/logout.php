<?php

session_start();


session_destroy();

echo "You have Successfully Logged Out!";
header("refresh:1; url=index.php");

?>