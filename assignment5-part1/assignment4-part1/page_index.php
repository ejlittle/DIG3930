<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Obama-Lib</title>
<style type="text/css">
    @import url("styles/styles.css");
</style>
</head>
<body>

<?
require("includes/db_connect.php");
        
$last_entry = "SELECT * FROM Obama_Lib ORDER BY id DESC LIMIT 1";
$results = mysql_query($last_entry,$connect) or die("Query failed");
$row = mysql_fetch_assoc($results);



?>
<h1>Obama-lib</h1>
<form action="process_page.php" method="post">
    <ol>
        <li><label for="lib1">Noun: </label>
                <input type="text" name="lib1" id="lib1" value="<?php echo $row['noun'] ?>"/></li>
        <li><label for="lib2">Thing: </label>
                <input type="text" name="lib2" id="lib2" value="<?php echo $row['thing'] ?>"/></li>
        <li><label for="lib3">Olympic Sport: </label>
                <input type="text" name="lib3" id="lib3" value="<?php echo $row['sport'] ?>"/></li>
        <li><label for="lib4">Country: </label>
                <input type="text" name="lib4" id="lib4" value="<?php echo $row['country'] ?>"/></li>
        <li><label for="lib5">Thing: </label>
                <input type="text" name="lib5" id="lib5" value="<?php echo $row['thing2'] ?>"/></li>
        <li><label for="lib6">Product: </label>
                <input type="text" name="lib6" id="lib6" value="<?php echo $row['product'] ?>"/></li>
        <li><label for="lib7">People: </label>
                <input type="text" name="lib7" id="lib7" value="<?php echo $row['people'] ?>"/></li>
        <li><label for="lib8">Amount of Money: </label>
                <input type="text" name="lib8" id="lib8" value="<?php echo $row['amount'] ?>"/></li>
        <li><label for="lib9">Product: </label>
                <input type="text" name="lib9" id="lib9" value="<?php echo $row['product2'] ?>"/></li>
        <li><label for="lib10">Product (different from 9): </label>
                <input type="text" name="lib10" id="lib10" value="<?php echo $row['product3'] ?>"/></li>
        <li><label for="lib11">People: </label>
                <input type="text" name="lib11" id="lib11" value="<?php echo $row['people2'] ?>"/></li>
        <li><label for="lib12">Name of Group: </label>
                <input type="text" name="lib12" id="lib12" value="<?php echo $row['groups'] ?>"/></li>
        <li><label for="lib13">Product: </label>
                <input type="text" name="lib13" id="lib13" value="<?php echo $row['product4'] ?>"/></li>
    </ol>
    <br />
    <input type="submit" value="Submit Madlib" />
</form>
</body>
</html>
