<?
	session_start();
    
    if(!$_SESSION['logged_in']) {
        header ("Location: login.php");
    } else {
	
	print ('<p>Click here to logout: <a href="logout.php">logout.php</a></p>');
    include "db_connect.php";
?>

<?
	function update_rss()
	{
		$rss_file = "orders.xml";
		$rss = file_get_contents($rss_file);
    
		$exploded_original = explode("</channel>", $rss);
		$rss_start = $exploded_original[0];
		$rss_end = "</channel>".$exploded_original[1];
		
		if($_POST['confirmDelete'])
		{
			$rss_query = "SELECT * FROM assignment4_part2 WHERE order_id='".$_SESSION['selected_order_id']."'";
			$rss_result = mysql_query($rss_query) or die("RSS Select Query Failed");
			
			while($row = mysql_fetch_assoc($rss_result))
			{
				$entered_title = $row['order_id'];
				$entered_description = $row['company_id']."s order ".$row['order_id']." was deleted at ".date('F j, Y, g:i a').".";
				$new_item = "<item>\n\t<title>".$entered_title."</title>\n\t<description>".$entered_description."</description>\n\t<link>http://www.ejlittle.com</link>\n</item>\n";
				$updated_rss = $rss_start.$new_item.$rss_end;
			}
		}
		else if($_POST['confirmInsert'])
		{
			$rss_query = "SELECT * FROM assignment4_part2 WHERE order_id='".$_POST['insert_order']."'";
			$rss_result = mysql_query($rss_query) or die("RSS Select Query Failed");
			
			while($row = mysql_fetch_assoc($rss_result))
			{
				$entered_title = $row['order_id'];
				$entered_description = "Order ID ".$row['order_id']." was added to ".$row['company_id']."s orders at ".$row['order_update_date'].".";
				$new_item = "<item>\n\t<title>".$entered_title."</title>\n\t<description>".$entered_description."</description>\n\t<link>http://www.ejlittle.com</link>\n</item>\n";
				$updated_rss = $rss_start.$new_item.$rss_end;
			}
		}
		//print "<pre>".htmlentities($updated_rss)."</pre>";
		file_put_contents($rss_file, $updated_rss);
	}
	
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
						print "Update/Delete - <input type='radio' name='update' value='".$row['order_id']."'><br /><br />";
                    }
					
					print "<input type='submit' name='updateOrder' value='UPDATE'><br />";
					print "<input type='submit' name='insertOrder' value='INSERT'><br />";
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
						print "order_id: ".$row['order_id']."<input type='text' name='update_order'><br />";
                        print "order_update_date: ".$row['order_update_date']."<br /><br />";
					}
					print '<input type="submit" name="confirmUpdate" value="CONFIRM UPDATE">';
					print '</form>';
				}
				
				else if($_POST['deleteOrder'])
				{
					print '<form method="post" action="">';
					
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
					print '<input type="submit" name="confirmDelete" value="CONFIRM DELETE">';
					print '</form>';
				}
				
				else if($_POST['insertOrder'])
				{
					print ('<form method="post" action="">');
					print ('company_id: '.'<input type="text" name="insert_company" /><br />');
					print ('order_id: '.'<input type="text" name="insert_order" /><br />');
					print ('<input type="submit" name="confirmInsert" value="CONFIRM INSERT">');
				}
				
				else if($_POST['confirmUpdate'])
				{
					if(!empty($_POST['update_name']))
					{
						$select_query = "UPDATE assignment4_part2 SET company_id='".$_POST['update_name']."', order_id='".$_POST['update_order']."', order_update_date=now() WHERE order_id='".$_SESSION['selected_order_id']."'";
						$select_result = mysql_query($select_query, $connect) or die("update query failed");
						print 'company_id successfully changed.<br />';
					}
				}
				
				else if($_POST['confirmDelete'])
				{
					update_rss();
					
					$select_query = "DELETE FROM assignment4_part2 WHERE order_id='".$_SESSION['selected_order_id']."'";
					$select_result = mysql_query($select_query, $connect) or die("Delete Query Failed");
					
					print 'Order successfully deleted.<br /><br />';
					

				}
				
				else if($_POST['confirmInsert'])
				{
					$insert_query = "INSERT INTO assignment4_part2(order_id, company_id) VALUES ('".$_POST['insert_order']."', '".$_POST['insert_company']."')";
					$insert_result = mysql_query($insert_query, $connect) or die("Insert Query Failed");
					
					print 'Order successfully inserted.<br /><br />';
					
					update_rss();
				}
				
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