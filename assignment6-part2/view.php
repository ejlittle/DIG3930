<? 
    session_start();

	if(!$_SESSION['logged_in']) {
        header ("Location: login.php");
    } else {

    require("includes/db_connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little - Assignment 6 Part 2</title>
<style type="text/css">@import url("styles/styles.css");</style>
</head>

<body>
<? 
	print ('<p>Click here to logout: <a href="logout.php">logout.php</a></p>');
?>
	<div id="content-container">
	<a href="blog.php">home</a>
<?
	$select_query = "SELECT * FROM stories WHERE story_id = '".$_GET['storyID']."'";
	$select_result = mysql_query($select_query, $connectBlog) or die(mysql_error());
	
	while($row = mysql_fetch_assoc($select_result))
	{
?>
		<div id="content">
			<div id="content-date">
				<span class="date"><? print $row['story_creation_date']; ?></span>
			</div>
			<span class="title"><? print $row['story_title']; ?></span><br />
			<span class="body"><? print $row['story_body']; ?></span><br />
		</div>					
<?
	}
	
	$comment_query = "SELECT * FROM assignment6_comments, assignment6p2_users WHERE assignment6_comments.story_id = '".$_GET['storyID']."' AND assignment6p2_users.user_id = assignment6_comments.user_id ORDER BY assignment6_comments.comment_creation_date ASC";
	$comment_result = mysql_query($comment_query, $connectComments) or die(mysql_error());
	
	while($row = mysql_fetch_assoc($comment_result))
	{
?>
		<div id="comment">
			<div id="content-date">
				POSTED BY <span class="user"><? print $row['username']; ?></span> ON <span class="date"><? print $row['comment_creation_date']; ?></span>
			</div>
			<span class="body"><? print $row['comment_body']; ?></span>
		</div>				
<?
	}
?>
	</div>
</body>
</html>

<?
	mysql_close($connectComments);
	mysql_close($connectBlog); 
}?>