<?php
	include('classes/class-form.php');
	
	$target = '?page=formProcessor';
	$form = new Form($target);
	$form->addCaption('Pastettava:');
	$form->addTextarea('pasted');
	$form->addCaption('Tagit:');
	$form->addTextInput('tags');
	$form->addSubmit('pastedSubmit', 'Add');
	$form->ready();
	
?>