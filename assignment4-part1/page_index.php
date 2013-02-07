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

<h1>Obama-lib</h1>
<form action="madlib.php" method="post">
    <ol>
        <li><label for="lib1">Noun: </label>
                <input type="text" name="lib1" id="lib1" value="<?php echo $_COOKIE['lib1'] ?>"/></li>
        <li><label for="lib2">Thing: </label>
                <input type="text" name="lib2" id="lib2" value="<?php echo $_COOKIE['lib2'] ?>"/></li>
        <li><label for="lib3">Olympic Sport: </label>
                <input type="text" name="lib3" id="lib3" value="<?php echo $_COOKIE['lib3'] ?>"/></li>
        <li><label for="lib4">Country: </label>
                <input type="text" name="lib4" id="lib4" value="<?php echo $_COOKIE['lib4'] ?>"/></li>
        <li><label for="lib5">Thing: </label>
                <input type="text" name="lib5" id="lib5" value="<?php echo $_COOKIE['lib5'] ?>"/></li>
        <li><label for="lib6">Product: </label>
                <input type="text" name="lib6" id="lib6" value="<?php echo $_COOKIE['lib6'] ?>"/></li>
        <li><label for="lib7">People: </label>
                <input type="text" name="lib7" id="lib7" value="<?php echo $_COOKIE['lib7'] ?>"/></li>
        <li><label for="lib8">Amount of Money: </label>
                <input type="text" name="lib8" id="lib8" value="<?php echo $_COOKIE['lib8'] ?>"/></li>
        <li><label for="lib9">Product: </label>
                <input type="text" name="lib9" id="lib9" value="<?php echo $_COOKIE['lib9'] ?>"/></li>
        <li><label for="lib10">Product: </label>
                <input type="text" name="lib10" id="lib10" value="<?php echo $_COOKIE['lib10'] ?>"/></li>
        <li><label for="lib11">People: </label>
                <input type="text" name="lib11" id="lib11" value="<?php echo $_COOKIE['lib11'] ?>"/></li>
        <li><label for="lib12">Name of Group: </label>
                <input type="text" name="lib12" id="lib12" value="<?php echo $_COOKIE['lib12'] ?>"/></li>
        <li><label for="lib13">Product: </label>
                <input type="text" name="lib13" id="lib13" value="<?php echo $_COOKIE['lib13'] ?>"/></li>
    </ol>
    <br />
    <input type="submit" value="Submit Madlib" />
</form>
</body>
</html>