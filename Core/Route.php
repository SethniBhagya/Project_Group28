<?php
class Route{

	protected $_routes=null;  //associative array
	protected $_params=null;
    
    function __construct()
	{
		//call the _getURL()  
		$this->_getURL();
		// if check router path only have  $_routes[0]
		if(file_exists($this->_routes[0])){
            //call _loadDefaultController()
			$this->_loadDefaultController();
			  
            return exit;
        }
      
		if($this->_loadController()){
            $this->_loadcontrollermethod();
        }
	}
    //
    protected function _getURL(){
		//get url path and assign into $url
		$url  = isset($_GET['url'])? $_GET['url']: null;
		//remove '/' in last url path if it is have
		$url  = rtrim($url,'/');
		//sanitize the url  
		$url  = filter_var($url,FILTER_SANITIZE_URL);
		//assign into $_routes associative
		$this->_routes = explode('/',$url);//user/register= [0]=>user,[1]=>register
	}
	private function _loadController(){
		//get the require path file into file variable
		$file = 'APP/controllers/'.$this->_routes[0].'.php';
		//if already have
		if(file_exists($file)){
			//require the file
			require $file;
			//assign into  
			$this->_params = new $this->_routes[0];
			//load the model in each controller
			$this->_params->loadModel($this->_routes[0]);
			return true;
		}
		else{
			//if not have controller load error 
			header("Location: ../wildlifecare/user/error");
			return false;
		}
      
	}
    //Create the loadDefaultController() function for load default page(home page)
    private function _loadDefaultController(){
		//require the file 
		
		require 'APP/controllers/index.php';
		// Create the object
		$this->_params = new index();
		// Call thw function
        $this->_params->index();
	}
    //Create the loadcontrllermethod function loading method one by one 
	private function _loadcontrollermethod(){
		//get the lenght in associative array 
		$urllenght = count($this->_routes); 
		//check length greater than one   
		if($urllenght>1){
			//if method not exist then get the error page 
			if(!method_exists($this->_params, $this->_routes[1])){
				header("Location: ../user/error");
				exit;
			}
		   
		}
		// switch   $urllength and pass methods each controller page  
		switch($urllenght){
		   
		   case 4:
			   //pass methods
			   $this->_params->{$this->_routes[1]}($this->_routes[2],$this->_routes[3]);
			   break;
			  case 3:
				//pass methods
			   $this->_params->{$this->_routes[1]}($this->_routes[2]);
			   break;
			  case 2:
			  {
			  	//pass methods
			  	
			  	if(isset($_SESSION["NIC"])||$this->_routes[0]=='user'||$this->_routes[0]=='incident'||$this->_routes[0]=='villager'||$this->_routes[0]=='dashboard')
			     $this->_params->{$this->_routes[1]}();
			    else
			    	header("Location: ../user/index");

			   

			  }
			  break;
				
			  default:
			   //call index function in controller
			   $this->_params->index();
			   break;
		}
	 }
   
}