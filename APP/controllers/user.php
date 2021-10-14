<?php
class user extends Controller{

    private $_firstName;
    private $_lastName;
    private $_address;
    private $_gender;
    private $_userNic;
    private $_userEmail;
    private $_userMobileNumber;
    private $_userDataofBirth;

    function __construct(){
        parent::__construct();

    }
    public function index(){
       
       $this->view->render('login');
      
    }

    public function error(){
      $this->view->render("404");
    }

   

     
   

    public function login()
    {
          
                
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);  

            
            $data=[
                "username"=>trim($_POST["username"]),
                "password"=>trim($_POST["password"])
                ];

            if(!empty($data["username"])&&!empty($data["password"])){
               
               $loginUser=$this->model->login($data["username"],$data["password"]);
               if(empty($loginUser["Error"]))
               {  
                  session_start();
                  $_SESSION["NIC"]= $loginUser["NIC"];
                  $_SESSION["Fname"]= $loginUser["Fname"];
                  $_SESSION["Lname"]= $loginUser["Lname"];
                  $_SESSION["jobtype"]=$loginUser["jobtype"];
                  $_SESSION["Fname"]=$loginUser["Fname"];
                  $_SESSION["Lname"]=$loginUser["Lname"];
                  
                  

                  
                  switch($loginUser["jobtype"])
                  {

                    case "villager":
                         //get the data in Database  
                         $this->view->data = $this->model->selectData($_POST["username"]);   
                         //echo $this->data;  
                         // render the villager page  
                         $this->view->render('villagersPage');
                    break;
                     case "Wildlife Officer": $this->view->render('wildlifeofficer');
                    break;
                     case "admin": $this->view->render('admin_page');
                     break;
                    // case "veterinarian": $this->view->render('veterinarian');

                  }


               }
               else{
                 $this->view->render('login',$loginUser["Error"]);
               }
              


                     }
        }


    }


    public function logout(){
        
        session_start();
        unset($_SESSION["NIC"]);
        unset($_SESSION["jobtype"]);
        session_destroy();
        $this->view->render('login');

    }

    public function viewpage(){
        
        switch($_GET['user']){
            case 'villager':
             session_start();
             $_userNic = $_SESSION["NIC"];     
             $this->view->data = $this->model->selectData($_userNic);   

            $this->view->render('villagersPage');
        }
    }


}
