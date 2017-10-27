<?php 
	session_start();
	include_once("_settings\settings.php"); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_CSS/style.css">
</head>
<body>

	<section>
		<?php 
			$dir  = "_pages/";
			$ext = ".php";

			if (isset($_GET['page'])) {
				$page = ($_GET['page']);
			}else{
				$page = "home";
			}

			if (file_exists($dir.$page.$ext)) {
				include($dir.$page.$ext);
			}else{
				echo "Page not found";
			} 
		 ?>
	</section>

	<script type="text/javascript" src="_javascript/"></script>
</body>
</html>