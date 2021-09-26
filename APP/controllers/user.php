<?php
class user extends Controller{

    private $firstName;
    private $lastName;
    private $address;
    private $gender;
    private $userNic;
    private $userEmail;
    private $userMobileNumber;
    private $userDataofBirth;

    function __construct(){
        parent::__construct();

    }
    function index(){
       // $this->view->id = false;
       // $user = $this->model->getData();
       // print_r($user);
    //    $this->view->render('user');
    //    if(isset($_POST['submit'])){
            // $this->view->users = $this->model->getData();
            // $this->view->render('user');

     //    }

      $this->view->render('login');
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
                  switch($loginUser["jobtype"])
                  {
                    case "villager": $this->view->render('villager',$loginUser);
                    break;
                    // case "wildlifeofficer": $this->view->render('wildlifeofficer');
                    // break;
                    // case "admin": $this->view->render('admin');
                    // break;
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
        session_destroy();
        $this->view->render('login');

    }


}
