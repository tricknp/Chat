<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "chat";

	//connection start
	$con = mysqli_connect($dbhost, $dbuser, $dbpass) or print(mysql_error());
	mysqli_select_db($con, $dbname);

	if (!$con) {
		echo "Error: Database not found";
	}

	//other configs
	date_default_timezone_set('America/Sao_Paulo');
	$globalData = date("d/m/Y");
	$globalHour = date("H:i");
	$showName = false;

	if (isset($_SESSION['user']) && $_SESSION['user'] != null) {
		$currentName = $_SESSION['name'];
		$currentUser = $_SESSION['user'];
		$showName = true;
	}

 ?>
