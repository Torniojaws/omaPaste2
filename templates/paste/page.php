<!doctype html>
<html lang="en">
<head>
	<title><?php echo $this->pageTitle; ?></title>
	<link href="<?php echo $this->cssFile; ?>" rel="stylesheet" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<meta charset="UTF-8" />
</head>
<body>
	<header>
		<h1><?php echo $this->pageTitle; ?></h1>
		<?php include($this->template . "newDataForm.php"); ?>
		<?php include($this->template . "tagFilter.php"); ?>
	</header>
	<div>
		<?php include($this->template . "showPastedItems.php"); ?>
	</div>
</body>
</html>