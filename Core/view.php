<?php

class view{

		function __construct(){ 
		}
	
		function render($viewName,$data=""){
			require 'App/views/'.$viewName.'.php';
		}
	
} 