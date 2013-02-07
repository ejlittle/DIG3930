<?
	session_start();
    
    if(!$_SESSION['logged_in']) {
        print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
    } else {
	
	print ('<p>Click here to logout: <a href="logout.php">logout.php</a></p>');
    include "db_connect.php";
?>

<?
	if($_SESSION['logged_in_security_level'] == "admin")
	{
?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<title>ASSIGNMENT 4 PART 2 - VIEWER</title>
				<style type="text/css">@import url("styles/styles.css");</style>
			</head>
			
			<body>
				<div id="content-container">
					<div id="content">
						<form method="post" action="">
							<select name="get_data">
								<option value="acme">ACME Orders</option>
								<option value="widgets">Widget Orders</option>
								<option value="farmerbob">Farmer Bob Orders</option>
								<option value="errors">Errors</option>
							</select>
							<input type="submit" name="submit" value="Read File" />
						</form>
<?
                if($_POST['submit']) 
				{					
					print '<form method="post" action="">';
					$orderCounter=0;
					
                    if($_POST['get_data'] == "acme") 
					{
                        $company_id_to_retrieve = "ACME";
						//$_SESSION['read_file'] = $_POST['acme'];
                    } 
					else if($_POST['get_data'] == "widgets") 
					{
                        $company_id_to_retrieve = "Widgets Incorporated";
						//$_SESSION['read_file'] = $_POST['widgets'];
                    } 
					else if($_POST['get_data'] == "farmerbob") 
					{
                        $company_id_to_retrieve = "Farmer Bob\'s Tractor Company";
						//$_SESSION['read_file'] = $_POST['farmerbob'];
                    } 
					else if($_POST['get_data'] == "errors") 
					{
                        $company_id_to_retrieve = "Errors";
						//$_SESSION['read_file'] = $_POST['errors'];
                    }
                    $select_query = "SELECT * FROM assignment4_part2 WHERE company_id='".$company_id_to_retrieve."'";
					$select_result = mysql_query($select_query, $connect);
                    while($row = mysql_fetch_assoc($select_result)) 
					{
                        print "company_id: ".$row['company_id']."<br />";
                        print "order_id: ".$row['order_id']."<br />";
                        print "order_update_date: ".$row['order_update_date']."<br />";
						print "Update - <input type='radio' name='update' value='".$row['order_id']."'><br /><br />";
                    }
					
					print "<input type='submit' name='updateOrder' value='UPDATE'><br />";
					
					print "<input type='submit' name='deleteOrder' value='DELETE'>";
					print "</form>";
                }//end if($_POST['submit'])
				
				else if($_POST['updateOrder'])
				{
					print '<form method="post" action="">';
					
					$select_query = "SELECT * FROM assignment4_part2 WHERE order_id='".$_POST['update']."'";
					$select_result = mysql_query($select_query, $connect) or die("select query failed");
					while($row = mysql_fetch_assoc($select_result))
					{
						$_SESSION['selected_order_id'] = $row['order_id'];
						print "company_id: ".$row['company_id']."<input type='text' name='update_name'><br />";
						print "order_id: ".$row['order_id']."<br />";
                        print "order_update_date: ".$row['order_update_date']."<br /><br />";
					}
					print '<input type="submit" name="confirmUpdate" value="SUBMIT">';
					print '</form>';
				}
				
				else if($_POST['deleteOrder'])
				{
					print '<form method="post" action="">';
					//print_r($_POST);
					
					print 'Are you sure you want to delete this entry? <br />';
					
					$select_query = "SELECT * FROM assignment4_part2 WHERE order_id='".$_POST['update']."'";
					$select_result = mysql_query($select_query, $connect) or die("select query failed");
					while($row = mysql_fetch_assoc($select_result))
					{
						$_SESSION['selected_order_id'] = $row['order_id'];
						print "company_id: ".$row['company_id']."<br />";
						print "order_id: ".$row['order_id']."<br />";
                        print "order_update_date: ".$row['order_update_date']."<br /><br />";
					}
					print '<input type="submit" name="confirmDelete" value="SUBMIT">';
					print '</form>';
				}
				
				else if($_POST['confirmUpdate'])
				{
					//print '<form method="post" action="">';
					
					if(!empty($_POST['update_name']))
					{
						$select_query = "UPDATE assignment4_part2 SET company_id='".$_POST['update_name']."' WHERE order_id='".$_SESSION['selected_order_id']."'";
						$select_result = mysql_query($select_query, $connect);
						print 'company_id successfully changed.<br />';
					}
					/*if(!empty($_POST['update_id']))
					{
						$select_query = "UPDATE assignment4_part2 SET order_id='".$_POST['update_id']."'";
						$select_result = mysql_query($select_query, $connect);
						print 'order_id successfully changed.<br />';
					}*/
					
					//print '<br /><input type="submit" name="viewOrder" value="VIEW ORDERS">';
					//print '</form>';
				}
				
				else if($_POST['confirmDelete'])
				{
					//print '<form method="post" action="">';
					
					$select_query = "DELETE FROM assignment4_part2 WHERE order_id='".$_SESSION['selected_order_id']."'";
					$select_result = mysql_query($select_query, $connect);
					
					print 'order successfully deleted.<br /><br />';
					
					//print '<input type="submit" name="viewOrder" value="VIEW ORDERS">';
					//print '</form>';
				}
				
				/*else if($_POST['viewOrder'])
				{
					//print '<form method="post" action="">';
					//print_r($_POST);
					$select_query = "SELECT * FROM assignment4_part2 WHERE order_id='".$_SESSION['read_file']."'";
					$select_result = mysql_query($select_query, $connect) or die("select query failed");
					
					while($row = mysql_fetch_assoc($select_result))
					{
						print "company_id: ".$row['company_id']."<br />";
						print "order_id: ".$row['order_id']."<br />";
                        print "order_update_date: ".$row['order_update_date']."<br /><br />";
					}
					//print '<input type="submit" name="confirmUpdate" value="SUBMIT">';
					//print '</form>';
				}*/
				
?>
				
            </div>
        </div>
    </body>
</html>

<?	
	}//end if($_SESSION == admin)
?>

<?
	if($_SESSION['logged_in_security_level'] == "customer")
	{
?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<title>ASSIGNMENT 4 PART 2 - VIEWER</title>
				<style type="text/css">@import url("styles/styles.css");</style>
			</head>
			
			<body>
				<div id="content-container">
					<div id="content">
						<form method="post" action="">
							<select name="get_data">
								<? if($_SESSION['logged_in_user'] == "acme") { ?> <option value="acme">ACME Orders</option><? } ?>
								<? if($_SESSION['logged_in_user'] == "widgets") { ?><option value="widgets">Widget Orders</option><? } ?>
								<? if($_SESSION['logged_in_user'] == "bob") { ?><option value="farmerbob">Farmer Bob Orders</option><? } ?>
								<option value="errors">Errors</option>
							</select>
							<input type="submit" name="submit" value="Read File" />
						</form>
<?
                if($_POST['submit']) 
				{
                    if($_POST['get_data'] == "acme") 
					{
                        $company_id_to_retrieve = "ACME";
                    } 
					else if($_POST['get_data'] == "widgets") 
					{
                        $company_id_to_retrieve = "Widgets Incorporated";
                    } 
					else if($_POST['get_data'] == "farmerbob") 
					{
                        $company_id_to_retrieve = "Farmer Bob\'s Tractor Company";
                    } 
					else if($_POST['get_data'] == "errors") 
					{
                        $company_id_to_retrieve = "Errors";
                    }
                    $select_query = "SELECT * FROM assignment4_part2 WHERE company_id='".$company_id_to_retrieve."'";
                    $select_result = mysql_query($select_query) or die("SELECT failed");
                    while($row = mysql_fetch_assoc($select_result)) 
					{
                        print "company_id: ".$row['company_id']."<br />";
                        print "order_id: ".$row['order_id']."<br />";
                        print "order_update_date: ".$row['order_update_date']."<br /><br />";
                    }
                }//end if($_POST)			
?>
            </div>
        </div>
    </body>
</html>

<?	
	}//end if($_SESSION == customer)
?>

<? mysql_close($connect); ?> 

<? } ?>