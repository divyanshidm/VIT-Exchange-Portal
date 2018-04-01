<form method="post" action="discussion_forum_delete_message_mine_script.php">
<p> Are you sure you want to delete this message?
<input type="submit" name="submit" value="OK"><?php echo "&nbsp" ?>
<a href="discussion_forum_mine.php">Cancel</a>
<input type="hidden" name="mid" value="<?php echo $_REQUEST['mid'];?>">
</form>
