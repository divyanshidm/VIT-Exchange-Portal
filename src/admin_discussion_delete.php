<?php
session_start();
include("session.php");
echo "<hr/>";
?>
<form method="post" action="admin_discussion_delete_script.php">
<p> Are you sure you want to delete this Message?
<input type="submit" name="submit" value="OK"> &nbsp <a href="admin_view_discussion.php">Cancel</a>
<input type="hidden" name="mid" value="<?php echo $_REQUEST['mid'];?>">
</form>
