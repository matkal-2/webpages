<?php 	
switch($data['color_theme']){
	case 'red':
		echo '<link rel="stylesheet" href="/css/red.css">
		';
		break;
	case 'green':
		echo '<link rel="stylesheet" href="/css/green.css">
		';
		break;
	case 'blue':
		echo '<link rel="stylesheet" href="/css/blue.css">
		';
		break;
	case $this->getColorTheme():
		echo '<link rel="stylesheet" href="/css/grey.css">
		';
		break;
}