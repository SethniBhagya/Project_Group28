<?php

require "././includes/PHPMailer.php";
require "././includes/SMTP.php";
require "././includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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


    public function resetPasswordRequest(){

      if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["sendEmail"])){

          $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
          
          $userName=trim($_POST["userName"]);

      

        $selector=bin2hex(random_bytes(8));
        $token=random_bytes(32);
        $url="localhost/wildlifecare/user/resetPassword?selector=".$selector."&validator=".bin2hex($token)."&name=".$userName;
        $expire=date("U")+1800;
        $email=$this->model->resetPasswordStore($userName,$selector,$token,$url,$expire);
        if(!empty($email))
        {
          
          $mail=new PHPMailer(true);
          $mail->isSMTP();
          $mail->Host="smtp.gmail.com";
          $mail->SMTPAuth="true";
          $mail->SMTPSecure="tls";
          $mail->Port="25";
          $mail->Username="wildlifecareproject@gmail.com";
          $mail->Password="Wildlife123";
          $subject="Reset Your Password for Wildlife care";
          $mail->Subject=$subject;
          $mail->setFrom("wildlifecareproject@gmail.com");
          $mail->isHTML(true);
          $message="<p>We recieved a password reset request. The link to reset your password here below. If you not request please ignore this email</p>";
          $message.="<p>Here is your password reset link: <br>";
          $message.="<a href=\"".$url."\">".$url."</a></p>";


          $mail->Body=$message;
          $to=$email;
          $mail->addAddress($email);
          $haha=$mail->Send();



          
          
          

          // $headers="From: wildlifecare <wildlifecare@gmail.com>\r\n";
          // $headers.="Reply-to: wildlifecare@gmail.com\r\n";
          // $headers.="Content-type: text/html\r\n";

          
          
          header("Location: ../user/index?reset=success");



        }
        else
        {
          header("Location: ../user/index?reset=emailError");
        }
        




        }
        else{
          header("Location: ../user/index");
        }
    
        

      }
      else{
          header("Location: ../user/index");
        }
    }


    public function resetPassword(){
      $this->view->render("resetPassword");
      $selector=$_GET["selector"];
      $validator=$_GET["validator"];
      $userName=$_GET["name"];
      
     

      if(empty($selector)||empty($validator)){
        header("Location: ../user/index?resetSuc=error");
      }
      else{
        if(ctype_xdigit($selector)!==false &&ctype_xdigit($validator)!==false){
           
          

          if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST["submit"])){
              $pwd=$_POST["newPassword"];
              $conPwd=$_POST["confirmPassword"];
              if($pwd===$conPwd){
                

                if($this->model->resetPassword($userName,$pwd,$selector,$validator)){
                  header("Location: ../user/index?resetSuc=success");
                }
                else
                  header("Location: ../user/index?resetSuc=fail");

                

              }
              else{
                 header("Location: ../user/resetPassword?selector=".$selector."&validator=".$validator."&resetSuc=conpwd");

              }
            }
          }


        }
        else
           {
            header("Location: ../user/index?resetSuc=error");
            
           }

      }

      

    }

    public function editprofile(){
         
      session_start();
         $this->view->userData = $this->model->profileData( $_SESSION['NIC']);  
         $this->view->render('editProfile');
    }


}
