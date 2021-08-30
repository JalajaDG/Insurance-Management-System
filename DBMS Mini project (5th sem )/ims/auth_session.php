<?php
    session_start();
	 error_reporting(0);
    if(!isset($_SESSION["username"])) {
		
        header("Location: login.php");
        exit();
    }
	
?>