<?
    include "db_connect.php";
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
                if($_POST['submit']) {
                    if($_POST['get_data'] == "acme") {
                        $company_id_to_retrieve = "ACME";
                    } else if($_POST['get_data'] == "widgets") {
                        $company_id_to_retrieve = "Widgets Incorporated";
                    } else if($_POST['get_data'] == "farmerbob") {
                        $company_id_to_retrieve = "Farmer Bob\'s Tractor Company";
                    } else if($_POST['get_data'] == "errors") {
                        $company_id_to_retrieve = "Errors";
                    }
                    $select_query = "SELECT * FROM assignment4_part2 WHERE company_id='".$company_id_to_retrieve."'";
                    $select_result = mysql_query($select_query) or die("SELECT failed");
                    while($row = mysql_fetch_assoc($select_result)) {
                        print "company_id: ".$row['company_id']."<br />";
                        print "order_id: ".$row['order_id']."<br />";
                        print "order_update_date: ".$row['order_update_date']."<br /><br />";
                    }
                }
?>
            </div>
        </div>
    </body>
</html>

<? mysql_close($connect); ?> 