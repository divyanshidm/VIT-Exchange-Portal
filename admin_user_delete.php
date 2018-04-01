<?php
session_start();
include("session.php");
echo "<hr/>";
?>
<form method="post" action="admin_user_delete_script.php">
<p> Are you sure you want to delete this USER?
<input type="submit" name="submit" value="OK"> &nbsp <a href="admin_view_all_users.php">Cancel</a>
<input type="hidden" name="regnum" value="<?php echo $_REQUEST['regnums'];?>">

</form>
<p><a href="admin_enter.php"> Click here to go to your Home Page </a>