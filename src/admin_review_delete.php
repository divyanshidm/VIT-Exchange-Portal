<?php
session_start();
include("session.php");
echo "<hr/>";
?>
<form method="post" action="admin_review_delete_script.php">
<p> Are you sure you want to delete this Review?
<input type="submit" name="submit" value="OK"> &nbsp <a href="admin_view_review.php">Cancel</a>
<input type="hidden" name="rid" value="<?php echo $_REQUEST['rid'];?>">
</form>
