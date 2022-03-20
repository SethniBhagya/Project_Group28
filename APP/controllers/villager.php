<?php 
  
 
 require "user.php"; //Call Parent Class

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception; 

 require "././Library/PHPMailer.php";
 require "././Library/SMTP.php";
 require "././Library/Exception.php";
  
  
 class villager extends user {

    
    
    private $GNDivision; // Gramaniladari DevisionName
    private $province;  // Province Name
    private $district;  // District Name
 
     //create construct function
     function __construct()
     {
         parent::__construct();
     }
      
    public function index(){
    
    }
    public function sendEmail($email,$sub,$headline ){
            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth =  true ;
            $mail->Username = 'wildlifecareproject@gmail.com';
            $mail->Password = 'Wildlife123';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $subject = $sub;
            $mail->Subject = $subject;
            $mail->setFrom('wildlifecareproject@gmail.com','WildlifeCare');
            $mail->isHTML(true);
            $message = "<h1> $headline  </h1>";

            $message = "<h1> $headline  </h1>
                         <p> Thank You </p>
                         <p> 
                            Address :<br>
                            No18<br>
                            Kandy Road<br>
                            Pilimathalawa <br>
                            Contact More Information<br>
                                <a>wildlifecareproject@gmail.com<a>  
                            <p>";
            $mail->Body = $message;
            $mail->addAddress($email);
            if(!$mail->Send()){
                echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
            } else{
                echo 'Message has been sent';
             }
    }
    
    public function checkAlerStatus($NIC){
       
         $statusReview  = $this->model->getAlerStatus($NIC);  
         foreach($statusReview as $row){ 
           $status = $row['alertstatus'];
         }  
         return $status;
    }
    public function checkNotificationStatus($NIC){
       
      $statusReview  = $this->model->getNotificationStatus($NIC);  
      foreach($statusReview as $row){ 
        $numberofnotification = $row['numberofnotification'];
      }  
      return $numberofnotification;
    }
    //Create the function register 
    public function register(){
 
        $this->view->division = $this->model->getGrmaniladariDivision();
        //call villager_model class getGramaniladariDivision() function   
        $this->view->data = $this->model->selectData();     
        //display the register page 
        // $this->view->render('register');
        //if register form submit 
      
        if(isset($_GET['lang'])){
            //assign the value
            //get the value for language select
            $lang = $_GET['lang'];
        }
        //Switch the view when select the language
        switch($lang){
            case 1 :
            //display villagerReportView1     
            $this->view->render('register');
            //Chack the user click the sunbmit button
            if(isset($_POST['submit'])){
                //chack  NIC is aready register or Not  
                if($this->checkNic()){
                 //call  villager_model class checkNic() function    
                $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['psw'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
           //     $this->sendEmail($_POST['email'],"Registration is Successfully","Gramaniladhari Accept Your Registration Soon has Possible" );
                return true; 
                }
              }
              case 2 :
              if(isset($_POST['submit'])){
                //chack  NIC is aready register or Not  
                if($this->checkNic()){
                 //call  villager_model class checkNic() function    
                $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
                 return true; 
                }
              }
              case 3 :
                if(isset($_POST['submit'])){  
                //chack  NIC is aready register or Not  
                if($this->checkNic()){
                 //call  villager_model class checkNic() function    
                $this->model->insertData($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['gender'],$_POST['nic'],$_POST['password'],$_POST['email'],$_POST['tp'],$_POST['dob'],$_POST['gndivision'],$_POST['district'],$_POST['province']);
                 return true; 
                }
              }
            break;
    
            default:
            //display Error message
            header('Location: ../user/error'); 
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
        
     
    public function  editProfile()
    {
      session_start();
      $this->view->userData = $this->model->profileData($_SESSION['NIC']);
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      }
      $province = $this->model->getProvince($_SESSION['NIC']);   
      foreach ($province as $row){
         $villagerProvince =  $row['province'];  
      }
      $this->view->province = $villagerProvince; 
      $district = $this->model->getDistrict($_SESSION['NIC']);   
      foreach ($district as $row){
         $villagerDistrict =  $row['district'];  
      }
      $this->view->district = $villagerDistrict; 
      $GramaniladhariDivision = $this->model->getGramaniladhariDivision($_SESSION['NIC']);   
      foreach ($GramaniladhariDivision as $row){
        $villagerGramaniladhariDivision =  $row['name'];  
     }
     $this->view->GramaniladhariDivision = $villagerGramaniladhariDivision; 
     $hashPassword = $this->model->getHashPassword($_SESSION['NIC']);   
     foreach ($hashPassword as $row){
       $villagerHashPassword =  $row['userPassword'];  
    }
    $this->view->hashPassword = $villagerHashPassword;
    $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);
    $this->view->notification = $this->checkNotificationStatus($_SESSION['NIC']);
    $getPassword = $this->model->getHashPassword($_SESSION['NIC']);
    foreach( $getPassword as $row){ 
    $hashpassword = $row["userPassword"];
    }
     switch ($lang) {
        case 1:
          //display special Notice     
          $this->view->render('editProfile'); 
            if (isset($_POST['submitAlert'])) {
            $this->model->setAlerStatus($_SESSION['NIC']); 
            }
            if (isset($_POST['submit'])) {
             echo "HEllo";
           }

          break;
        case 2:
          //display special Notice     
  
          $this->view->render('editProfilesinhala');
          if (isset($_POST['submitAlert'])) {
            $this->model->setAlerStatus($_SESSION['NIC']); 
            }

          break;
        case 3:
          //display special Notice     
  
          $this->view->render('editProfiletamil');
          if (isset($_POST['submitAlert'])) {
            $this->model->setAlerStatus($_SESSION['NIC']); 
            }

          break;
      }
      // $this->view->render('editProfile');
    }
  
    function viewProfile(){
      session_start();  
        if(isset($_GET['lang'])){
            //assign the value
            $lang = $_GET['lang'];
        }
        $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);
        $this->view->notification = $this->checkNotificationStatus($_SESSION['NIC']);

        switch($lang){
            case 1 :
       
            //display villagerReportView1     
            $getName = $this->model->getName($_SESSION['NIC']);
            $getVillagerIncident = $this->model->getVillagerIncident($_SESSION['NIC']);
            $getVillagerWildElephantArrivalIncident = $this->model->getVillagerWildElephantArrivalIncident($_SESSION['NIC']);
            $getVillagerWildAnimalsDangerIncident = $this->model->getVillagerWildAnimalsDangerIncident($_SESSION['NIC']);
            $getVillagerCropDamagesIncident = $this->model->getVillagerCropDamagesIncident($_SESSION['NIC']);
            $getVillagerIncidentacceptwildlifeOfficer = $this->model->getVillagerIncidentacceptwildlifeOfficer($_SESSION['NIC']);
            $getVillagerIncidentacceptGramaseweka = $this->model->getVillagerIncidentacceptGramaseweka($_SESSION['NIC']);
            $getlastincident = $this->model->getlastincident($_SESSION['NIC']);
            foreach($getName as $row) {
                $datagetFName  = $row['Fname'];
                $datagetLName  = $row['Lname'];

            }
            $this->view->fName = $datagetFName;
            $this->view->lName = $datagetLName;

            foreach($getVillagerIncident as $row) {
                $datagetVillagerIncident  = $row['villagerIncident'];
            } 
            foreach($getVillagerWildElephantArrivalIncident as $row) {
                $datagetVillagerWildElephantArrivalIncident  = $row['villagerIncidentWildElephantArrival'];
            } 
            $this->view->getVillagerWildElephantArrivalIncident = (int)(intval($datagetVillagerWildElephantArrivalIncident)/intval($datagetVillagerIncident)*100);   
            foreach($getVillagerWildAnimalsDangerIncident as $row) {
                $datagetVillagerWildAnimalsDangerIncident  = $row['villagerIncidentWildAnimalsDanger'];
            }
            $this->view->getVillagerWildAnimalsDangerIncident = (int)(intval($datagetVillagerWildAnimalsDangerIncident)/intval($datagetVillagerIncident)*100);   
            foreach($getVillagerCropDamagesIncident as $row) {
                $datagetVillagerCropDamagesIncident  = $row['villagerIncidentCropDamages'];
            }
            $this->view->getVillagerCropDamagesIncident = (int)(intval($datagetVillagerCropDamagesIncident)/intval($datagetVillagerIncident)*100);   
            $this->view->getVillagerOthersIncident = (int)((intval($datagetVillagerIncident)-(intval($datagetVillagerCropDamagesIncident)+intval($datagetVillagerWildAnimalsDangerIncident)+intval($datagetVillagerWildElephantArrivalIncident)))/intval($datagetVillagerIncident)*100);   
            foreach($getVillagerIncidentacceptwildlifeOfficer as $row) {
                $datagetVillagerIncidentacceptwildlifeOfficer  = $row['acceptwildlifeOfficer'];
            }
            $this->view->getVillagerIncidentacceptwildlifeOfficer = $datagetVillagerIncidentacceptwildlifeOfficer;                        
            foreach($getVillagerIncidentacceptGramaseweka as $row) {
                $datagetVillagerIncidentacceptGramaseweka  = $row['acceptGramaseweka'];
            }
            $this->view->getVillagerIncidentacceptGramaseweka = $datagetVillagerIncidentacceptGramaseweka;                        
            $this->view->getVillagerIncidentpending =   intval($datagetVillagerIncident) - (intval($datagetVillagerIncidentacceptwildlifeOfficer)+intval($datagetVillagerIncidentacceptGramaseweka));
            foreach($getlastincident as $row) {
                $datagetlastincidentdate  = $row['date'];
                $datagetlastincidentid  = $row['incidentID'];
                $datagetlastincidentstatus  = $row['status'];
            }
            $this->view->datagetlastincidentdate = $datagetlastincidentdate;
            $this->view->datagetlastincidentid =  $datagetlastincidentid ;
            $this->view->datagetlastincidentstatus = $datagetlastincidentstatus;
            $getPassword = $this->model->getHashPassword($_SESSION['NIC']);
            $hashpassword = $getPassword['userPassword'];
            $this->view->render('villagerProfile');
            if (isset($_POST['submitAlert'])) {
              $this->model->setAlerStatus($_SESSION['NIC']); 
              }
  
            // print_r($getVillagerIncident);
             break;
            case 2 :
            //display villagerReportView2
            $this->view->render('villagerProfilesinhala');
            if (isset($_POST['submitAlert'])) {
              $this->model->setAlerStatus($_SESSION['NIC']); 
              }
  
            break;
            case 3 :
            //display villagerReportView3    
            $this->view->render('villagerProfiletamil');
            if (isset($_POST['submitAlert'])) {
              $this->model->setAlerStatus($_SESSION['NIC']); 
              }
  
            break;
             default:
            //display Error message
            header('Location: ../user/error');  
        }
     }  
     public function viewSpecialNotice()
     {
       session_start(); 
       if (isset($_GET['lang'])) {
         //assign the value
         $lang = $_GET['lang'];
       }
      $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);
      $this->view->notification = $this->checkNotificationStatus($_SESSION['NIC']);

      switch ($lang) {
         case 1:
           //display special Notice     
           $this->view->render('specialNotice');
           if (isset($_POST['submitAlert'])) {
            $this->model->setAlerStatus($_SESSION['NIC']); 
            }

           break;
         case 2:
           //display special Notice     
   
           $this->view->render('specialNoticesinhala');
           if (isset($_POST['submitAlert'])) {
            $this->model->setAlerStatus($_SESSION['NIC']); 
            }

           break;
         case 3:
           //display special Notice     
   
           $this->view->render('specialNoticetamil');
           if (isset($_POST['submitAlert'])) {
            $this->model->setAlerStatus($_SESSION['NIC']); 
            }

           break;
       }
     }
     function viewNotification(){
        session_start(); 
        if(isset($_GET['lang'])){
            //assign the value
            $lang = $_GET['lang'];
        }
        
        $this->view->status = $this->checkAlerStatus($_SESSION['NIC']);
        $this->view->notification = $this->checkNotificationStatus($_SESSION['NIC']);

        $this->view->notificationData =  $this->model->getNotification($_SESSION['NIC']); 
        
        switch ($lang) {
            case 1:
              //display special Notice 
              if (isset($_GET['notification'])) {
                $this->model->setNotificationStatus($_SESSION['NIC']); 
                 }    
              $this->view->render('notification');
              if (isset($_POST['submitAlert'])) {
                $this->model->setAlerStatus($_SESSION['NIC']); 
                }
                //  if (isset($_GET['notification'])) {
                //      $this->model->setNotificationStatus($_SESSION['NIC']); 
                //       }
                 break;
            case 2:
              //display special Notice     
      
              $this->view->render('notificationsinhala');
              if (isset($_POST['submitAlert'])) {
                $this->model->setAlerStatus($_SESSION['NIC']); 
                }
              break;
            case 3:
              //display special Notice     
      
              $this->view->render('notificationtamil');
              if (isset($_POST['submitAlert'])) {
                $this->model->setAlerStatus($_SESSION['NIC']); 
                }
              break;
          }
     }  

}

?>
