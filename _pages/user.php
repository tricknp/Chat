<div id="content">
	<?php 
		$slc = mysqli_query("SELECT * FROM usuarios");
		$acc = mysqli_num_rows($slc);

		if ($acc <= 0) {
			echo "User not found";
		}else{
			while ($row = mysqli_fetch_array($slc)) {
				$name = $row['nome'];
				$user = $row['usuario'];
				$photo = $row['foto'];			
			}
		}
	 ?>

	<tr>
		<td><img src="<?php echo "$photo";?>" class="foto-user"></td>
		<td><strong><?php echo "$name";?></strong></td>
		<td><a href="?page=chat&user=<?php echo $user ?>"></a>Start</td>
	</tr>
	<hr>

	<?php }}?>

</div>
