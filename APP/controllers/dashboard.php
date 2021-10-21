<?php
class dashboard extends controller{
    function __construct() 
    {
        parent::__construct();
    }
    function index(){
        if(isset($_GET['lang'])){
            //assign the value
            $type = $_GET['lang'];
        }
        switch($type){
            case 1:
            $this->view->render('dashboardVillager');
            break;
            case 2 :
            $this->view->render('dashboardVillagerSinhala');    
            break;
            case 3:
            $this->view->render('dashboardVillagerTamil') ;   
        }
        // $this->view->render('dashboardVillager');
    }
}



?>