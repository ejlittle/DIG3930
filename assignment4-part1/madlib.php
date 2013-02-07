<?php
    include("db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Obama-Lib PHP</title>
<style type="text/css">
    @import url("styles/styles.css");
</style>
</head>
<body>
<?php 

function isAnyInvalid($array) {
    foreach ($array as $field) {
            if (isEmptyField($field) == true) {
                return true;
            }
            else {
                if (isInvalidField($field) == true) { 
                    return true;
                }
            }
    }
}

function isEmptyField($field) {
    return empty($field);
}

function isInvalidField($field) {
    $result = ereg("[^A-Za-z]", $field);
    if ($result == 1) {return true; }
    else { return false; }
}

function isValidField($field) {
    if (isEmptyField($field) != true) {
        if (isInvalidField($field) == true) {
           return "<span class='missing'>INVALID INPUT: Use only letters.</span>";
        }
    }
    else {return "<span class='missing'>EMPTY INPUT: Must contain letters.</span>";}
}

if (isAnyInvalid($_POST) == true) {
    print ('<h1>Obama-lib</h1>
    <form action="" method="post">
        <ol>
            <li><label for="lib1">Noun: </label>
                    <input type="text" name="lib1" id="lib1" value="'. $_POST["lib1"] . '"/>'. isValidField($_POST["lib1"]) .'</li>
            <li><label for="lib2">Thing: </label>
                    <input type="text" name="lib2" id="lib2" value="'. $_POST["lib2"] .'"/>'. isValidField($_POST["lib2"]) .'</li>
            <li><label for="lib3">Olympic Sport: </label>
                    <input type="text" name="lib3" id="lib3" value="'. $_POST["lib3"] .'"/>'. isValidField($_POST["lib3"]) .'</li>
            <li><label for="lib4">Country: </label>
                    <input type="text" name="lib4" id="lib4" value="'. $_POST["lib4"] .'"/>'. isValidField($_POST["lib4"]) .'</li>
            <li><label for="lib5">Thing: </label>
                    <input type="text" name="lib5" id="lib5" value="'. $_POST["lib5"] .'"/>'. isValidField($_POST["lib5"]) .'</li>
            <li><label for="lib6">Product: </label>
                    <input type="text" name="lib6" id="lib6" value="'. $_POST["lib6"] .'"/>'. isValidField($_POST["lib6"]) .'</li>
            <li><label for="lib7">People: </label>
                    <input type="text" name="lib7" id="lib7" value="'. $_POST["lib7"] .'"/>'. isValidField($_POST["lib7"]) .'</li>
            <li><label for="lib8">Amount of Money: </label>
                    <input type="text" name="lib8" id="lib8" value="'. $_POST["lib8"] .'"/>'. isValidField($_POST["lib8"]) .'</li>
            <li><label for="lib9">Product: </label>
                    <input type="text" name="lib9" id="lib9" value="'. $_POST["lib9"] .'"/>'. isValidField($_POST["lib9"]) .'</li>
            <li><label for="lib10">Product: </label>
                    <input type="text" name="lib10" id="lib10" value="'. $_POST["lib10"] .'"/>'. isValidField($_POST["lib10"]) .'</li>
            <li><label for="lib11">People: </label>
                    <input type="text" name="lib11" id="lib11" value="'. $_POST["lib11"] .'"/>'. isValidField($_POST["lib11"]) .'</li>
            <li><label for="lib12">Name of Group: </label>
                    <input type="text" name="lib12" id="lib12" value="'. $_POST["lib12"] .'"/>'. isValidField($_POST["lib12"]) .'</li>
            <li><label for="lib13">Product: </label>
                    <input type="text" name="lib13" id="lib13" value="'. $_POST["lib13"] .'"/>'. isValidField($_POST["lib13"]) .'</li>
        </ol>
        <br />
        <input type="submit" value="Submit Madlib" />
    </form>');
}
else {
    $update_query1 = "UPDATE assignment4_1 SET word1 = '".$_POST['lib1']."'";
    $update_result1 = mysql_query($update_query1) or die ("query failed");
	$update_query2 = "UPDATE assignment4_1 SET word2 = '".$_POST['lib2']."'";
    $update_result2 = mysql_query($update_query2) or die ("query failed");
	$update_query3 = "UPDATE assignment4_1 SET word3 = '".$_POST['lib3']."'";
    $update_result3 = mysql_query($update_query3) or die ("query failed");
	$update_query4 = "UPDATE assignment4_1 SET word4 = '".$_POST['lib4']."'";
    $update_result4 = mysql_query($update_query4) or die ("query failed");
	$update_query5 = "UPDATE assignment4_1 SET word5 = '".$_POST['lib5']."'";
    $update_result5 = mysql_query($update_query5) or die ("query failed");
	$update_query6 = "UPDATE assignment4_1 SET word6 = '".$_POST['lib6']."'";
    $update_result6 = mysql_query($update_query6) or die ("query failed");
	$update_query7 = "UPDATE assignment4_1 SET word7 = '".$_POST['lib7']."'";
    $update_result7 = mysql_query($update_query7) or die ("query failed");
	$update_query8 = "UPDATE assignment4_1 SET word8 = '".$_POST['lib8']."'";
    $update_result8 = mysql_query($update_query8) or die ("query failed");
	$update_query9 = "UPDATE assignment4_1 SET word9 = '".$_POST['lib9']."'";
    $update_result9 = mysql_query($update_query9) or die ("query failed");
	$update_query10 = "UPDATE assignment4_1 SET word10 = '".$_POST['lib10']."'";
    $update_result10 = mysql_query($update_query10) or die ("query failed");
	$update_query11 = "UPDATE assignment4_1 SET word11 = '".$_POST['lib11']."'";
    $update_result11 = mysql_query($update_query11) or die ("query failed");
	$update_query12 = "UPDATE assignment4_1 SET word12 = '".$_POST['lib12']."'";
    $update_result12 = mysql_query($update_query12) or die ("query failed");
	$update_query13 = "UPDATE assignment4_1 SET word13 = '".$_POST['lib13']."'";
    $update_result13 = mysql_query($update_query13) or die ("query failed");
	
	$select_query = "SELECT * FROM assignment4_1";
    $result = mysql_query($select_query) or die ("select failed");
	
	while($row = mysql_fetch_assoc($result)) {
		print('<h1>Obama-lib</h1>
    	<p>Now is the time to finally meet our <span class="lib">'.$row['word1'].'</span> to provide every child a world-class 
    	<span class="lib">'.$row['word2'].'</span>, because it will take nothing less to compete in the <span class="lib">'.$row['word3'].'</span>. 
    	Michelle and I are only here tonight because we were given a chance at an education. And I will 
    	not settle for a(n) <span class="lib">'.$row['word4'].'</span> where some kids don\'t have <span class="lib">'.$row['word5'].'</span>. I\'ll invest in 
    	<span class="lib">'.$row['word6'].'</span>. I\'ll recruit an army of <span class="lib">'.$row['word7'].'</span>, and pay them 
    	<span class="lib">'.$row['word8'].'</span> and give them more support. And in exchange, I\'ll ask for 
    	<span class="lib">'.$row['word9'].'</span> and more <span class="lib">'.$row['word10'].'</span>. And we will keep our promise to every 
    	young <span class="lib">'.$row['word11'].'</span> - if you commit to serving your <span class="lib">'.$row['word12'].'</span> or your 
    	country, we will make sure you can afford a(n) <span class="lib">'.$row['word13'].'</span>.</p>
    ');
	}

   /*print ('
    <br /><br />
    <input type="button" onclick="location=\'show_highlighted_page.php\'" value="Show Words" />');*/
   print ('<br /><br />
    <input type="button" onclick="location=\'page_index.php\'" value="Edit Madlib" />
    ');
}

mysql_close($connect);
?>

</body>
</html> 