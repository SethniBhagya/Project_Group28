<?php
class Route{

	protected $_routes=null;  //associative array
	protected $_params=null;
    
    function __construct()
	{
		$this->_getURL();
		if(file_exists($this->_routes[0])){
            $this->_loadDefaultController();
			//echo "home In";
            return exit;
        }
		if($this->_loadController()){
            $this->_loadcontrollermethod();
        }
	}

    protected function _getURL(){
		$url  = isset($_GET['url'])? $_GET['url']: null;
		$url  = rtrim($url,'/');
		$url  = filter_var($url,FILTER_SANITIZE_URL);
		$this->_routes = explode('/',$url);//user/register= [0]=>user,[1]=>register
	}
	private function _loadController(){
		$file = 'APP/controllers/'.$this->_routes[0].'.php';
		if(file_exists($file)){
			require $file;
			$this->_params = new $this->_routes[0];
			$this->_params->loadModel($this->_routes[0]);
			return true;
		}else{
			echo "not find url";
			return false;
		}
      
	}

    private function _loadDefaultController(){
		require 'APP/controllers/index.php';
		$this->_params = new index();
        $this->_params->index();
	}

	private function _loadcontrollermethod(){
		$urllenght = count($this->_routes); 
		if($urllenght>1){
			if(!method_exists($this->_params, $this->_routes[1])){
				echo "No  Request Method Found";
				exit;
			}
		   
		}
		switch($urllenght){
		   
		   case 4:
			   $this->_params->{$this->_routes[1]}($this->_routes[2],$this->_routes[3]);
			   break;
			  case 3:
			   $this->_params->{$this->_routes[1]}($this->_routes[2]);
			   break;
			  case 2:
			   $this->_params->{$this->_routes[1]}();
			   break;
			  default:
			   $this->_params->index();
			   break;
		}
	 }
   
}