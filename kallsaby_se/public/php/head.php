<?php 
echo '<!DOCTYPE html>
<html>
	<head>
		<title>Webpage</title>';
		
switch($data['color_theme']){
	case 'red':
		echo '<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" href="/css/red.css">
		';
		break;
	case 'green':
		echo '<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" href="/css/green.css">
		';
		break;
	case 'blue':
		echo '<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" href="/css/blue.css">
		';
		break;
	case 'grey':
		echo '<link rel="stylesheet" href="/css/main.css" >
		<link rel="stylesheet" href="/css/grey.css" media="only">
		';
		break;
}
echo '	</head>
	<body>';