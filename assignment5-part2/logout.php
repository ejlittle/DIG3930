<?
    session_start();

    if(isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
    }
    
    if(isset($_SESSION['logged_in_user'])) {
        unset($_SESSION['logged_in_user']);
    }
    
    header("Location: login.php");
?> 