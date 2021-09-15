<?php
class controller{
	function __construct(){
		$this->view= new view();
	}
	public function loadModel($modelName){
	
		$path = 'APP/models/'.$modelName.'_model.php';

		if(file_exists($path)){
			require $path;
			$className = $modelName.'_model';
			$this->model = new $className();         
		 }

	}  
}
