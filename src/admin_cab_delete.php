<?php
session_start();
include("session.php");
echo "<hr/>";
?>
<form method="post" action="admin_cab_delete_script.php">
<p> Are you sure you want to delete this Cab Details?
<input type="submit" name="submit" value="OK"> &nbsp <a href="admin_view_cab.php">Cancel</a>
<input type="hidden" name="cid" value="<?php echo $_REQUEST['cid'];?>">
</form>
