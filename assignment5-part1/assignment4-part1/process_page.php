<?php
    foreach ($_POST as $key => $val) {
        setcookie($key, $val);
    }
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
           return "<span class='error_msg'>INVALID INPUT: Use only letters.</span>";
        }
    }
    else {return "<span class='error_msg'>EMPTY INPUT: Must contain letters.</span>";}
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
            <li><label for="lib10">Product (different from 9): </label>
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
    require("includes/db_connect.php");
            
        $insert_query = "INSERT INTO Obama_Lib(noun,thing,sport,country,thing2,product,people,amount,product2,product3,people2,product4,groups) VALUES ('".$_POST['lib1']."','".$_POST['lib2']."','".$_POST['lib3']."','".$_POST['lib4']."','".$_POST['lib5']."','".$_POST['lib6']."','".$_POST['lib7']."','".$_POST['lib8']."','".$_POST['lib9']."','".$_POST['lib10']."','".$_POST['lib11']."','".$_POST['lib13']."','".$_POST['lib12']."')";
        
        $insert_result = mysql_query($insert_query) or die ("query failed");
        
        $last_entry = "SELECT * FROM Obama_Lib ORDER BY id DESC LIMIT 1";
        $resultsss = mysql_query($last_entry,$connect) or die("Query failed");
        $row = mysql_fetch_assoc($resultsss);

    
    
    

    
    print('<h1>Obama-lib</h1>
    <p>Now is the time to finally meet our <span class="lib">'.$row["noun"].'</span> to provide every child a world-class 
    <span class="lib">'.$row["thing"].'</span>, because it will take nothing less to compete in the <span class="lib">'.$row["sport"].'</span>. 
    Michelle and I are only here tonight because we were given a chance at an education. And I will 
    not settle for a(n) <span class="lib">'.$row["country"].'</span> where some kids don\'t have <span class="lib">'.$row["thing2"].'</span>. I\'ll invest in 
    <span class="lib">'.$row["product"].'</span>. I\'ll recruit an army of <span class="lib">'.$row["people"].'</span>, and pay them 
    <span class="lib">'.$row["amount"].'</span> and give them more support. And in exchange, I\'ll ask for 
    <span class="lib">'.$row["product2"].'</span> and more <span class="lib">'.$row["product3"].'</span>. And we will keep our promise to every 
    young <span class="lib">'.$row["people2"].'</span> - if you commit to serving your <span class="lib">'.$row["groups"].'</span> or your 
    country, we will make sure you can afford a(n) <span class="lib">'.$row["product4"].'</span>.</p>
    ');

    print ('
    <br /><br />
    <input type="button" onclick="location=\'show_highlighted.php\'" value="Show Words" />
    <br /><br />
    <input type="button" onclick="location=\'page_index.php\'" value="Edit Madlib" />
    ');
    
    mysql_close($connect);
    
}


?>

</body>
</html>  