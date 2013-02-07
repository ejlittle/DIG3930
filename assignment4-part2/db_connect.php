<?
    $connect = mysql_connect("localhost","","") or die("Connection failed");
    $selectedDatabase = mysql_select_db("",$connect) or die("Database selected failed");
?> 