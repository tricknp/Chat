
<div id="content">
	<h1>Welcome to MyChat</h1>
	<hr class="hrHome">
	<br>

	<form action="" method="POST" enctype="multipart/form-data" class="formHome">
		
		<p>
			<label>User: </label>
			<input type="text" name="user" id="user" placeholder=" Username">
		</p>

		<p>
			<label>Password: </label>
			<input type="password" name="password" id="password" placeholder=" ********">
		</p>

		<p><input type="submit" name="enter" value="Enter" class="btnEnv"></p>
		<input type="hidden" name="env" value="login" id="env">
	</form>

	<?php 
		if (isset($_POST['env']) && $_POST['env'] == "login") {
			$user = $_POST['user'];
			$pass = $_POST['password'];

			if (empty($user) || empty($pass)) {
				echo "<code>Complete all fields</code>";
			}else{
				$query = "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass'";
				$result = mysqli_query($con, $query);
				$search = mysqli_num_rows($result);
				$line = mysqli_fetch_assoc($result);

				if ($search > 0 ) {
					$_SESSION['nome'] = $line['nome'];
					$_SESSION['usuario'] = $line['usuario'];
					echo '<meta http-equiv="Refresh" content="1; url=?page=user">';
				}else{
					echo "<code>Invalid username or password.</code>";
				}
			}
		}
	 ?>

</div>