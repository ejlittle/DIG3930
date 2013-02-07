<? 
include("db_connect.php");

print "I got the database finished at least...";

	$select_query = "SELECT * FROM album";
    $result = mysql_query($select_query) or die ("select failed");
	print "<table border=0>";
	while($row = mysql_fetch_assoc($result)) 
	{
		print "<tr>";
		print "<td>".$row['album_name']."</td>";
		print "<td>".$row['album_price']."</td>";
		print "<td><img src=".$row['album_cover_image']."></td>";
		print "<td>".$row['album_release_date']."</td>";
		print "<td>".$row['album_label']."</td>";
		print "<td>".$row['band_name']."</td>";
		print "</tr>";
	}
	print "</table>";
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little - Assignment 4 Part 3</title>
</head>

<?
mysql_close($connect);
?>

<body>
</body>
</html>
