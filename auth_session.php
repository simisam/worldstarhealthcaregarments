<?php
	session_start();
	if(!isset(($_SESSION["username"]))){
		header("Location: log_user.php");
		exit();
	}

?>