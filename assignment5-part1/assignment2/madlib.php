<?
    if(isset($_POST['form1'])) {
        setcookie("form1", $_POST['form1'], time()+30);
    }
    if(isset($_POST['form2'])) {
        setcookie("form2", $_POST['form2'], time()+30);
    }
    if(isset($_POST['form3'])) {
        setcookie("form3", $_POST['form3'], time()+30);
    }
    if(isset($_POST['form4'])) {
        setcookie("form4", $_POST['form4'], time()+30);
    }
    if(isset($_POST['form5'])) {
        setcookie("form5", $_POST['form5'], time()+30);
    }
    if(isset($_POST['form6'])) {
        setcookie("form6", $_POST['form6'], time()+30);
    }
    if(isset($_POST['form7'])) {
        setcookie("form7", $_POST['form7'], time()+30);
    }
    if(isset($_POST['form8'])) {
        setcookie("form8", $_POST['form8'], time()+30);
    }
    if(isset($_POST['form9'])) {
        setcookie("form9", $_POST['form9'], time()+30);
    }
    if(isset($_POST['form10'])) {
        setcookie("form10", $_POST['form10'], time()+30);
    }
    if(isset($_POST['form11'])) {
        setcookie("form11", $_POST['form11'], time()+30);
    }
    if(isset($_POST['form12'])) {
        setcookie("form12", $_POST['form12'], time()+30);
    }
    if(isset($_POST['form13'])) {
        setcookie("form13", $_POST['form13'], time()+30);
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little - DIG3930 Madlib</title>
<style type="text/css">
  @import url("styles/styles.css");
</style>

</head>

<body>
<div id="madlib">
<p>Now is the time to finally meet our <? if(isset($_POST['form1'])) { print $_POST['form1']; } else { print $_COOKIE['form1']; } ?> to provide every child a world-class <? if(isset($_POST['form2'])) { print $_POST['form2']; } else { print $_COOKIE['form2']; } ?>, because it will take nothing less to compete in the <? if(isset($_POST['form3'])) { print $_POST['form3']; } else { print $_COOKIE['form3']; } ?> Michelle and I are only here tonight because we were given a chance at an education.  And I will not settle for a(n) <? if(isset($_POST['form4'])) { print $_POST['form4']; } else { print $_COOKIE['form4']; } ?> where some kids don't have <? if(isset($_POST['form5'])) { print $_POST['form5']; } else { print $_COOKIE['form5']; } ?>.  I'll invest in <? if(isset($_POST['form6'])) { print $_POST['form6']; } else { print $_COOKIE['form6']; } ?>.  I'll recruit an army of <? if(isset($_POST['form7'])) { print $_POST['form7']; } else { print $_COOKIE['form7']; } ?>, and pay them <? if(isset($_POST['form8'])) { print $_POST['form8']; } else { print $_COOKIE['form8']; } ?> and give them more support.  And in exchange, I'll ask for <? if(isset($_POST['form9'])) { print $_POST['form9']; } else { print $_COOKIE['form9']; } ?> and more <? if(isset($_POST['form10'])) { print $_POST['form10']; } else { print $_COOKIE['form10']; } ?>.  And we will keep our promise to every young <? if(isset($_POST['form11'])) { print $_POST['form11']; } else { print $_COOKIE['form11']; } ?> - if you commit to serving your <? if(isset($_POST['form12'])) { print $_POST['form12']; } else { print $_COOKIE['form12']; } ?> or your country, we will make sure you can afford a(n) <? if(isset($_POST['form13'])) { print $_POST['form13']; } else { print $_COOKIE['form13']; } ?>.</p>

<div id="editlib"><form name="editlib" method="post" action="assignment5-part1/assignment2/page_index.php">
	<input name="submit" type="submit" value="Edit MadLibs" />
</form></div>

<div id="highlightlib"><form name="highlight" method="post" action="assignment5-part1/assignment2/madlib_show.php">
	<input name="submit" type="submit" value="Show Words" />
</form></div>
</div>
</body>
</html>
