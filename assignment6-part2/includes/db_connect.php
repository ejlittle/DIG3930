<?
    $connectComments = mysql_connect("localhost","","") or die("Comments Connection failed");
    $selectedCommentsDatabase = mysql_select_db("",$connectComments) or die("Comments Database selected failed");
	
	$connectBlog = mysql_connect("localhost","dig3930_blog","dig3930_blog") or die("Blog Connection failed");
	$selectedBlogDatabase = mysql_select_db("dig3930_blog",$connectBlog) or die("Blog Database selected failed");
	
?>