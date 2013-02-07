<?
$numValid = 0;

//form1
if(empty($_POST['form1']))
{
	if(isset($_COOKIE["wrongform1"]))
	{
		setcookie("wrongform1", $value, time()-3600);
	}
	setcookie("emptyform1", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form1']))
{
	if(isset($_COOKIE["emptyform1"]))
	{
		setcookie("emptyform1", $value, time()-3600);
	}
	setcookie("wrongform1", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform1"]))
	{
		setcookie("emptyform1", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform1"]))
	{
		setcookie("wrongform1", $value, time()-3600);
	}
	$numValid++;
}
//form2
if(empty($_POST['form2']))
{
	if(isset($_COOKIE["wrongform2"]))
	{
		setcookie("wrongform2", $value, time()-3600);
	}
	setcookie("emptyform2", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form2']))
{
	if(isset($_COOKIE["emptyform2"]))
	{
		setcookie("emptyform2", $value, time()-3600);
	}
	setcookie("wrongform2", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform2"]))
	{
		setcookie("emptyform2", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform2"]))
	{
		setcookie("wrongform2", $value, time()-3600);
	}
	$numValid++;
}
//form3
if(empty($_POST['form3']))
{
	if(isset($_COOKIE["wrongform3"]))
	{
		setcookie("wrongform3", $value, time()-3600);
	}
	setcookie("emptyform3", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form3']))
{
	if(isset($_COOKIE["emptyform3"]))
	{
		setcookie("emptyform3", $value, time()-3600);
	}
	setcookie("wrongform3", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform3"]))
	{
		setcookie("emptyform3", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform3"]))
	{
		setcookie("wrongform3", $value, time()-3600);
	}
	$numValid++;
}
//form4
if(empty($_POST['form4']))
{
	if(isset($_COOKIE["wrongform4"]))
	{
		setcookie("wrongform4", $value, time()-3600);
	}
	setcookie("emptyform4", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form4']))
{
	if(isset($_COOKIE["emptyform4"]))
	{
		setcookie("emptyform4", $value, time()-3600);
	}
	setcookie("wrongform4", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform4"]))
	{
		setcookie("emptyform4", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform4"]))
	{
		setcookie("wrongform4", $value, time()-3600);
	}
	$numValid++;
}
//form5
if(empty($_POST['form5']))
{
	if(isset($_COOKIE["wrongform5"]))
	{
		setcookie("wrongform5", $value, time()-3600);
	}
	setcookie("emptyform5", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form5']))
{
	if(isset($_COOKIE["emptyform5"]))
	{
		setcookie("emptyform5", $value, time()-3600);
	}
	setcookie("wrongform5", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform5"]))
	{
		setcookie("emptyform5", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform5"]))
	{
		setcookie("wrongform5", $value, time()-3600);
	}
	$numValid++;
}
//form6
if(empty($_POST['form6']))
{
	if(isset($_COOKIE["wrongform6"]))
	{
		setcookie("wrongform6", $value, time()-3600);
	}
	setcookie("emptyform6", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form6']))
{
	if(isset($_COOKIE["emptyform6"]))
	{
		setcookie("emptyform6", $value, time()-3600);
	}
	setcookie("wrongform6", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform6"]))
	{
		setcookie("emptyform6", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform6"]))
	{
		setcookie("wrongform6", $value, time()-3600);
	}
	$numValid++;
}
//form7
if(empty($_POST['form7']))
{
	if(isset($_COOKIE["wrongform7"]))
	{
		setcookie("wrongform7", $value, time()-3600);
	}
	setcookie("emptyform7", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form7']))
{
	if(isset($_COOKIE["emptyform7"]))
	{
		setcookie("emptyform7", $value, time()-3600);
	}
	setcookie("wrongform7", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform7"]))
	{
		setcookie("emptyform7", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform7"]))
	{
		setcookie("wrongform7", $value, time()-3600);
	}
	$numValid++;
}
//form8
if(empty($_POST['form8']))
{
	if(isset($_COOKIE["wrongform8"]))
	{
		setcookie("wrongform8", $value, time()-3600);
	}
	setcookie("emptyform8", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form8']))
{
	if(isset($_COOKIE["emptyform8"]))
	{
		setcookie("emptyform8", $value, time()-3600);
	}
	setcookie("wrongform8", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform8"]))
	{
		setcookie("emptyform8", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform8"]))
	{
		setcookie("wrongform8", $value, time()-3600);
	}
	$numValid++;
}
//form9
if(empty($_POST['form9']))
{
	if(isset($_COOKIE["wrongform9"]))
	{
		setcookie("wrongform9", $value, time()-3600);
	}
	setcookie("emptyform9", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form9']))
{
	if(isset($_COOKIE["emptyform9"]))
	{
		setcookie("emptyform9", $value, time()-3600);
	}
	setcookie("wrongform9", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform9"]))
	{
		setcookie("emptyform9", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform9"]))
	{
		setcookie("wrongform9", $value, time()-3600);
	}
	$numValid++;
}
//form10
if(empty($_POST['form10']))
{
	if(isset($_COOKIE["wrongform10"]))
	{
		setcookie("wrongform10", $value, time()-3600);
	}
	setcookie("emptyform10", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form10']))
{
	if(isset($_COOKIE["emptyform10"]))
	{
		setcookie("emptyform10", $value, time()-3600);
	}
	setcookie("wrongform10", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform10"]))
	{
		setcookie("emptyform10", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform10"]))
	{
		setcookie("wrongform10", $value, time()-3600);
	}
	$numValid++;
}
//form11
if(empty($_POST['form11']))
{
	if(isset($_COOKIE["wrongform11"]))
	{
		setcookie("wrongform11", $value, time()-3600);
	}
	setcookie("emptyform11", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form11']))
{
	if(isset($_COOKIE["emptyform11"]))
	{
		setcookie("emptyform11", $value, time()-3600);
	}
	setcookie("wrongform11", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform11"]))
	{
		setcookie("emptyform11", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform11"]))
	{
		setcookie("wrongform11", $value, time()-3600);
	}
	$numValid++;
}
//form12
if(empty($_POST['form12']))
{
	if(isset($_COOKIE["wrongform12"]))
	{
		setcookie("wrongform12", $value, time()-3600);
	}
	setcookie("emptyform12", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form12']))
{
	if(isset($_COOKIE["emptyform12"]))
	{
		setcookie("emptyform12", $value, time()-3600);
	}
	setcookie("wrongform12", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform12"]))
	{
		setcookie("emptyform12", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform12"]))
	{
		setcookie("wrongform12", $value, time()-3600);
	}
	$numValid++;
}
//form13
if(empty($_POST['form13']))
{
	if(isset($_COOKIE["wrongform13"]))
	{
		setcookie("wrongform13", $value, time()-3600);
	}
	setcookie("emptyform13", 1, time()+360);
}
else if(!ereg("^([A-Za-z]+)$", $_POST['form13']))
{
	if(isset($_COOKIE["emptyform13"]))
	{
		setcookie("emptyform13", $value, time()-3600);
	}
	setcookie("wrongform13", 2, time()+360);
}
else
{
	if(isset($_COOKIE["emptyform13"]))
	{
		setcookie("emptyform13", $value, time()-3600);
	}
	if(isset($_COOKIE["wrongform13"]))
	{
		setcookie("wrongform13", $value, time()-3600);
	}
	$numValid++;
}

if($numValid == 13)
{
	foreach($_POST as $key => $value)
	{
		if(isset($_COOKIE["empty$key"]))
		{
			setcookie("empty$key", $value, time()-3600);
		}
		if(isset($_COOKIE["wrong$key"]))
		{
			setcookie("wrong$key", $value, time()-3600);
		}
	}
	
//Set Cookies
	if(isset($_POST['form1'])) {
        setcookie("form1", $_POST['form1'], time()+360);
    }
    if(isset($_POST['form2'])) {
        setcookie("form2", $_POST['form2'], time()+360);
    }
    if(isset($_POST['form3'])) {
        setcookie("form3", $_POST['form3'], time()+360);
    }
    if(isset($_POST['form4'])) {
        setcookie("form4", $_POST['form4'], time()+360);
    }
    if(isset($_POST['form5'])) {
        setcookie("form5", $_POST['form5'], time()+360);
    }
    if(isset($_POST['form6'])) {
        setcookie("form6", $_POST['form6'], time()+360);
    }
    if(isset($_POST['form7'])) {
        setcookie("form7", $_POST['form7'], time()+360);
    }
    if(isset($_POST['form8'])) {
        setcookie("form8", $_POST['form8'], time()+360);
    }
    if(isset($_POST['form9'])) {
        setcookie("form9", $_POST['form9'], time()+360);
    }
    if(isset($_POST['form10'])) {
        setcookie("form10", $_POST['form10'], time()+360);
    }
    if(isset($_POST['form11'])) {
        setcookie("form11", $_POST['form11'], time()+360);
    }
    if(isset($_POST['form12'])) {
        setcookie("form12", $_POST['form12'], time()+360);
    }
    if(isset($_POST['form13'])) {
        setcookie("form13", $_POST['form13'], time()+360);
    }
	header('Location: http://sulley.dm.ucf.edu/~elittle/DIG3930/assignment3-part1/madlib.php');
}
else
{
	header('Location: http://sulley.dm.ucf.edu/~elittle/DIG3930/assignment3-part1/page_index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validate for Redirect</title>
<style type="text/css">
  @import url("styles/styles.css");
</style>
</head>

<body>

</body>
</html>
