<?php

class view{

	    public $data;

		function __construct(){ 
		}
	
		function render($viewName,$data=""){
			if(file_exists('App/views/'.$viewName.'.php'))
			   require 'App/views/'.$viewName.'.php';
		}

	
} 