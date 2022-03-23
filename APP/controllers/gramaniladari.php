<?php
include "user.php";
class gramaniladari extends user
{
  function __construct()
  {
    parent::__construct();
  }
 //index function to load wildlifeofficer default page
 public function index()
 {
  $this->view->render('gramaniladari');
}
public function  editProfile()
{
  session_start();
  $this->view->userData = $this->model->profileData($_SESSION['NIC']);
  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
  }
  $province = $this->model->getProvince($_SESSION['NIC']);
  foreach ($province as $row) {
    $villagerProvince =  $row['province'];
  }
  $this->view->province = $villagerProvince;
  $district = $this->model->getDistrict($_SESSION['NIC']);
  foreach ($district as $row) {
    $villagerDistrict =  $row['district_name'];
  }
  $this->view->district = $villagerDistrict;
  $GramaniladhariDivision = $this->model->getGramaniladhariDivision($_SESSION['NIC']);
  foreach ($GramaniladhariDivision as $row) {
    $villagerGramaniladhariDivision =  $row['name'];
  }
  $this->view->GramaniladhariDivision = $villagerGramaniladhariDivision;
  $hashPassword = $this->model->getHashPassword($_SESSION['NIC']);
  foreach ($hashPassword as $row) {
    $villagerHashPassword =  $row['userPassword'];
  }   $this->view->hashPassword = $villagerHashPassword;

  switch ($lang) {
    case 1:
      //display special Notice     
      $this->view->render('gramaniladariEditProfile');
      break;
    case 2:
      //display special Notice     

      $this->view->render('gramaniladariEditProfile');
      break;
    case 3:
      //display special Notice     

      $this->view->render('gramaniladariEditProfile');
      break;
  }
      // $this->view->render('editProfile');
    }
    public function viewSpecialNotice()
    {
  
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      }
      switch ($lang) {
        case 1:
          //display special Notice     
          $this->view->render('gramaniladariSpecialNotice');
          break;
        case 2:
          //display special Notice     
  
          $this->view->render('gramaniladariSpecialNoticesinhala');
          break;
        case 3:
          //display special Notice     
  
          $this->view->render('gramaniladariSpecialNoticetamil');
          break;
      }
    }
    function viewNotification()
    {
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      }
      switch ($lang) {
        case 1:
          //display villagerReportView1     
          $this->view->render('gramaniladariNotification');
          break;
        case 2:
          //display villagerReportView2
          $this->view->render('gramaniladariNotificationsinhala');
          break;
        case 3:
          //display villagerReportView3    
          $this->view->render('gramaniladariNotificationtamil');
          break;
        default:
          //display Error message
          header('Location: ../user/error');
      }
    }
    public function viewCropDamages()
    {
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      }
       
      $this->view->dataAll  = $this->model->getData();
      //get the number of rows reports in assocaiative array
      $rows =  $this->model->getReportrows($_SESSION['NIC']);
      //assign value to $%noOfrows
      foreach($rows as $row) {
        $noOfrows  = $row['total_rows'];
     }
       //each page get the rows
      $rowsPer = 10;
      //Get the page number 
      $pageNumber = $_GET['page'];
      //view the page number view in report
      $start =  ($pageNumber - 1) * $rowsPer;
      //call the getdataPending function in incident_model class  
      $this->view->data1 = $this->model->getdataLimit($start, $rowsPer);
      //get the lastpage number
      $lastpage = ceil($noOfrows / $rowsPer);
      //pass the value
      $this->view->lastpage = $lastpage;
       $this->view->cropDamagesReview = $this->model->getCropDamagesReview($_SESSION['NIC']);
       if (isset($_GET['status'])) {
        //assign the value
        $status = $_GET['status'];
      } 
       switch ($status){
         case 'success':  
       switch ($lang) {
        case 1:
          //display villagerReportView1     
          $this->view->render('gramaniladariCropDamages');
          break;
        case 2:
          //display villagerReportView2
          $this->view->render('gramaniladariCropDamagesSinhala');
          break;
        case 3:
          //display villagerReportView3    
          $this->view->render('gramaniladariCropDamagesTamil');
          break;
        default:
          //display Error message
          header('Location: ../user/error');
       } break;
       case 'pending':
        switch ($lang) {
          case 1:
            //display villagerReportView1     
            $this->view->render('gramaniladariCropDamagesPending');
            break;
          case 2:
            //display villagerReportView2
            $this->view->render('gramaniladariCropDamagesPendingSinhala');
            break;
          case 3:
            //display villagerReportView3    
            $this->view->render('gramaniladariCropDamagesPendingTamil');
            break;
          default:
            //display Error message
            header('Location: ../user/error');
         }
        }
    }
    public function viewCropDamagesIncident(){
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      } 
      if (isset($_GET['status'])) {
        //assign the value
        $status = $_GET['lang'];
      } 
      $this->view->dataReport  = $this->model->getreport($_GET['reportNo']);
      switch ($lang) {
        case 1:
          
          //display villagerReportView1     
          $this->view->render('cropDamagesView');
          if(isset($_POST['Confirm'])){
            $this->model->updateStatusSucessful($_GET['reportNo'],$_POST['discription']);
          }
          if(isset($_POST['UnConfirm'])){
            $this->model->updateStatusUnSucessful($_GET['reportNo'],$_POST['discription']);
          }
          break;
        case 2:
          //display villagerReportView2
          $this->view->render('cropDamagesViewSinhala');
          break;
        case 3:
          //display villagerReportView3    
          $this->view->render('cropDamagesViewTamil');
          break;
        default:
          //display Error message
          header('Location: ../user/error');
      }
    }
    public function viewCropDamagesIncidentUpdate(){
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      } 
      
      $this->view->dataReport  = $this->model->getreport($_GET['reportNo']);
      switch ($lang) {
        case 1:
          
          //display villagerReportView1     
          $this->view->render('cropDamagesViewUpdating');
          if(isset($_POST['Confirm'])){
            $this->model->updateStatusSucessful($_GET['reportNo'],$_POST['discription']);
          }
          if(isset($_POST['UnConfirm'])){
            $this->model->updateStatusUnSucessful($_GET['reportNo'],$_POST['discription']);
          }
          break;
        case 2:
          //display villagerReportView2
          $this->view->render('cropDamagesViewSinhala');
          break;
        case 3:
          //display villagerReportView3    
          $this->view->render('cropDamagesViewTamil');
          break;
        default:
          //display Error message
          header('Location: ../user/error');
      }
    }
    public function viewVillager()
    {
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      }
      
      $this->view->dataAll  = $this->model->getData();
      //get the number of rows reports in assocaiative array
      $rows =  $this->model->getVillgerRows($_SESSION['NIC']);
      //assign value to $%noOfrows
      foreach($rows as $row) {
        $noOfrows  = $row['total_rows'];
     }
       //each page get the rows
      $rowsPer = 10;
      //Get the page number 
      $pageNumber = $_GET['page'];
      //view the page number view in report
      $start =  ($pageNumber - 1) * $rowsPer;
      //call the getdataPending function in incident_model class  
      $this->view->data1 = $this->model->getVillgerdataLimit($_SESSION['NIC'],$start, $rowsPer);
      //get the lastpage number
      $lastpage = ceil($noOfrows / $rowsPer);
      //pass the value
          $this->view->lastpage = $lastpage;
       $this->view->cropDamagesReview = $this->model->getVillgerReview($_SESSION['NIC']);
   //   print_r($this->model->getVillgerReview($_SESSION['NIC']));
       if (isset($_GET['status'])) {
        //assign the value
        $status = $_GET['status'];
      } 
       switch ($status){
         case 'accept':  
       switch ($lang) {
        case 1:
          //display villagerReportView1     
          $this->view->render('gramaniladariAcceptVillager');
          break;
        case 2:
          //display villagerReportView2
          $this->view->render('gramaniladariAcceptVillagerSinhala');
          break;
        case 3:
          //display villagerReportView3    
          $this->view->render('gramaniladariAcceptVillagerTamil');
          break;
        default:
          //display Error message
          header('Location: ../user/error');
       } break;
       case 'pending':
        switch ($lang) {
          case 1:
            //display villagerReportView1     
            $this->view->render('gramaniladariPendingVillager');
            break;
          case 2:
            //display villagerReportView2
            $this->view->render('gramaniladariPendingVillagerSinhala');
            break;
          case 3:
            //display villagerReportView3    
            $this->view->render('gramaniladariPendingVillagerTamil');
            break;
          default:
            //display Error message
            header('Location: ../user/error');
         }
        }
    }

    public function viewVillagerProfile(){
      if (isset($_GET['lang'])) {
        //assign the value
        $lang = $_GET['lang'];
      } 
      
     
      $this->view->villagerData = $this->model->getVillgerReview($_SESSION['NIC']);

      
      switch ($lang) {
        case 1:
          
          //display villagerReportView1     
          $this->view->render('registerVillagerViewUpdating');
          if(isset($_POST['Confirm'])){
            $this->model->updateStatusSucessfulRegister($_GET['NIC'] );
          }
          if(isset($_POST['UnConfirm'])){
            $this->model->updateStatusUnSucessfulRegister($_GET['NIC'] );
          }
          break;
        case 2:
          //display villagerReportView2
          $this->view->render('registerVillagerViewUpdating');
          break;
        case 3:
          //display villagerReportView3    
          $this->view->render('registerVillagerViewUpdating');
          break;
        default:
          //display Error message
          header('Location: ../user/error');
      }
     
    }
  }