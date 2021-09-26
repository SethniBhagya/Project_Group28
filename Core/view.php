<?php

class view{

	    public $data;

		function __construct(){ 
		}
	
		function render($viewName,$data=""){
			require 'App/views/'.$viewName.'.php';
		}

	
} 