<?php
 
class incident extends Controller{
    
    private $_incidentId ;  
    private $_incidentCategory;
    private $_incidentDate;
    private $_incidentLocation;
    private $_incidentDescription;
    function __construct()
    {
        parent::__construct();
    }
    //create the index function for loading default incident file
    function index(){
        //Get the session variable 
        session_start();
        //Check the is session varible already have in session 
        if(!isset($_SESSION['NIC'])){

           header('Location: ../user/index');
        }else{ 
            //if have load report page
            
            if(isset($_GET['lang'])){
                //assign the value
                $type = $_GET['lang'];
            }
            switch($type){
                case 1 :
                //English type     
                $this->view->render('report');
                break;
                case 2 :
                //Sinhala type
                $this->view->render('reportSinhala');
                break;
                case 3 :
                //Tamil Type    
                $this->view->render('reportTamil');
                break;
        
            }
        }
    }
    //Create the setIncident function for load incident report type
    public function setIncident(){
        //if check when router path enter if user already or not
        session_start();
        //if not goto the login page
        if(!isset($_SESSION['NIC'])){
            //routing the login page
            header('Location: ../user/index');
        }else{
            //if user already log then pass report page   
            // get value in report
            $value = $_GET['report'];
        //switch in the incident report type page
        if(isset($_GET['lang'])){
            //assign the value
            $type = $_GET['lang'];
        }
        switch($type){
            case 1 :
             
            
            switch ($value) {

                case "1" : $this->view->render('report1');
                //user submit the form 
                if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class 
                    $this->model->insertReport1($_SESSION['NIC'], $_POST['noOfelephant'], $_POST['Reg'], $_POST['Photo'],$_POST['place'], $_POST['latitude'],$_POST['longitude'] );
                      
                }  
                break;
                case "2" : $this->view->render('report2');
                //user submit the form 
                 if(isset($_POST['Submit'])){
                     //call insertReport function in incident_model class
                     $this->model->insertReport2($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['discription'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                 }  
                break;
    
                case "3" : $this->view->render('report3');
                //user submit the form
                  if(isset($_POST['Submit'])){
                      //call insertReport function in incident_model class
                      $this->model->insertReport3($_SESSION['NIC'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                  }
                break;
                case "4" : $this->view->render('report4');
                //user submit the form
                  if(isset($_POST['Submit'])){
                      //call insertReport function in incident_model class
                      $this->model->insertReport4($_SESSION['NIC'],$_POST['animal'],$_POST['cultivatedCrop'],$_POST['cultivatedLand'] ,$_POST['Photo'],$_POST['place'],$_POST['damageLand'],$_POST['latitude'],$_POST['longitude']);
                  }
                break;
                case "5" : $this->view->render('report5'); 
                  if(isset($_POST['Submit'])){
                      //call insertReport function in incident_model class
                      $this->model->insertReport5($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['support'],$_POST['discription'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                  }
                break;
                case "6" : $this->view->render('report6');
                //user submit the form
                  if(isset($_POST['Submit'])){
                      //call insertReport function in incident_model class
                      $this->model->insertReport6($_SESSION['NIC'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                  }
                break;
                }          
            break;
            case 2 :
            //Sinhala type
           
            switch ($value) {

                case "1" : $this->view->render('report1sinhala');
                //user submit the form 
                if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class 
                    $this->model->insertReport1($_SESSION['NIC'], $_POST['noOfelephant'], $_POST['Reg'], $_POST['Photo'],$_POST['place'], $_POST['latitude'],$_POST['longitude'] );
                      
                }
                break;
                 //user submit the form 
                 if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class
                    $this->model->insertReport2($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['discription'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                }  
                break;
    
                case "3" : $this->view->render('report3sinhala');
                //user submit the form
                if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class
                    $this->model->insertReport3($_SESSION['NIC'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                }
                break;
                case "4" : $this->view->render('report4sinhala');
                //user submit the form
                if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class
                    $this->model->insertReport4($_SESSION['NIC'],$_POST['animal'],$_POST['cultivatedCrop'],$_POST['cultivatedLand'] ,$_POST['Photo'],$_POST['place'],$_POST['damageLand'],$_POST['latitude'],$_POST['longitude']);
                }
                break;
                case "5" : $this->view->render('report5sinhala');
                //user submit the form
                if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class
                    $this->model->insertReport5($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['support'],$_POST['discription'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                }
                break;
                case "6" : $this->view->render('report6sinhala');
                if(isset($_POST['Submit'])){
                    //call insertReport function in incident_model class
                    $this->model->insertReport6($_SESSION['NIC'],$_POST['Photo'],$_POST['place'],$_POST['latitude'],$_POST['longitude']);
                }
                break;
               }
            break;
            case 3 :
            //Tamil Type    
            switch ($value) {

            case "1" : $this->view->render('report1tamil');
            //user submit the form 
            if(isset($_POST['Submit'])){
                //call insertReport function in incident_model class 
                $this->model->insertReport1($_SESSION['NIC'], $_POST['noOfelephant'], $_POST['Reg'], $_POST['Photo'],$_POST['place'], $_POST['latitude'],$_POST['longitude'] );
                  
            } 
            break;
            case "2" : $this->view->render('report2tamil');
            //user submit the form 
             if(isset($_POST['Submit'])){
                 //call insertReport function in incident_model class
                 $this->model->insertReport2($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['discription'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
             }  
            break;

            case "3" : $this->view->render('report3tamil');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport3($_SESSION['NIC'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
            case "4" : $this->view->render('report4tamil');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport4($_SESSION['NIC'],$_POST['animal'],$_POST['cultivatedCrop'],$_POST['cultivatedLand'] ,$_POST['Photo'],$_POST['damageLand'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
            case "5" : $this->view->render('report5tamil');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport5($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['support'],$_POST['discription'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
            case "6" : $this->view->render('report6tamil');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport6($_SESSION['NIC'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
            break;

            default:
              header('Location: ../user/error'); 
            break;
       }
    //    default:
    //    header('Location: ../user/error'); 
    //    break;
 
    }
 }
 }
    //Create the viewReport function for villager user ViewTable  
    public function viewReport(){
        $this->view->dataAll  = $this->model->getData( );
        //get the number of rows reports in assocaiative array
        $rows =  $this->model->getReportrows();
        //assign value to $%noOfrows
        $noOfrows =  $rows['total_rows'];
        //each page get the rows
        $rowsPer = 10;
        //Get the page number 
        $pageNumber = $_GET['page'];
        //view the page number view in report
        $start =  ($pageNumber -1) * $rowsPer;
        //call the getdataPending function in incident_model class  
        $this->view->data1 = $this->model->getdataLimit($start,$rowsPer);
        //get the lastpage number
        $lastpage = ceil($noOfrows/$rowsPer);
        //pass the value
        $this->view->lastpage = $lastpage;
        //if check the already have type
        if(isset($_GET['type'])){
            //assign the value
            $type = $_GET['type'];
        }
        if(isset($_GET['lang'])){
            //assign the value
            $lang = $_GET['lang'];
        }
        //switch each the page when get the $type value
        switch($lang){
            case 1 :
            switch($type){
                case 1 :
                //display villagerReportView1     
                $this->view->render('villagerReportView1');
                break;
                case 2 :
                //display villagerReportView2
                $this->view->render('villagerReportView2');
                break;
                case 3 :
                //display villagerReportView3    
                $this->view->render('villagerReportView3');
                break;
        
            }
            break;
            case 2 :
                switch($type){
                case 1 :
                //display villagerReportView1     
                $this->view->render('villagerReportView1sinhala');
                break;
                case 2 :
                //display villagerReportView2
                $this->view->render('villagerReportView2sinhala');
                break;
                case 3 :
                //display villagerReportView3    
                $this->view->render('villagerReportView3sinhala');
                break;
        
            }
            break;
            
            
        // }
           case 3:
          switch($type){
            case 1 :
            //display villagerReportView1     
            $this->view->render('villagerReportView1tamil');
            break;
            case 2 :
            //display villagerReportView2
            $this->view->render('villagerReportView2tamil');
            break;
            case 3 :
            //display villagerReportView3    
            $this->view->render('villagerReportView3tamil');
            break;
    
        }
    }
    }
    function viewReportpage(){
        // $this->view->dataAll  = $this->model->getDatareport( );
        if(isset($_GET['reportNo'])){
           $reportNo = $_GET['reportNo'];
           $this->view->dataReport  = $this->model->getreport($reportNo);
  
        }else{
            header("../user/error");
        }
        if(isset($_GET['lang'])){
            //assign the value
            $lang = $_GET['lang'];
        }
        switch($lang){
            case 1 :
            //display villagerReportView1     
            $this->view->render('reportpage');
            break;
            case 2 :
            //display villagerReportView2
            $this->view->render('reportpagesinhala');
            break;
            case 3 :
            //display villagerReportView3    
            $this->view->render('reportpagetamil');
            break;
    
        }
     }  
        } 
