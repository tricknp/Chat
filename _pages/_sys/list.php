<?php 
	session_start();
	include_once("../../_settings/settings.php");
	$id_de = $currentUser;
	$id_para = $_SESSION['id_para'];

	$emotes = array(":angry:", ":angry1:", ":bored:", ":bored1:", ":bored2:", ":confused:", ":confused1:", ":crying:", ":crying1:", ":embarrassed:", ":emotes:", ":happy:", ":happy1:", ":happy2:", ":happy3:", ":happy4:", ":ill:", ":inlove:", ":kissing:", ":mad:", ":nerd:", ":ninja:", ":quiet:", ":sad:", ":secret:", ":smart:", ":smyle:", ":smiling:", ":surprised:", ":surprised1:", ":suspicious:", ":suspiciou1:", ":tongueout:", ":tongueout1:", ":unhappy:", ":wink:");
       
    $images   = array("<img src=\"_images/_emotes/angry.png\" class=\"emotes-size\" title=\":angry:\">", 
        "<img src=\"_images/_emotes/angry-1.png\" class=\"emotes-size\" title=\":angry1:\">", 
        "<img src=\"_images/_emotes/bored.png\" class=\"emotes-size\" title=\":bored:\">", 
        "<img src=\"_images/_emotes/bored-1.png\" class=\"emotes-size\" title=\":bored1:\">", 
        "<img src=\"_images/_emotes/bored-2.png\" class=\"emotes-size\" title=\":bored2:\">", 
        "<img src=\"_images/_emotes/confused.png\" class=\"emotes-size\" title=\":confused:\">", 
        "<img src=\"_images/_emotes/confused-1.png\" class=\"emotes-size\" title=\":confused1:\">", 
        "<img src=\"_images/_emotes/crying.png\" class=\"emotes-size\" title=\":crying:\">", 
        "<img src=\"_images/_emotes/crying-1.png\" class=\"emotes-size\" title=\":crying1:\">", 
        "<img src=\"_images/_emotes/embarrassed.png\" class=\"emotes-size\" title=\":embarrassed:\">", 
        "<img src=\"_images/_emotes/emotes.png\" class=\"emotes-size\" title=\":emotes:\">", 
        "<img src=\"_images/_emotes/happy.png\" class=\"emotes-size\" title=\":happy:\">", 
        "<img src=\"_images/_emotes/happy-1.png\" class=\"emotes-size\" title=\":happy1:\">", 
        "<img src=\"_images/_emotes/happy-2.png\" class=\"emotes-size\" title=\":happy2:\">", 
        "<img src=\"_images/_emotes/happy-3.png\" class=\"emotes-size\" title=\":happy3:\">", 
        "<img src=\"_images/_emotes/happy-4.png\" class=\"emotes-size\" title=\":happy4:\">", 
        "<img src=\"_images/_emotes/ill.png\" class=\"emotes-size\" title=\":ill:\">", 
        "<img src=\"_images/_emotes/in-love.png\" class=\"emotes-size\" title=\":inlove:\">", 
        "<img src=\"_images/_emotes/kissing.png\" class=\"emotes-size\" title=\":kissing:\">", 
        "<img src=\"_images/_emotes/mad.png\" class=\"emotes-size\" title=\":mad:\">", 
        "<img src=\"_images/_emotes/nerd.png\" class=\"emotes-size\" title=\":nerd:\">", 
        "<img src=\"_images/_emotes/ninja.png\" class=\"emotes-size\" title=\":minja:\">", 
        "<img src=\"_images/_emotes/quiet.png\" class=\"emotes-size\" title=\":quiet:\">", 
        "<img src=\"_images/_emotes/sad.png\" class=\"emotes-size\" title=\":sad:\">", 
        "<img src=\"_images/_emotes/secret.png\" class=\"emotes-size\" title=\":secret:\">", 
        "<img src=\"_images/_emotes/smart.png\" class=\"emotes-size\" title=\":smart:\">", 
        "<img src=\"_images/_emotes/smile.png\" class=\"emotes-size\" title=\":smile:\">", 
        "<img src=\"_images/_emotes/smiling.png\" class=\"emotes-size\" title=\":smiling:\">", 
        "<img src=\"_images/_emotes/surprised.png\" class=\"emotes-size\" title=\":surprised:\">", 
        "<img src=\"_images/_emotes/surprised-1.png\" class=\"emotes-size\" title=\":surprised1:\">", 
        "<img src=\"_images/_emotes/suspicious.png\" class=\"emotes-size\" title=\":suspicious:\">", 
        "<img src=\"_images/_emotes/suspicious-1.png\" class=\"emotes-size\" title=\":suspicious1:\">", 
        "<img src=\"_images/_emotes/tongue-out.png\" class=\"emotes-size\" title=\":tongueout:\">", 
        "<img src=\"_images/_emotes/tongue-out-1.png\" class=\"emotes-size\" title=\":tongueout1:\">", 
        "<img src=\"_images/_emotes/unhappy.png\" class=\"emotes-size\" title=\":unhappy:\">", 
        "<img src=\"_images/_emotes/wink.png\" class=\"emotes-size\" title=\":wink:\">");	

    $sql = "SELECT * FROM (SELECT * FROM mensagens WHERE (id_de = '$id_de' AND id_para = '$id_para') 
    		OR (id_de = '$id_para' AND id_para = '$id_de')
    		ORDER BY id DESC LIMIT 10) sub ORDER BY id ASC";

   $result = mysqli_query($con, $sql);
   $account = mysqli_num_rows($result);

   if (account <= 0) {
    			echo "<code> You can start a talk saying Hi!</code>";
    		}else{
    			while ($row = mysqli_fetch_array($result)) {
    				$row['msg'] = str_replace($emotes, $images, $row['msg']);
    			}
    		} 		
 ?>

 <?php 
 	if ($row['id_de'] == $id_de) { ?>
 		<div align="right">
 			<p class="chat-i">
 				<?php echo $row['msg']; ?>	
 			</p>
 		</div>
 	<?}else if($row['id_de'] != $id_de) {?>
 		<div align="left">
 			<p class="chat-you">	
 				<?php echo $row['msg'];?>		
 			</p>
 		</div>
 	}
  <?}}}?>