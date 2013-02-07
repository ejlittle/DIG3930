<?
    session_start();

  	//require("includes/db_connect.php");
	$connectComments = mysql_connect("localhost","","") or die("Comments Connection failed");
    $selectedCommentsDatabase = mysql_select_db("",$connectComments) or die("Comments Database selected failed");
	
	$connectBlog = mysql_connect("localhost","dig3930_blog","dig3930_blog") or die("Blog Connection failed");
	$selectedBlogDatabase = mysql_select_db("dig3930_blog",$connectBlog) or die("Blog Database selected failed");
    
    if(isset($_POST['submit']) && (!$_SESSION['logged_in'])) {

        $select_query = "SELECT user_id, username, password, security_level FROM assignment6p2_users"; // query to select all users/passwords
        $select_result = mysql_query($select_query, $connectComments) or die("Query failed");

        while($row = mysql_fetch_assoc($select_result)) {
            if ((($_POST['username']) == ($row['username'])) && (($_POST['password']) == ($row['password']))) { // check if user input = a record in the database
                $_SESSION['logged_in'] = true;
                $_SESSION['logged_in_user'] = $row['username'];
                $_SESSION['logged_in_user_id'] = $row['user_id'];
				$_SESSION['logged_in_security_level'] = $row['security_level'];
            }
        }
    }
	
	if ($_SESSION['logged_in']) {
        header("Location: blog.php");
    }
    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>09 LOGIN PORTAL - LOGIN</title>
    </head>
    
    <body>
        <form method="post" action="">
            <label for="username">Username</label>
            <input name="username" id="username" type="text" /><br />
            <label for="password">Password</label>
            <input name="password" id="password" type="password" /><br />
            <input name="submit" id="submit" type="submit" value="Login" />
    </body>
</html>

<?
	mysql_close($connectComments);
	mysql_close($connectBlog); 
?>