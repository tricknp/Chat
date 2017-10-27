
<div id="content">

	<form action="" method="POST" enctype="multipart/form-data">
		
		<label>User</label>
		<p><input type="text" name="user" id="user" placeholder="Username"></p>

		<label>Password</label>
		<p><input type="password" name="password" id="password" placeholder="********"></p>

		<p><input type="submit" name="enter" value="Enter"></p>
		<input type="hidden" name="env" value="login">
	</form>

	<?php 
		if (isset($_POST[env]) && $_POST['env'] == "login") {
			$user = $_POST['user'];
			$pass = $_POST['password'];

			if (empty($user) || empty($pass)) {
				echo "<code>Complete all fields</code>";
			}else{
				$query = "SELECT * FROM users WHERE usuario = '$user' AND senha = '$pass'";
				$result = mysql_query($query);
				$search = mysql_num_rows($result);
				$line =  mysql_fetch_assoc($result);

				if (search > 0 ) {
					$_SESSION['nome'] = $line['nome'];
					$_SESSION['usuario'] = $line['usuario'];
					echo '<meta http-equiv="Refresh" content=1; href="?page=users">';
				}else{
					echo "<code>Invalid username or password.</code>";
				}
			}
		}
	 ?>

</div>