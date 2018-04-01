<?php

session_start();


if($_SESSION['regnum'] && $_SESSION['password']){ 

		if($_SESSION['regnum']=='admin@vep' && $_SESSION['password']=='lastminute')
		{
					
			header("location: admin_enter.php");
		}
		else if($_SESSION['regnum']=='admin@vep' && $_SESSION['password']!='lastminute')
		{
			echo "<b>ERROR:<b> Wrong Password For Admin!";
		}
		
}


else
	echo "<b>ERROR:<b> No Fiels Can be Empty";


?>