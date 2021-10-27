<?php

require 'user.php';
session_start();
session_regenerate_id();

class admin extends user{


	private $adminId;

	function __construct(){
        parent::__construct();

    }

	public function addUser(){
        
        $province=$this->model->getProvince();
        $office=$this->model->getOfficeNum();
        

        $dropDownData=[
        	"province"=>$province,
        	"office"=>$office
        ];
        if(isset($_POST["provinceName"])){


        	   $district=$this->model->getDistrict($_POST["provinceName"]);

        	   foreach($district as $row)
        	   	  echo "<option value=".$row["Name"].">".$row["Name"]."</option>";

        	   	
         	
         	
         
        }


        if(isset($_POST["districtName"])){
        	   		$gnDivision=$this->model->getGN($_POST["districtName"]);
                     
        	   		 foreach($gnDivision as $row)
        	   	          echo "<option value=".$row["name"].">".$row["name"]."</option>";

        	   	}

        if(isset($_POST["gnName"])){
        	   		 $village=$this->model->getVillage($_POST["gnName"]);

                     
        	   		  foreach($village as $row)
        	   	           echo "<option value=".$row["name"].">".$row["name"]."</option>";

        	   	}
        

        
        
        if(!empty($_SESSION["NIC"]) and $_SESSION["jobtype"]=="admin"){
            
		$this->view->render("admin_register",$dropDownData);
             
	        }
	    else{
	    	header("Location: ../user/index");
	    }
	    	


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
				"mob"=>trim($_POST["mobile"]),
				"email"=>trim($_POST["email"]),
				"password"=>trim($_POST["password"]),
				"Error"=>""

				
			    


			];

			if(!empty($userType))
			{



				 if(strlen($data["nic"])!=10)
             	     $data["Error"]="Invalid NIC 10k nane ";
             else
             {  if(($data["nic"])[9]!="V" and ($data["nic"])[9]!="X")
                     $data["Error"]="Invalid NIC x or v nane ";
                else{
                	  if(($data["nic"])[0]!=$data["dob"][2] or ($data["nic"])[1]!=$data["dob"][3])
                	  	$data["Error"]="Invalid NIC dob aul ";
                	  else{

                	  	//checking e mail already exists
             	         if($this->model->checkMail($data["email"]))
				            $data["Error"]="E mail is already taken";
			             else{//checking mobile number already exists
				             if($this->model->checkMobile($data["mob"]))
					            $data["Error"]="Mobile number is already taken";
				            else{  //checking NIC already exists
					              if($this->model->checkNIC($data["nic"]))
						            $data["Error"]="NIC is already taken";
				}
			  }

                	  }

                	

                }


             }
             			
			
			

			if(empty($data["Error"]))
			{     
				$success="Successfully Added";
				switch($userType){
					case "grama niladhari":{
						$specificData=[
							"province"=>trim($_POST["province"]),
				            "district"=>trim($_POST["district"]),
				             "gnd"=>trim($_POST["gnd"]),
							"gic"=>trim($_POST["gic"])

						];
                         
						$allData=array_merge($data,$specificData);
						$this->model->gnAdd($allData);
						echo"<script>location.href='../admin/addUser?error=".$data["Error"]."&success=".$success."';</script>";
					}
					break;

					case "wildlife officer":{
						$specificData=[
							"wid"=>trim($_POST["wid"]),
							"officeNum"=>trim($_POST["ofn"])

						];

						$allData=array_merge($data,$specificData);
						$this->model->woAdd($allData);
						echo"<script>location.href='../admin/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						
					}

					break;

					case "veterinarian":{
						$specificData=[
							"vid"=>trim($_POST["vid"]),
							"officeNum"=>trim($_POST["ofn"])
							

						];

						$allData=array_merge($data,$specificData);
						$this->model->vetAdd($allData);
						echo"<script>location.href='../admin/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						
					}


					break;

					case "villager":{

						$specificData=[
							"province"=>trim($_POST["province"]),
				            "district"=>trim($_POST["district"]),
				             "gnd"=>trim($_POST["gnd"]),
							"village"=>trim($_POST["village"])
						];
						
						$allData=array_merge($data,$specificData);
						$this->model->vilAdd($allData);
						echo"<script>location.href='../admin/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						
					}

					break;

					case "regional officer":{

						$specificData=[
							"rid"=>trim($_POST["rid"]),
							"officeNum"=>trim($_POST["ofn"])

						];

						$allData=array_merge($data,$specificData);
						$this->model->roAdd($allData);
						echo"<script>location.href='../admin/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						


					}



				}
			}

			else
			{   
              
              
				echo"<script>location.href='../admin/addUser?error=".$data["Error"]."&success=';</script>";
               

			}

			}
            
            
		}

		
	}


	public function viewUser(){

		if(!empty($_SESSION["NIC"]) and $_SESSION["jobtype"]=="admin"){
            
		
		    $data=$this->model->getUser();
			$this->view->render("user_view",$data);
             
	                }
	    else{
	    	header("Location: ../user/index");
	    }
	    	

	}

	 public function dashboard(){

      $this->view->render('admin_page');

    }

    public function placeNotice(){

    	$this->view->render('adminNotice');

    }

    public function viewUserProfile(){
    	$this->view->render('adminViewUserProfile');
    }

}