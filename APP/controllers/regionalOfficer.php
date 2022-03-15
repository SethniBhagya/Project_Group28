<?php

require 'user.php';
session_start();
session_regenerate_id();

class regionalOfficer extends user{


	private $RID;

	function __construct(){
        parent::__construct();

    }

	public function addUser()
	{
		$province=$this->model->getProvince();
        $office=$this->model->getOfficeNum();
        
       //names of provinces and numbers of offices get to assiciative array for dynmaic drop downs
        $dropDownData=[
        	"province"=>$province,
        	"office"=>$office
        ];

        if(isset($_POST["provinceName"])){


        	   $district=$this->model->getDistrict($_POST["provinceName"]);

        	   foreach($district as $row)//provide district names for dynamic drop donws using ajax 
        	   	  echo "<option value=".$row["Name"].">".$row["Name"]."</option>";
   
        }


        if(isset($_POST["districtName"])){
        	   		$gnDivision=$this->model->getGN($_POST["districtName"]);
                     
        	   		 foreach($gnDivision as $row)//provide GN division names for dynamic drop donws using ajax 
        	   	          echo "<option value=".$row["name"].">".$row["name"]."</option>";

        	   	}

        if(isset($_POST["gnName"])){
        	   		 $village=$this->model->getVillage($_POST["gnName"]);

                     
        	   		  foreach($village as $row)//provide village names for dynamic drop donws using ajax 
        	   	           echo "<option value=".$row["name"].">".$row["name"]."</option>";

        	   	}
        

        
        //********this should be correct******
        // if(!empty($_SESSION["NIC"]) and $_SESSION["jobtype"]=="regional Officer"){
            
		         $this->view->render("regionalOfficer_register",$dropDownData);
             
	    //     }
	    // else{
	    // 	header("Location: ../user/index");
	    // }
	    	


		    if($_SERVER["REQUEST_METHOD"]=="POST"){

			      $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           
			      $userType=$_POST["submit"];//get user type of the form
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

                	  

                	

                


             
             			
			
			

			     if(empty($data["Error"]))//if there is no any errors then add users
			     {     
				      $success="Successfully Added";
				      switch($userType){//based on the user type adding users to the system database
					        case "grama niladhari":{
						          $specificData=[//data specific for grama niladhari
							           "province"=>trim($_POST["province"]),
				                 "district"=>trim($_POST["district"]),
				                 "gnd"=>trim($_POST["gnd"]),
							           "gic"=>trim($_POST["gic"])

						                        ];
                         
						          $allData=array_merge($data,$specificData);
						          $this->model->gnAdd($allData);//add grama niladhari's data to the database
						          $this->sendMail($data["password"],$data["email"]);//send e mail to added user
						          echo"<script>location.href='../regionalOfficer/addUser?error=".$data["Error"]."&success=".$success."';</script>";//redirect to user adding page of admin
					                             }
					        break;

					        case "wildlife officer":{
						          $specificData=[//data specific for wildlife Officer
							            "wid"=>trim($_POST["wid"]),
							            "officeNum"=>trim($_POST["ofn"])

						                       ];

						          $allData=array_merge($data,$specificData);
						          $this->model->woAdd($allData);//add wildlife officer's data to the database
						          $this->sendMail($data["password"],$data["email"]);
						          echo"<script>location.href='../regionalOfficer/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						
					                               }

					        break;

					       case "veterinarian":{
						          $specificData=[//data specific for veterinarian
							           "vid"=>trim($_POST["vid"]),
							           "officeNum"=>trim($_POST["ofn"])
							

						                        ];

						          $allData=array_merge($data,$specificData);
						          $this->model->vetAdd($allData);//add veterinarian's data to the database
						          $this->sendMail($data["password"],$data["email"]);
						          echo"<script>location.href='../regionalOfficer/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						
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
						        $this->model->vilAdd($allData);//add villagers data to the database
						        $this->sendMail($data["password"],$data["email"]);
						        echo"<script>location.href='../regionalOfficer/addUser?error=".$data["Error"]."&success=".$success."';</script>";
						
					                     }

					      break;

					      



				}
        
       
		
	       }

       }
     }


     public function viewUser(){

		// if(!empty($_SESSION["NIC"]) and $_SESSION["jobtype"]=="regional Officer"){
            
		
		    $data=$this->model->getUser();
			$this->view->render("regionalOfficer_userView",$data);
             
	                // }
	    // else{
	    // 	header("Location: ../user/index");
	    // }
	    	

	}


	public function dashboard(){
        //$district=
        //get data related to dashboard
	    $data=$this->model->getDataDashboard('polonnaruwa');
        //redirect to dashboard and pass the data
        $this->view->render('regionalOfficer_page',$data);
    }



	// public function viewUser(){

	// 	if(!empty($_SESSION["NIC"]) and $_SESSION["jobtype"]=="regional Officer"){
            
		
	// 	    $data=$this->model->getUser();
	// 		$this->view->render("regionalViewUser",$data);
             
	//                 }
	//     else{
	//     	header("Location: ../user/index");
	//     }
	    	

	// }

	//  public function dashboard(){

 //      $this->view->render('regionalDashboard');

 //    }

 //    public function placeNotice(){

 //    	$this->view->render('regionalNotice');

 //    }


 //    public function getNotice(){
 //    	$NIC=$_SESSION["NIC"];

 //    	$lastNoticeID=$this->model->getLastNoticeId($NIC);
 //    	$officeNum=$this->model->getUserOfficeNumber($NIC);
 //    	$newNoticeDetails=$this->model->getNewNoticeDetails($officeNum,$lastNoticeID);

 //    	if($newNoticeDetails!="No"){

 //    		$noticeHtml="

 //    	<div id=\"new-notice\">

 //           <img src=\"../Public/images/notice.jpg\">
 //    	   <h1>Date:".$newNoticeDetails["date"]."&emsp;Time:".$newNoticeDetails["time"]."</h1>
 //    	   <p>".$newNoticeDetails["description"]."</p>
 //    	   <audio id=\"audio\" autoplay loop  controls src=\"http://www.raypinson.com/ringtones/CarAlarm.mp3\"></audio>
 //    	   <button id=\"ok-btn\" value=".$newNoticeDetails["noticeID"]." onclick=\"endNotice(this.value)\">Okay</button>


 //    	</div>




 //    	";

 //    	echo $noticeHtml;

 //    	}

    	




 //    }


 //    public function endNotice(){

 //    	$noticeId=$_POST["noticeId"];

 //    	$this->model->updateNotice($noticeId,$_SESSION["NIC"]);
 //    	header("Location: ../regionalOfficer/dashboard");

 //    }

}