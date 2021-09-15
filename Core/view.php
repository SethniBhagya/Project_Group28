<?php

class view{

		function __construct(){ 
		}
	
		function render($viewName){
			require 'App/views/'.$viewName.'.php';
		}
	
} 