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
	<h1>Welcome, <? print $_SESSION['logged_in_user']; ?>, to DIG3930 Blog</h1>
<?
	$select_query = "SELECT * FROM stories ORDER BY story_creation_date DESC";
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
			<span class="link"><? print ('<a href=view.php?storyID='.$row['story_id'].'>view</a>'); ?> || <? print ('<a href=comment.php?storyID='.$row['story_id'].'>comment</a>'); ?></span><br />
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