<?php
include("php/head.php");
readfile("html/menu_bar.html");
include("php/menu_bar.php");
$user_info = $data['user_info'];
$email = $user_info['email'];
$color_theme = $user_info['user_color_theme'];

echo '
	<div class="body-background">
		<div class="body-content">
			
		</div>
	</div>';


readfile("html/foot_bar.html");
readfile("html/body.html");
readfile("html/foot.html");