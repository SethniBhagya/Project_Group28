<?php 
 include "user.php";
 class villager extends user {
    
    public $GNDivision;
    public $province;
    public $district;
 

    function __construct()
    {
        parent::__construct();      
    }


    public function index(){
        
    }

    public function register(){
        $this->view->render('register1');
             
        if(isset($_POST['submit'])){
          if($this->checkNic($_POST['nic'])){
           $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
             return true; 
           }
         }
   
       
    }
         
    function checkNic($result){
      if(isset($_POST['submit'])){
        $result = $this->model->selectData($_POST['nic']);
        }
      
      if($result){
           echo "Already Have";
           return false;
      }else{
           return true; 
      }
    }

}

?>