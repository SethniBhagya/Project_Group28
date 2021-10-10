<?php
session_start();
session_regenerate_id();

 
class report extends Controller{
    
    private $_incidentId;
    private $_incidentCategory;
    private $_incidentDate;
    private $_incidentLocation;
    private $_incidentDescription;
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){

        

        if(!empty($_SESSION["NIC"]) and ($_SESSION["jobtype"]=="villager" or $_SESSION["jobtype"]=="grama niladhari")){
            
                      $this->view->render('report');
             
          }
      else{
        header("Location: ../user/index");
      }
    }
    
    public function setIncident(){
       $value = $_GET['report'];
       //echo $value;
       switch ($value) {
            case "1" : $this->view->render('report1');
            // if(isset($_POST['Submit'])){
            //     insertReport($_POST[''])
            // }



           // echo $_POST['Submit'];
                
    

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
          break;

          case "3" : $this->view->render('report3');
          break;
          case "4" : $this->view->render('report4');
          break;
          case "5" : $this->view->render('report5');
          break;
          case "6" : $this->view->render('report6');
          break;
       }
       
    }
    function getaddress($lat,$lng)
     {
        echo $lat;
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
        $json = @file_get_contents($url);
        $data=json_decode($json);
        $status = $data->status;
        echo $status;
        echo  $data->results[0]->formatted_address;
        if($status=="OK") return $data->results[0]->formatted_address;
        else
        return$data->results[0]->formatted_address;
}
}
