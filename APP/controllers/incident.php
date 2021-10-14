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
            //if not have goto login page
            header('Location: ../user/index');
        }else{ 
            //if have load report page
            $this->view->render('report');
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
       switch ($value) {
            case "1" : $this->view->render('report1');
            //user submit the form 
            if(isset($_POST['Submit'])){
                //call insertReport function in incident_model class 
                $this->model->insertReport1($_SESSION['NIC'], $_POST['noOfelephant'], $_POST['Reg'], $_POST['Photo'], $_POST['latitude'],$_POST['longitude'] );
                  
            }  
            break;
            case "2" : $this->view->render('report2');
            //user submit the form 
             if(isset($_POST['Submit'])){
                 //call insertReport function in incident_model class
                 $this->model->insertReport2($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['discription'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
             }  
            break;

            case "3" : $this->view->render('report3');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport3($_SESSION['NIC'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
            case "4" : $this->view->render('report4');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport4($_SESSION['NIC'],$_POST['animal'],$_POST['cultivatedCrop'],$_POST['cultivatedLand'] ,$_POST['Photo'],$_POST['damageLand'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
            case "5" : $this->view->render('report5');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport5($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['support'],$_POST['discription'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
            case "6" : $this->view->render('report6');
            //user submit the form
              if(isset($_POST['Submit'])){
                  //call insertReport function in incident_model class
                  $this->model->insertReport6($_SESSION['NIC'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
            break;
       }
    }
    }
    //Create the viewReport function for villager user ViewTable  
    public function viewReport(){
        //get the number of rows reports in assocaiative array
        $rows =  $this->model->getReportrows();
        //assign value to $%noOfrows
        $noOfrows =  $rows['total_rows'];
        //each page get the rows
        $rowsPer = 15;
        //Get the page number 
        $pageNumber = $_GET['page'];
        //view the page number view in report
        $start =  ($pageNumber -1) * $rowsPer;
        //call the getdataPending function in incident_model class  
        $this->view->data1 = $this->model->getdataPending($start,$rowsPer);
        //get the lastpage number
        $lastpage = ceil($noOfrows/$rowsPer);
        //pass the value
        $this->view->lastpage = $lastpage;
        //if check the already have type
        if(isset($_GET['type'])){
            //assign the value
            $type = $_GET['type'];
        }
        //switch each the page when get the $type value
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
   
    }
    function getReportrows(){

    }
} 
