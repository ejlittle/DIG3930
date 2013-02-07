<?
	session_start();
	
	if(!$_SESSION['logged_in']) 
	{
        print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
    }//close if
	else 
	{
	
		print ('<p>Click here to logout: <a href="logout.php">logout.php</a></p><br />');
		print ('<form method="post" action="">');
		print ('<input type="submit" name="select" value="SELECT"><br />');
		print ('<input type="submit" name="insert" value="INSERT"><br />');
		print ('<input type="submit" name="delete" value="DELETE"><br />');
		print ('</form>');
	
		if(isset($_POST['select']))
		{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>DIG 3930 - SELECT</title>
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">@import url("styles/styles.css");</style>
    </head>
    
    <body>
    
<?
			require("includes/db_connect.php");
			
			for($x=1;$x<=5;$x++)
			{
				$requesting_data = "Select * FROM Album_Table,Artist_Table,Track_Table WHERE Artist_Table.band_id=$x AND Artist_Table.band_id=Album_Table.artist_id AND Album_Table.album_id=Track_Table.album_id";
				$request_results = mysql_query($requesting_data) or die ("query failed");
				
				
				print '<table border="2" cellpadding="5">
					<tr>
						<td class="artist">Artist</td>
						<td class="shorter">Members</td>
						<td class="sevenfive">Cover</td>
						<td class="shorter">Album</td>
						<td class="fifty">Label</td>
						<td class="tiny">Price</td>
						<td class="fifty">Date</td>
						<td class="tiny">#</td>
						<td>Track Name</td>
						<td class="tiny">Song Length</td>
					</tr>';
					$row = mysql_fetch_assoc($request_results);
					print "<tr>";
						print "<td>$row[band_name]</td>";
						print "<td>$row[band_members]</td>";
						print "<td><img src='$row[album_cover_image]' height='70px' width='70px' alt=''/></td>";
						print "<td>$row[album_name]</td>";
						print "<td>$row[album_label]</td>";
						print "<td>$row[album_price]</td>";
						print "<td>$row[album_release_date]</td>";
						print "<td>$row[track_number]</td>";
						print "<td>$row[track_name]</td>";
						print "<td>$row[track_time]</td>";
					print "</tr>";
							
			
			
					while($row = mysql_fetch_assoc($request_results)) 
					{
						print "<tr><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td>";
						print "<td>$row[track_number]</td>";
						print "<td>$row[track_name]</td>";
						print "<td>$row[track_time]</td>";
						print "</tr>";
					}//close while
				print "</table><br /><br /><br />";
			}//close for
			
				mysql_close($connect);		
?>       
        
    </body>
</html>     

<?
		
		}//close if
		else if(isset($_POST['insert']))
		{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>DIG 3930 - INSERT </title>
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">@import url("styles/styles.css");</style>
    </head>
    
    <body>
    
<?
			require("includes/db_connect.php");
			print ('<form method="post" action="">');
			print('Band Name: <input type="text" name="bandname" value=""><br />');
			print('Band Members: <input type="text" name="bandmembers" value=""><br />');
			print('<input type="submit" name="submitInsertBand" value="SUBMIT"><br /><br />');
			
			print('Artist ID: <input type="text" name="artistid" value=""><br />');
			print('Album Name: <input type="text" name="albumname" value=""><br />');
			print('Album Price: <input type="text" name="albumprice" value=""><br />');
			print('Album Cover Image: <input type="text" name="albumcoverimage" value=""><br />');
			print('Album Release Date: <input type="text" name="albumreleasedate" value=""><br />');
			print('Album Label: <input type="text" name="albumlabel" value=""><br />');
			print('<input type="submit" name="submitInsertAlbum" value="SUBMIT"><br /><br />');
			
			print('Album ID: <input type="text" name="albumid" value=""><br />');
			print('Track Number: <input type="text" name="tracknumber" value=""><br />');
			print('Track Name: <input type="text" name="trackname" value=""><br />');
			print('Track Time: <input type="text" name="tracktime" value=""><br />');
			print('<input type="submit" name="submitInsertTrack" value="SUBMIT"><br /><br />');
			print('</form>');
			for($x=1;$x<=5;$x++)
			{
				$requesting_data = "Select * FROM Album_Table,Artist_Table,Track_Table WHERE Artist_Table.band_id=$x AND Artist_Table.band_id=Album_Table.artist_id AND Album_Table.album_id=Track_Table.album_id";
				$request_results = mysql_query($requesting_data) or die ("query failed");
				
				
				print '<table border="2" cellpadding="5">
					<tr>
						<td class="artist">Artist</td>
						<td class="shorter">Members</td>
						<td class="sevenfive">Cover</td>
						<td class="shorter">Album</td>
						<td class="fifty">Label</td>
						<td class="tiny">Price</td>
						<td class="fifty">Date</td>
						<td class="tiny">#</td>
						<td>Track Name</td>
						<td class="tiny">Song Length</td>
					</tr>';
					$row = mysql_fetch_assoc($request_results);
					print "<tr>";
						print "<td>$row[band_name]</td>";
						print "<td>$row[band_members]</td>";
						print "<td><img src='$row[album_cover_image]' height='70px' width='70px' alt=''/></td>";
						print "<td>$row[album_name]</td>";
						print "<td>$row[album_label]</td>";
						print "<td>$row[album_price]</td>";
						print "<td>$row[album_release_date]</td>";
						print "<td>$row[track_number]</td>";
						print "<td>$row[track_name]</td>";
						print "<td>$row[track_time]</td>";
					print "</tr>";
							
			
			
					while($row = mysql_fetch_assoc($request_results)) 
					{
						print "<tr><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td>";
						print "<td>$row[track_number]</td>";
						print "<td>$row[track_name]</td>";
						print "<td>$row[track_time]</td>";
						print "</tr>";
					}//close while
				print "</table><br /><br /><br />";
			}//close for
			
				mysql_close($connect);		
?>       
        
    </body>
</html>     
<?
		}//close else if
		else if(isset($_POST['delete']))
		{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>DIG 3930 - DELETE </title>
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">@import url("styles/styles.css");</style>
    </head>
    
    <body>
    
<?
			require("includes/db_connect.php");
			
				$requesting_artists = "SELECT * FROM Artist_Table";
				$request_results = mysql_query($requesting_artists, $connect) or die ("artist query failed");
				
				print '<form method="post" action="">';
				print '<table border="2" cellpadding="5">
					<tr>
						<td>band_id</td>
						<td>band_name</td>
						<td>band_members</td>
						<td>DELETE?</td>
					</tr>';							
			
					while($row = mysql_fetch_assoc($request_results)) 
					{
						print "<tr>";
						print "<td>$row[band_id]</td>";
						print "<td>$row[band_name]</td>";
						print "<td>$row[band_members]</td>";
						print "<td><input type='radio' name='deleteSelection' value='".$row['band_id']."'</td>";
						print "</tr>";
					}//close while
				print "</table><br />";
				print "<input type='submit' name='deleteArtist' value='DELETE ARTIST'>";
				print "</form><br /><br />";
				
				$requesting_albums = "SELECT * FROM Album_Table";
				$request_results = mysql_query($requesting_albums, $connect) or die ("album query failed");
				
				print '<form method="post" action="">';
				print '<table border="2" cellpadding="5">
					<tr>
						<td>album_id</td>
						<td>artist_id</td>
						<td>album_name</td>
						<td>album_price</td>
						<td>album_cover_image</td>
						<td>album_release_date</td>
						<td>album_label</td>
						<td>DELETE?</td>
					</tr>';							
			
					while($row = mysql_fetch_assoc($request_results)) 
					{
						print "<tr>";
						print "<td>$row[album_id]</td>";
						print "<td>$row[artist_id]</td>";
						print "<td>$row[album_name]</td>";
						print "<td>$row[album_price]</td>";
						print "<td>$row[album_cover_image]</td>";
						print "<td>$row[album_release_date]</td>";
						print "<td>$row[album_label]</td>";
						print "<td><input type='radio' name='deleteSelection' value='".$row['album_id']."'</td>";
						print "</tr>";
					}//close while
				print "</table><br />";
				print "<input type='submit' name='deleteAlbum' value='DELETE ALBUM'>";
				print "</form><br /><br />";
				
				$requesting_tracks = "SELECT * FROM Track_Table";
				$request_results = mysql_query($requesting_tracks, $connect) or die ("track query failed");
				
				print '<form method="post" action="">';
				print '<table border="2" cellpadding="5">
					<tr>
						<td>track_id</td>
						<td>album_id</td>
						<td>track_number</td>
						<td>track_name</td>
						<td>track_time</td>
						<td>DELETE?</td>
					</tr>';							
			
					while($row = mysql_fetch_assoc($request_results)) 
					{
						print "<tr>";
						print "<td>$row[track_id]</td>";
						print "<td>$row[album_id]</td>";
						print "<td>$row[track_number]</td>";
						print "<td>$row[track_name]</td>";
						print "<td>$row[track_time]</td>";
						print "<td><input type='radio' name='deleteSelection' value='".$row['album_id']."'</td>";
						print "</tr>";
					}//close while
				print "</table><br />";
				print "<input type='submit' name='deleteTrack' value='DELETE ALBUM'>";
				print "</form><br /><br />";
				
			
				mysql_close($connect);		
?>       
        
    </body>
</html>     
<? 
		}//close else if
		else if(isset($_POST['submitInsertBand']))
		{
			require("includes/db_connect.php");
		
			if(ereg("^([A-Za-z0-9]+)$", $_POST['bandname']) && ereg("^([A-Za-z]+)$", $_POST['bandmembers']))
			{
				$insert_query = "INSERT INTO Artist_Table(band_name, band_members) VALUES ('".$_POST['bandname']."', '".$_POST['bandmembers']."')";
				//echo $insert_query;
				$insert_result = mysql_query($insert_query, $connect) or die('insert query failed');
				print('Insert Successful');
			}
			else
			{
				print('Insert Unsuccessful, please make sure you put in valid values before you submit.');
			}
			mysql_close($connect);
		}
		else if(isset($_POST['submitInsertTrack']))
		{
			require("includes/db_connect.php");
		
			if(ereg("^([0-9]+)$", $_POST['albumid']) && ereg("([A-Za-z0-9]+)", $_POST['trackname']) && ereg("^([0-9]+)$", $_POST['tracknumber']) && ereg("^([0-9]+)(:)([0-9]+)$", $_POST['tracktime']))
			{
				$insert_query = "INSERT INTO Track_Table(album_id, track_name, track_number, track_time) VALUES ('".$_POST['albumid']."', '".$_POST['trackname']."', '".$_POST['tracknumber']."', '".$_POST['tracktime']."')";
				//echo $insert_query;
				$insert_result = mysql_query($insert_query, $connect) or die('insert query failed');
				print('Insert Successful');
			}
			else
			{
				print('Insert Unsuccessful, please make sure you put in valid values before you submit.');
			}
			mysql_close($connect);
		
		}
		else if(isset($_POST['submitInsertAlbum']))
		{
			require("includes/db_connect.php");
		
			if(ereg("^([0-9]+)$", $_POST['artistid']) && ereg("([A-Za-z0-9]+)", $_POST['albumname']) && ereg("([A-Za-z0-9]+)", $_POST['albumcoverimage']) && ereg("^([0-9]+)$", $_POST['albumprice']) && ereg("([A-Za-z0-9]+)", $_POST['albumreleasedate']) && ereg("([A-Za-z0-9]+)", $_POST['albumlabel']))
			{
				$insert_query = "INSERT INTO Album_Table(artist_id, album_name, album_cover_image, album_price, album_release_date, album_label) VALUES ('".$_POST['artistid']."', '".$_POST['albumname']."', '".$_POST['albumcoverimage']."', '".$_POST['albumprice']."', '".$_POST['albumreleasedate']."', '".$_POST['albumlabel']."')";
				//echo $insert_query;
				$insert_result = mysql_query($insert_query, $connect) or die('insert query failed');
				print('Insert Successful');
			}
			else
			{
				print('Insert Unsuccessful, please make sure you put in valid values before you submit.');
				if(!ereg("^([0-9]+)$", $_POST['artistid']))
				{
					print "artistid failed";
				}
				if(!ereg("([A-Za-z0-9]+)", $_POST['albumname']))
				{
					print "albumname failed";
				}
				if(!ereg("([A-Za-z0-9]+)", $_POST['albumcoverimage']))
				{
					print "albumcoverimage failed";
				}
				if(!ereg("^([0-9]+)$", $_POST['albumprice']))
				{
					print "albumprice failed";
				}
				if(!ereg("^([A-Za-z]+)([0-9]+)$", $_POST['albumreleasedate']))
				{
					print "albumreleasedate failed";
				}
				if(!ereg("([A-Za-z0-9]+)", $_POST['albumlabel']))
				{
					print "albumlabel failed";
				}
			}
			mysql_close($connect);
		
		
		}
		else if(isset($_POST['deleteAlbum']))
		{
			require("includes/db_connect.php");
			$select_query = "SELECT * FROM Album_Table WHERE album_id = '".$_POST['deleteSelection']."'";
			$select_result = mysql_query($select_query, $connect);
			
			print ('<form method="post" action="">');
			print ('Are you sure you want to delete this row?');
			print '<table border="2" cellpadding="5">
					<tr>
						<td>album_id</td>
						<td>artist_id</td>
						<td>album_name</td>
						<td>album_price</td>
						<td>album_cover_image</td>
						<td>album_release_date</td>
						<td>album_label</td>
					</tr>';							
			
					while($row = mysql_fetch_assoc($select_result)) 
					{
						print "<tr>";
						print "<td>$row[album_id]</td>";
						print "<td>$row[artist_id]</td>";
						print "<td>$row[album_name]</td>";
						print "<td>$row[album_price]</td>";
						print "<td>$row[album_cover_image]</td>";
						print "<td>$row[album_release_date]</td>";
						print "<td>$row[album_label]</td>";
						print "</tr>";
					}//close while
				print "</table><br />";
				print "<input type='hidden' name='delete_id' value='".$_POST['deleteSelection']."'";
				print "<input type='submit' name='deleteAlbumConfirm' value='DELETE ALBUM'>";
				print "</form><br /><br />";
				mysql_close($connect);
		}
		else if(isset($_POST['deleteArtist']))
		{
			require("includes/db_connect.php");
			$select_query = "SELECT * FROM Artist_Table WHERE band_id = '".$_POST['deleteSelection']."'";
			$select_result = mysql_query($select_query, $connect);
			
			print ('<form method="post" action="">');
			print ('Are you sure you want to delete this row?');
				print '<table border="2" cellpadding="5">
					<tr>
						<td>band_id</td>
						<td>band_name</td>
						<td>band_members</td>
					</tr>';							
			
					while($row = mysql_fetch_assoc($select_result)) 
					{
						print "<tr>";
						print "<td>$row[band_id]</td>";
						print "<td>$row[band_name]</td>";
						print "<td>$row[band_members]</td>";
						print "</tr>";
					}
				print "</table><br />";
				print "<input type='hidden' name='delete_id' value='".$_POST['deleteSelection']."'";
				print "<input type='submit' name='deleteArtistConfirm' value='DELETE ARTIST'>";
				print "</form><br /><br />";
				mysql_close($connect);
		}
		else if(isset($_POST['deleteTrack']))
		{
			require("includes/db_connect.php");
			$select_query = "SELECT * FROM Track_Table WHERE track_id = '".$_POST['deleteSelection']."'";
			$select_result = mysql_query($select_query, $connect);
			
			print ('<form method="post" action="">');
			print ('Are you sure you want to delete this row?');
				print '<table border="2" cellpadding="5">
					<tr>
						<td>track_id</td>
						<td>album_id</td>
						<td>track_number</td>
						<td>track_name</td>
						<td>track_time</td>
					</tr>';							
			
					while($row = mysql_fetch_assoc($select_result)) 
					{
						print "<tr>";
						print "<td>$row[track_id]</td>";
						print "<td>$row[album_id]</td>";
						print "<td>$row[track_number]</td>";
						print "<td>$row[track_name]</td>";
						print "<td>$row[track_time]</td>";
						print "</tr>";
					}
				print "</table><br />";
				print "<input type='hidden' name='delete_id' value='".$_POST['deleteSelection']."'";
				print "<input type='submit' name='deleteTrackConfirm' value='DELETE TRACK'>";
				print "</form><br /><br />";
				mysql_close($connect);
		}
		else if(isset($_POST['deleteArtistConfirm']))
		{
			require("includes/db_connect.php");
			
			$delete_query = "DELETE FROM Artist_Table WHERE band_id = '".$_POST['delete_id']."'";
			$delete_result = mysql_query($delete_query, $connect) or die("delete artist failed");
			
			print "Artist successfully deleted.";
			
			mysql_close($connect);
			
		}
		else if(isset($_POST['deleteAlbumConfirm']))
		{
			require("includes/db_connect.php");
			
			$delete_query = "DELETE FROM Album_Table WHERE album_id = '".$_POST['delete_id']."'";
			$delete_result = mysql_query($delete_query, $connect) or die("delete album failed");
			
			print "Album successfully deleted.";
			
			mysql_close($connect);
		}
		else if(isset($_POST['deleteTrackConfirm']))
		{
			require("includes/db_connect.php");
			
			$delete_query = "DELETE FROM Track_Table WHERE track_id = '".$_POST['delete_id']."'";
			$delete_result = mysql_query($delete_query, $connect) or die("delete track failed");
			
			print "Track successfully deleted.";
			
			mysql_close($connect);
		}
	}//close else
?>




