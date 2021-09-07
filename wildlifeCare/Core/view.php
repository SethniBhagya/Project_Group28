<?php

class view{

	public function render($view){

		$file='./APP/views/'. $view .'.php';

		if(is_readable($file)){
			require_once $file;
		}else echo "view not found";
	}
} 