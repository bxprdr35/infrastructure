<form class='forum-post-group' method='post' action='../discussion/newForumReply.php'>
  <div class='new-post-header'>Reply to this post</div>
  <textarea class='new-post-text' placeholder='Type your reply here' name='reply_text'></textarea>
  <input name='disc' type='hidden' value=' <?php echo $discId; ?>' />
  <input class='new-post-button' type='submit' value='Add reply' />
</form>
