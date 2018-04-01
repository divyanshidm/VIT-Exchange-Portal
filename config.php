<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$config = array(
    'host' => $server ,
    'user' => $username ,
    'pw' => $password,
    'db' => $db 
);
echo $server."</br>";
echo $url."</br>";
echo $username."</br>";
echo $password."</br>";
echo $db."</br>";
?>