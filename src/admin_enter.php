<?php

session_start();

if(isset($_SESSION['regnum']) && $_SESSION['regnum']=='admin@vep')
{

	include('session.php');
	echo "<hr/><h2>Hello Admin!</h2>
	
<ul>
	<li> <a href=\"admin_forums.html\">FORUMS </a></li>
	<li> <a href=\"admin_profile.php\">VIEW PROFILE </a> </li> 
	
	<li> <a href=\"admin_view_all_users.php\">VIEW All USERS</a> </li>
	<li> <a href=\"admin_feedback.php\"> VIEW FEEDBACK </a> </li> 
</ul>
<hr/>";

}

else
{
	echo "Not Allowed";
}

?>