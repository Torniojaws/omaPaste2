<?php

	class Page {
		private $pageTitle;
		private $cssFile;
		private $pageContentFile;
		private $template;
		
		public function __construct($pageTitle=null, $cssFile=null, $template) {
			$this->pageTitle = $pageTitle;
			$this->cssFile = $cssFile;
			$this->pageContentFile = $pageTitle . ".php";
			$this->template = $template;
		}
	
		public function display() {
			include($this->template . 'page.php');
		}
	}
	
?>