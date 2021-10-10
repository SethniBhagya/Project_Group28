<?php
include "user.php";
class wildlifeofficer extends user 
{

    function __construct()
    {
        parent::__construct();      
    }


    public function index(){
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('wildlifeofficer');
    }
 
    public function viewProfile(){
        session_start();
        $this->view->data=$this->model->selectData($_SESSION["NIC"]);

        $this->view->render('wildlifeofficer_view_profile',$this->view->data);
      
    }
    public function editProfile(){
        session_start();
        $this->view->data=$this->model->selectData($_SESSION["NIC"]);

        $this->view->render('wildlifeofficer_edit_profile',$this->view->data);
    }
    public function updateProfile(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
			$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            session_start();
         
           
			if(isset($_POST["save"])){
                $data=[
				
                    "fName"=>trim($_POST["fname"]),
                    "lName"=>trim($_POST["lname"]),
                    //"nic"=>trim($_POST["nic"]),
                   // "gender"=>trim($_POST["gender"]),
                    "dob"=>trim($_POST["dob"]),
                    "address"=>trim($_POST["address"]),
                    "mob"=>trim($_POST["mobileNo"]),
                    
                   
                    // "village"=>trim($_POST["village"]),
                   
                    "email"=>trim($_POST["email"]),
                    "office_address"=>trim($_POST["office_address"]),
                
                
    
                ];
                $update_result=$this->model->updateData($_SESSION["NIC"],$data);
                if (empty($update_result[0]) && empty($update_result[1]))
                {
                   
                    $this->view->data=$this->model->selectData($_SESSION["NIC"]);
                    $this->view->data[0]['message']="succcessfully updated";
                    $this->view->render('wildlifeofficer_view_profile',$this->view->data);

                  
               
                }
                else{
                    $this->view->data=$this->model->selectData($_SESSION["NIC"]);
                    $this->view->data[0]['message']="fail updating";
                    $this->view->render('wildlifeofficer_edit_profile',$this->view->data);

                }
                

               
            }
            elseif(isset($_POST["cancel"])){
                // $data=[
				
                //     "fName"=>trim($_POST["fname"]),
                //     "lName"=>trim($_POST["lname"]),
                //     //"nic"=>trim($_POST["nic"]),
                //    // "gender"=>trim($_POST["gender"]),
                //     "dob"=>trim($_POST["dob"]),
                //     "address"=>trim($_POST["address"]),
                //     "mob"=>trim($_POST["mobileNo"]),
                    
                   
                //     // "village"=>trim($_POST["village"]),
                   
                //     "email"=>trim($_POST["email"]),
                
    
                // ];
                // $this->model->updateData($_SESSION["NIC"],$data);
                $this->view->data=$this->model->selectData($_SESSION["NIC"]);
                $this->view->render('wildlifeofficer_edit_profile',$this->view->data);
             

               
            }

           
			
      

//if else ekak

   
     }
    }
    public function viewIncidents(){
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('wildlifeofficer_view_incidents');
    }
    public function viewIncidentDetails(){
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('wildlifeoffficer_view_incidents_indetail');
    }
    public function filterUsingReportCatagory(){
        $this->view->data[0]['selected'] = $_POST['report_catagory'];
        /////////////////////// do from here////////
        
    }
    public function viewDashboard(){
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('wildlifeofficer_dashboard');
    }

}

?>