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

    public function getNotice(){
        $NIC=$_SESSION["NIC"];

        $lastNoticeID=$this->model->getLastNoticeId($NIC);
        $village_code=$this->model->getUserVillageCode($NIC);
        $newNoticeDetails=$this->model->getNewNoticeDetails($village_code,$lastNoticeID);

        if($newNoticeDetails!="No"){

            $noticeHtml="

        <div id=\"new-notice\">

           <img src=\"../Public/images/notice.jpg\">
           <h1>Date:".$newNoticeDetails["date"]."&emsp;Time:".$newNoticeDetails["time"]."</h1>
           <p>".$newNoticeDetails["description"]."</p>
           <audio id=\"audio\" autoplay loop  controls src=\"http://www.raypinson.com/ringtones/CarAlarm.mp3\"></audio>
           <button id=\"ok-btn\" value=".$newNoticeDetails["noticeID"]." onclick=\"endNotice(this.value)\">Okay</button>


        </div>




        ";

        echo $noticeHtml;

        }

        




    }


    public function endNotice(){

        $noticeId=$_POST["noticeId"];
        $url=$_GET['url'];
        $url  = rtrim($url,'/');
        $url  = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);

        $this->model->updateNotice($noticeId,$_SESSION["NIC"]);
        header("Location: ../villager/".$url[1]);

    } 

}

?>

