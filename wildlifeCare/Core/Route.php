<?php

//require "controller.php";

class Route{

	protected $routes=[];//associative array
	protected $params=[];



	public function add($url,$conAndAction){
		$this->routes[$url]=$conAndAction;
	}
   
   
   public function match($url){
   	foreach($this->routes as $x=>$y){//url=>["controller"=>"home","action"=>"welcome"]
   		if($url==$x){
   			$this->params=$y;
   			return true;
   		}

   	} return false; 
   	
   }

   public function dispatch($url){
      

      if($this->match($url)){

      	$controller=$this->params["controller"];
		$path =  './APP/controllers/'.$controller.'.php';
      	if(file_exists($path)){
			require $path;
      		$controller_obj=new $controller;
			  $action=$this->params["action"];
            
      		if(is_callable([$controller_obj,$action]))
      		{
      			$controller_obj->$action();
				$controller_obj->loadModel($this->params["controller"]);
      		}else echo"invalid action";



      	}else echo"controller not found";


      }else echo "not find url";

   }


}