<?php
	include('classes/class-page.php');
	
	// Config
	$title = 'OmaPaste v2.0';
	$css = 'data/omaPaste.css';
	$template = 'templates/paste/';
	
	// Show the site
	$page = new Page($title, $css, $template);
	$page->display();
	
?>