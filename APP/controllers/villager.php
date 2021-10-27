<?php 
 include "user.php"; 
 
 class villager extends user {
    
    private $GNDivision;
    private $province;
    private $district;
 
     //create construct function
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
        // $this->view->render('register');
        //if register form submit 
        if(isset($_GET['lang'])){
            //assign the value
            $lang = $_GET['lang'];
        }
        switch($lang){
            case 1 :
            //display villagerReportView1     
            $this->view->render('register');
            if(isset($_POST['submit'])){
                //chack  NIC is aready register or Not  
                if($this->checkNic()){
                 //call  villager_model class checkNic() function    
                $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
     
                return true; 
                }
              }
            break;
            case 2 :
            //display villagerReportView2
            $this->view->render('registersinhala');
            if(isset($_POST['submit'])){
                //chack  NIC is aready register or Not  
                if($this->checkNic()){
                 //call  villager_model class checkNic() function    
                $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
                return true; 
                }
              }
            break;
            case 3 :
            //display villagerReportView3    
            $this->view->render('registertamil');
            if(isset($_POST['submit'])){
                //chack  NIC is aready register or Not  
                if($this->checkNic()){
                 //call  villager_model class checkNic() function    
                $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
                return true; 
                }
              }
            break;
    
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
          
     function viewNotification(){
        if(isset($_GET['lang'])){
            //assign the value
            $lang = $_GET['lang'];
        }
        switch($lang){
            case 1 :
            //display villagerReportView1     
            $this->view->render('notification');
            break;
            case 2 :
            //display villagerReportView2
            $this->view->render('notificationsinhala');
            break;
            case 3 :
            //display villagerReportView3    
            $this->view->render('notificationtamil');
            break;
    
        }
     }  

}

?>

