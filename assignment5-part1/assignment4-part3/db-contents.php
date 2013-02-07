<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>DIG 3930 - Assignment #4 Part 3 </title>
        <meta http-equiv="Content-Language" content="English" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">@import url("styles/styles.css");</style>
    </head>
    
    <body>
    
<?
require("includes/db_connect.php");

for($x=1;$x<=5;$x++){
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
                


        while($row = mysql_fetch_assoc($request_results)) {
            print "<tr><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td><td class='nothing'></td>";
                print "<td>$row[track_number]</td>";
                print "<td>$row[track_name]</td>";
                print "<td>$row[track_time]</td>";
            print "</tr>";
    }
    print "</table><br /><br /><br />";
}

    mysql_close($connect);
?>       
        
    </body>
</html>     