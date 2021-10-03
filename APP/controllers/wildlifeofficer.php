<?php
include "user.php";
class wildlifeofficer extends user 
{

    function __construct()
    {
        parent::__construct();      
    }


    public function index(){
        $this->view->render('wildlifeofficer');
    }
}

?>