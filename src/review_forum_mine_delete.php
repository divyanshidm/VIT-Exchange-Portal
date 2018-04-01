<?php
session_start();
include("session.php");
echo "<hr/>";
?>
<form method="post" action="review_forum_mine_delete_script.php">
<p> Are you sure you want to delete this Review?
<input type="submit" name="submit" value="OK"> &nbsp <a href="review_forum_mine.php">Cancel</a>
<input type="hidden" name="rid" value="<?php echo $_REQUEST['rid'];?>">
</form>
