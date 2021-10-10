<?php 
 include "user.php";
 class villager extends user {
    
    private $GNDivision;
    private $province;
    private $district;
 

    function __construct()
    {
        parent::__construct();      
    }


    public function index(){
    
    }

    public function register(){
        $this->view->division = $this->model->getGrmaniladariDivision();
      //  echo print_r($this->view->division);
        $this->view->data = $this->model->selectData();     
        $this->view->render('register');
        
        if(isset($_POST['submit'])){
           if($this->checkNic()){
           $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
           return true; 
           }
         }
       
    }
    function checkNic(){
        $result = $this->model->selectData();
        if(isset($_POST['submit'])){
            foreach ($result as $row){
                if($_POST['nic'] === $row['NIC'] ){  
                   
                   return false;
                 
                }

            }
           return true;
        }
    }
          
       

}

?>

