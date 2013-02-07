<?
    session_start();
    
    if(!$_SESSION['logged_in']) {
        print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
    } else {
?>

<?
    include "db_connect.php";
    
	print ('<p>Click here to logout: <a href="logout.php">logout.php</a></p>');
    $delete_query = "DELETE FROM assignment4_part2";
    $delete_result = mysql_query($delete_query) or die("DELETE failed");
    
    $master_file = file_get_contents("assignment4-part2/orders.txt");
            
    $master_array = split("[,]", $master_file);
    
    foreach ($master_array as $value) {
        if(ereg("^([ACMEacme]{3})([0-9]+)([Z])$", $value)) {
            $acme_array[] = $value;
        }
        else if(ereg("^([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1][0-9][0-9][0-9]|2000)([a-z]{5})", $value)) {
            $widget_array[] = $value;
        }
        else if(ereg("^(B)(\-)([A-Za-z0-9]+)(\-)(OB)$", $value)) {
            $bob_array[] = $value;
        }
        else {
            $error_array[] = $value;
        }
    }
    
    foreach($acme_array as $value) {
        $insert_query = "INSERT INTO assignment4_part2(order_id, company_id, order_update_date)
                         VALUES ('".$value."', 'ACME', CURRENT_TIMESTAMP)";
        $insert_result = mysql_query($insert_query) or die("INSERT failed");
    }
    foreach($widget_array as $value) {
        $insert_query = "INSERT INTO assignment4_part2(order_id, company_id, order_update_date)
                         VALUES ('".$value."', 'Widgets Incorporated', CURRENT_TIMESTAMP)";
        $insert_result = mysql_query($insert_query) or die("INSERT failed");
    }
    foreach($bob_array as $value) {
        $insert_query = "INSERT INTO assignment4_part2(order_id, company_id, order_update_date)
                         VALUES ('".$value."', 'Farmer Bob\'s Tractor Company', CURRENT_TIMESTAMP)";
        $insert_result = mysql_query($insert_query) or die("INSERT failed");
    }
    foreach($error_array as $value) {
        $insert_query = "INSERT INTO assignment4_part2(order_id, company_id, order_update_date)
                         VALUES ('".$value."', 'Errors', CURRENT_TIMESTAMP)";
        $insert_result = mysql_query($insert_query) or die("INSERT failed");
    }
?>

<? mysql_close($connect); ?> 

<? } ?>