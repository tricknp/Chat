<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "chat";

	//connection start
	$con = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	mysql_select_db($dbname, $con);

	if (!$con) {
		echo "Error: Database not found";
	}

	//other configs
	date_default_timezone_set('America/Sao_Paulo');
	$globalData = date("d/m/Y");
	$globalHour = date("H:i");
	$showName = false;

	if (isset($_SESSION['dbuser']) && $_SESSION['dbuser'] != null) {
		$currentName = $_SESSION['dbname'];
		$currentUser = $_SESSION['dbuser'];
		$showName = true;
	}

 ?>