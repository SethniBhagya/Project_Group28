<?php

class admin extends Controller{

	private $adminId;

	function __construct(){
        parent::__construct();

    }

	public function addUser(){

		$this->view->render("admin_register");

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

			$userType=$_POST["submit"];
			$data=[
				
				"fName"=>trim($_POST["fname"]),
				"lName"=>trim($_POST["lname"]),
				"nic"=>trim($_POST["nic"]),
				"gender"=>trim($_POST["gender"]),
				"dob"=>trim($_POST["dob"]),
				"address"=>trim($_POST["address"]),
				"province"=>trim($_POST["province"]),
				"district"=>trim($_POST["district"]),
				"gnd"=>trim($_POST["gnd"]),
				// "village"=>trim($_POST["village"]),
				"mob"=>trim($_POST["mobile"]),
				"email"=>trim($_POST["email"]),
				"password"=>trim($_POST["password"]),
				"emailError"=>""
				
			    


			];

			//checking e mail already exists
			if($this->model->checkMail($data["email"]))
				$data["emailError"]="E mail is already taken";
			

			if(empty($data["emailError"]))
			{
				switch($userType){
					case "grama niladhari":{
						$specificData=[
							"gic"=>trim($_POST["gnd"])

						];

						$allData=array_merge($data,$specificData);
						$this->model->gnAdd($allData);
					}

					case "wildlife officer":{
						$specificData=[
							"wid"=>trim($_POST["wid"]),
							"officeNum"=>trim($_POST["on"])

						];

						$allData=array_merge($data,$specificData);
						$this->model->woAdd($allData);
					}
				}
			}
		}

		
	}
}