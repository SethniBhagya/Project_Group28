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
       
    }
     
    function generateNumericOTP($n)
    {
      
      $generator = $this->userMobileNumber;
      
      $result = "";
      
      for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
      }
      
      return $result;
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
    
    public function confirmMail(){

        $this->view->render('register2');
        // $this->firstName = $_POST['fname'];
        // $this->userEmail = $_POST['email'];
        // $OTP = $this->generateNumericOTP(5);
        // $to = $this->userEmail;
        // $subject = "Registration Confirmation";
        // $txt = "Dear".$this->firstName."<br>"."OTP Code is ". $OTP ;
        // $headers = "From: wildlifecare@gmail.com";

        // if(mail($to,$subject,$txt,$headers)){
        //     echo "Check Your Mail Address";
        // }else{
        //     echo "Your Email is Wrong!!!! try to begining in Registration";
        // }//
        
        
        if(isset($_POST['submit'])){
           if($this->checkNic($_POST['nic'])){
            $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['radio'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
            }
          }

    }
}

?>