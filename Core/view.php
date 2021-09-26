<?php

class view{

	    public $data;

		function __construct(){ 
		}
	
		function render($viewName){
			require 'App/views/'.$viewName.'.php';
		}

	
} 