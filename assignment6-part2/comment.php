<? 
    session_start();

	if(!$_SESSION['logged_in']) {
        header ("Location: login.php");
    } else {
	
    //require("includes/db_connect.php");
	$connectComments = mysql_connect("localhost","","") or die("Comments Connection failed");
    $selectedCommentsDatabase = mysql_select_db("",$connectComments) or die("Comments Database selected failed");
	
	$connectBlog = mysql_connect("localhost","dig3930_blog","dig3930_blog") or die("Blog Connection failed");
	$selectedBlogDatabase = mysql_select_db("dig3930_blog",$connectBlog) or die("Blog Database selected failed");
	
	$comment_good = true;
	
	function update_rss()
	{
		$rss_file = "comments.xml";
		$rss = file_get_contents($rss_file);
    
		$exploded_original = explode("</channel>", $rss);
		$rss_start = $exploded_original[0];
		$rss_end = "</channel>".$exploded_original[1];

			$rss_query = "SELECT * FROM stories WHERE story_id = '".$_GET['storyID']."'";
			$rss_result = mysql_query($rss_query) or die("RSS Select Query Failed");
			
			while($row = mysql_fetch_assoc($rss_result))
			{
				$entered_title = "Comment on story ".$row['story_title'];
				$entered_description = $_POST['comment']." by ".$_SESSION['logged_in_user']." on ".date('F j, Y, g:i a').".";
				$new_item = "<item>\n\t<title>".$entered_title."</title>\n\t<description>".$entered_description."</description>\n\t<link>assignment6-part2/blog.php</link>\n</item>\n";
				$updated_rss = $rss_start.$new_item.$rss_end;
			}
		//print "<pre>".htmlentities($updated_rss)."</pre>";
		file_put_contents($rss_file, $updated_rss);
	}
	
	if(isset($_POST['submit']))
	{
		if(ereg("^([A-Za-z0-9\-\,\'\?\.\![:space:]]+)$", $_POST['comment']))
		{
			$insert_query = "INSERT INTO assignment6_comments(user_id, story_id, comment_body) VALUES ('".$_SESSION['logged_in_user_id']."', '".$_GET['storyID']."', '".$_POST['comment']."')";
			$insert_result = mysql_query($insert_query, $connectComments);
			
			update_rss();
			
			header("Location: blog.php");
		}
		else
		{
			$comment_good = false;
		}
	}
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
	<div id="content">	
	<center><form method="post" action="">
		<textarea name="comment" id="input-box"><? print $_POST['comment']; ?></textarea><br />
		<? if(!$comment_good) { print "Only letters, numbers, and common punctuation are allowed!  Please try again. <br />"; } ?>
		<input type="submit" name="submit" value="SUBMIT" />
	</form></center>
	</div>
</div>

</body>
</html>

<?	
	mysql_close($connectComments);
	mysql_close($connectBlog); 
}?>
