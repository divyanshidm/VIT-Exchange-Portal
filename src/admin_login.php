<?php

session_start();


if($_SESSION['regnum'] && $_SESSION['password']){ 

	//various conditions for login of admin and other users.

		if($_SESSION['regnum']=='admin@vep' && $_SESSION['password']=='lastminute')
		{
					
			header("location: admin_enter.php");
		}
		else if($_SESSION['regnum']=='admin@vep' && $_SESSION['password']!='lastminute')
		{
			echo "<b>ERROR:<b> Wrong Password For Admin!";
		}
		else
		{
			header("location: admin_enter.php");
		}
		
}


else
	echo "<b>ERROR:<b> No Fiels Can be Empty";


?>