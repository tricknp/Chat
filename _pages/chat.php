<?php 
	$_SESSION['id_para'] = $_GET['user'];
 ?>

<div id="content">
	
	<div id="list"></div>
	<hr>
	<br>
	<form id="form-chat" action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="msg" id="msg" placeholder="your message...">
		<span>
			<input type="submit" value="&rang;&rang;&rang;" class="btnRang">
			<input type="hidden" name="env" value="envMsg" id="envMsg">
		</span>
	</form>

	<?php 
		if (isset($_POST['env']) && $_POST['env'] == "envMsg") {
			$msg = $_POST['msg'];
			$id_para = $_GET['user'];
			$id_de = $currentUser;

			if (empty($msg)) {
				echo "<code>Enter a message</code>";
			}else{
				if (mysqli_query($con, "INSERT INTO mensagens (id_de, id_para, mensagens) VALUES ('$id_de', '$id_para', '$msg')")) {
				}else{
					echo "<code> Error: msg not sent.</code>";
				}
			}
		}
	 ?>
	<br>
	
</div>