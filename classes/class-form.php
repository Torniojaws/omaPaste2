<?php

	class Form {
		private $target;
		private $html;
		private $formIsReady;
		
		public function __construct($target=null) {
			$this->target = $target;
			$this->html = '<form action="' . $this->target . '" method="post">' . PHP_EOL;
		}
		
		public function addCaption($caption) {
			if($this->formIsReady == false) {
				$this->html .= "\t".'<p>' . $caption . '</p>' . PHP_EOL;
			}
		}
		
		public function addTextInput($name, $sessionName=null) {
			if($this->formIsReady == false) {
				$this->html .= "\t".'<input type="text" name="' . $name . '" value="' . $sessionName . '" />' . PHP_EOL;
			}
		}
		
		public function addHiddenInput($name, $value) {
			if($this->formIsReady == false) {
				$this->html .= "\t".'<input type="hidden" name="' . $name . '" value="' . $value . '" />' . PHP_EOL;
			}
		}
		
		public function addPasswordInput($name) {
			if($this->formIsReady == false) {
				$this->html .= "\t".'<input type="password" name="' . $name . '" />' . PHP_EOL;
			}
		}
		
		public function addTextarea($name, $sessionMsg=null) {
			if($this->formIsReady == false) {
				$this->html .= "\t".'<textarea name="' . $name . '">' . $sessionMsg . '</textarea>' . PHP_EOL;
			}
		}
		
		public function addSubmit($name, $value) {
			if($this->formIsReady == false) {
				$this->html .= "\t".'<br /><input type="submit" name="' . $name . '" value="' . $value . '" />' . PHP_EOL;
			}
		}
		
		public function ready() {
			$this->html .= '</form>' . PHP_EOL;
			$this->formIsReady = true;
			echo $this->html;
		}
	}
	
?>