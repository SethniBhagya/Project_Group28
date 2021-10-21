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
    //Create the function register 
    public function register(){
        //call villager_model class getGramaniladariDivision() function   
        $this->view->division = $this->model->getGrmaniladariDivision();
        //call villager_model class getGramaniladariDivision() function   
        $this->view->data = $this->model->selectData();     
        //display the register page 
        $this->view->render('register');
        //if register form submit 
        if(isset($_POST['submit'])){
           //chack  NIC is aready register or Not  
           if($this->checkNic()){
            //call  villager_model class checkNic() function    
           $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
           return true; 
           }
         }
       
    }
    //Create the checkNic() function  
    function checkNic(){
        //call villager_model class selectData() function   
        $result = $this->model->selectData();
        //check the already the register form is submit
        if(isset($_POST['submit'])){
            //check the Nic
            foreach ($result as $row){
                //if have reurn false
                if($_POST['nic'] === $row['NIC'] ){  
                    return false;
                 }
            }
            //if not return true 
           return true;
        }
    }
          
       

}

?>

