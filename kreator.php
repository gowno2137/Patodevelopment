<?php
    session_start();
    
    if (!isset($_SESSION["email"])) {
        $_SESSION["url"] = "kreator.php";
        header("Location: login.php");
        exit();
    }
?>