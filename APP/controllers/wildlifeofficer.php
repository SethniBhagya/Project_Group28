<?php
include "user.php";
class wildlifeofficer extends user 
{

    function __construct()
    {
        parent::__construct();      
    }


    public function index(){
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
                    "nic"=>trim($_POST["nic"]),
                    "gender"=>trim($_POST["gender"]),
                    "dob"=>trim($_POST["dob"]),
                    "address"=>trim($_POST["address"]),
                    
                   
                    // "village"=>trim($_POST["village"]),
                   
                    "email"=>trim($_POST["email"]),
                
    
                ];
                $this->model->updateData($_SESSION["NIC"],$data);
            };
			
      

//if else ekak

    $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('wildlifeofficer_view_profile',$this->view->data);
        }
    }

}

?>