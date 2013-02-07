<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little || Assignment3-Part2</title>
<style type="text/css">
  @import url("styles/styles.css");
</style>
</head>

<body>

<?
$orders = "assignment3-part2/orders.txt";
$acme = "assignment3-part2/acme.txt";
$farmerbob = "assignment3-part2/farmerbob.txt";
$widgets = "assignment3-part2/widgets.txt";
$errors = "assignment3-part2/errors.txt";

if($_POST["files"] == 1)
{
$contents = file_get_contents($orders);
	$order_array = explode(",",$contents);
	print "<pre>";
	print_r($order_array);
	print "</pre>";
}
else if($_POST["files"] == 2)
{
$contents = file_get_contents($acme);
	$acme_array = explode(",",$contents);
	print "ACME_ARRAY<pre>";
		print_r($acme_array);
	print "</pre>";
}
else if($_POST["files"] == 3)
{
$contents = file_get_contents($widgets);
	$widget_array = explode(",",$contents);
	print "WIDGET_ARRAY<pre>";
		print_r($widget_array);
	print "</pre>";
}
else if($_POST["files"] == 4)
{
$contents = file_get_contents($farmerbob);
	$farmerbob_array = explode(",",$contents);
	print "FARMERBOB_ARRAY<pre>";
		print_r($farmerbob_array);
	print "</pre>";
}
else if($_POST["files"] == 5)
{
$contents = file_get_contents($errors);
	$error_array = explode(",",$contents);
	print "ERROR_ARRAY<pre>";
		print_r($error_array);
	print "</pre>";
}
else
{
	print "...poop!";
}

?>

<div id="backform">
	<form name="fileSelector" method="post" action="assignment3-part2/page_index.php">
    	<input name="backBtn" type="submit" value="Go Back" />
    </form>
</div>
</body>
</html>
