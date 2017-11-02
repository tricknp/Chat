<div id="content">
	
	<div id="list"></div>
	<hr>

	<form id="form-chat" action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="msg" id="msg" placeholder="your message...">
		<span>
			<input type="submit" value="&rang;&rang;&rang;">
			<input type="hidden" name="env" value="envMsg" id="env">
		</span>
	</form>

	<?php 
		if (isset($_POST['env']) && $_POST['env'] == "envMsg") {
			$msg = $POST['msg'];
			$id_for = $_GET['usuario'];
			$id_of = $currentUser;

			if (empty($msg)) {
				echo "<code>Enter a message</code>";
			}else{
				if (mysqli_query("INSERT INTO mensagens (id_de, id_para, mensagens) VALUES ('$id_of', '$id_for', '$msg')")) {
				}else{
					echo "<code> Error: msg not sent.</code>";
				}
			}
		}
	 ?>
	<br>
	
</div>
