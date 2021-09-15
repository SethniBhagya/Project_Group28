<?php
class user extends Controller{

    public $firstName;
    public $lastName;
    public $address;
    public $gender;
    public $userNic;
    public $password;
    public $userEmail;
    public $userMobileNumber;
    public $userDataofBirth;

    function __construct(){
        parent::__construct();

    }
    function index(){
       // $this->view->id = false;
       // $user = $this->model->getData();
       // print_r($user);
    //    $this->view->render('user');
    //    if(isset($_POST['submit'])){
            $this->view->users = $this->model->getData();
            $this->view->render('user');

     //    }
    } 
}
