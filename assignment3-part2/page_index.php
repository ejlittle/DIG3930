<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little || Assignment 3-Part2</title>
<style type="text/css">
  @import url("styles/styles.css");
</style>
</head>

<body>

<?
$orders = "http://sulley.dm.ucf.edu/~elittle/DIG3930/assignment3-part2/orders.txt";
$acme = "/home/students/elittle/public_html/DIG3930/assignment3-part2/acme.txt";
$farmerbob = "/home/students/elittle/public_html/DIG3930/assignment3-part2/farmerbob.txt";
$widgets = "/home/students/elittle/public_html/DIG3930/assignment3-part2/widgets.txt";
$errors = "/home/students/elittle/public_html/DIG3930/assignment3-part2/errors.txt";

$contents = file_get_contents($orders);
//print $contents;

$order_array = explode(",", $contents);

$aCount = 0;
$fCount = 0;
$eCount = 0;
$wCount = 0;

foreach ($order_array as $key => $value)
{
	if(ereg("^(([A|C|M|E|a|c|m|e){3})([1-9]+)Z$)", $order_array[$key]))
	{
		$acme_array[$aCount] = $value;
		$aCount++;
	}
	else if(ereg("^([0-9]+)([a-z]{5})", $order_array[$key]))
	{
		$widget_array[$wCount] = $value;
		$wCount++;
	}
	else if(ereg("^B(-)([A-Za-z0-9]+)(-)(OB)$", $order_array[$key]))
	{
		$farmerbob_array[$fCount] = $value;
		$fCount++;
	}
	else
	{
		$error_array[$eCount] = $value;
		$eCount++;
	}
}
?>
<div id="viewform">
<form name="fileViewer" method="post" action="http://sulley.dm.ucf.edu/~elittle/DIG3930/assignment3-part2/viewer.php">
	<select name="files">
    	<option value="1">orders.txt</option>
        <option value="2">acme.txt</option>
        <option value="3">widgets.txt</option>
        <option value="4">farmerbob.txt</option>
        <option value="5">errors.txt</option>
    </select>
    <input name = "submit" type = "submit" value = "View File" />
</form>
</div>

<?
	$acme_path = implode(",",$acme_array);
	file_put_contents($acme, $acme_path);
	$widget_path = implode(",",$widget_array);
	file_put_contents($widgets, $widget_path);
	$farmerbob_path = implode(",",$farmerbob_array);
	file_put_contents($farmerbob, $farmerbob_path);
	$error_path = implode(",",$error_array);
	file_put_contents($errors, $error_path);

?>

</body>
</html>
