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
    
    function index(){
        session_start();
        if(!isset($_SESSION['NIC'])){
           // echo  "number" .$_SESSION['NIC'];
            header('Location: ../user/index');
        }else{ 
            $this->view->render('report');
        }
    }
    
    public function setIncident(){
        session_start();
        if(!isset($_SESSION['NIC'])){
            echo  "number" .$_SESSION['NIC'];
            header('Location: ../user/index');
        }else{ 
       $value = $_GET['report'];
       //echo $value;
       switch ($value) {
            case "1" : $this->view->render('report1');
            if(isset($_POST['Submit'])){
                $this->model->insertReport1($_SESSION['NIC'], $_POST['noOfelephant'], $_POST['Reg'], $_POST['Photo'], $_POST['latitude'],$_POST['longitude'] );
                // $this->_incidentId = $this->_incidentId + 1; 
            } 

        //     if(isset($_POST['Submit'])){
        //     $lat=$_POST['latitude'];
        //     $lng=$_POST['longitude'];
        //     echo $lat; 
        //     $address= $this->getaddress($lat,$lng);
        //     if($address)
        //     {
        //        echo $address;
        //     }
        //     else
        //     {
        //        echo "Not found";
        //     }
        // }
          break;
          case "2" : $this->view->render('report2'); 
             if(isset($_POST['Submit'])){
                 $this->model->insertReport2($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['discription'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
             }  
          break;

          case "3" : $this->view->render('report3');
              if(isset($_POST['Submit'])){
                  $this->model->insertReport3($_SESSION['NIC'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
              }
          break;
          case "4" : $this->view->render('report4');
              if(isset($_POST['Submit'])){
                  $this->model->insertReport4($_SESSION['NIC'],$_POST['animal'],$_POST['cultivatedCrop'],$_POST['cultivatedLand'] ,$_POST['Photo'],$_POST['damageLand'],$_POST['latitude'],$_POST['longitude']);
              }
          break;
          case "5" : $this->view->render('report5');
          if(isset($_POST['Submit'])){
            $this->model->insertReport5($_SESSION['NIC'],$_POST['animal'],$_POST['noOfanimals'],$_POST['support'],$_POST['discription'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
        }
          break;
          case "6" : $this->view->render('report6');
          if(isset($_POST['Submit'])){
            $this->model->insertReport6($_SESSION['NIC'],$_POST['Photo'],$_POST['latitude'],$_POST['longitude']);
          }
          break;
       }
    }
    }
    function viewReport(){
        // $this->view->data = $this->model->getdata();
        //print_r($this->model->getReportrows());
        $rows =  $this->model->getReportrows();
        $noOfrows =  $rows['total_rows'];
        $rowsPer = 15;
        $pageNumber = $_GET['page'];
        $start =  ($pageNumber -1) * $rowsPer;
        $this->view->data1 = $this->model->getdataPending($start,$rowsPer);
        $lastpage = ceil($noOfrows/$rowsPer);
        $this->view->lastpage = $lastpage;
        if(isset($_GET['type'])){
            $type = $_GET['type'];
        }
        switch($type){
            case 1 :
            $this->view->render('villagerReportView1');
            break;
            case 2 :
            $this->view->render('villagerReportView2');
            break;
            case 3 :
            $this->view->render('villagerReportView3');
            break;
    
        }
        // $this->view->render('villagerReportView1');

        // if(isset)
     //   echo "hello";
       // print_r($this->view->data);
    }
    function getReportrows(){

    }
    // function getaddress($lat,$lng)
    //  {
    //     echo $lat;
    //     $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
    //     $json = @file_get_contents($url);
    //     $data=json_decode($json);
    //     $status = $data->status;
    //     echo $status;
    //     echo  $data->results[0]->formatted_address;
    //     if($status=="OK") return $data->results[0]->formatted_address;
    //     else
    //     return$data->results[0]->formatted_address;
// }
}
