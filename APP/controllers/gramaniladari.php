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
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
         $this->view->render('gramaniladari');
    }

    // view profile function to view profile of wildlife officer
    public function viewProfile()
    {
        session_start();
        $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        $this->view->render('gramaniladari_view_profile', $this->view->data);
    }
    // Edit profile function to view edit profile page of wildlife officer
    public function editProfile()
    {
        session_start();
        $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        $this->view->render('gramaniladari_edit_profile', $this->view->data);
    }
    // update profile function to update profile of wildlife officer after editing edit page
    public function updateProfile()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            session_start();

            //chack whether wildlife officer have save the changes
            if (isset($_POST["save"])) {
                $data = [

                    "fName" => trim($_POST["fname"]),
                    "lName" => trim($_POST["lname"]),
                    //"nic"=>trim($_POST["nic"]),
                    // "gender"=>trim($_POST["gender"]),
                    "dob" => trim($_POST["dob"]),
                    "address" => trim($_POST["address"]),
                    "mob" => trim($_POST["mobileNo"]),


                    // "village"=>trim($_POST["village"]),

                    "email" => trim($_POST["email"]),
                    "office_address" => trim($_POST["office_address"]),



                ];
                $update_result = $this->model->updateData($_SESSION["NIC"], $data);
                if (empty($update_result[0]) && empty($update_result[1])) {

                    $_SESSION["Fname"] = $data["fName"];
                    $_SESSION["Lname"] = $data["lName"];
                    $this->view->data = $this->model->selectData($_SESSION["NIC"]);
                    $this->view->data[0]['message'] = "succcessfully updated";
                    $this->view->render('gramaniladari_view_profile', $this->view->data);
                } else {
                    $this->view->data = $this->model->selectData($_SESSION["NIC"]);
                    $this->view->data[0]['message'] = "fail updating";
                    $this->view->render('gramaniladari_edit_profile', $this->view->data);
                }
            } elseif (isset($_POST["cancel"])) {
                // $data=[

                //     "fName"=>trim($_POST["fname"]),
                //     "lName"=>trim($_POST["lname"]),
                //     //"nic"=>trim($_POST["nic"]),
                //    // "gender"=>trim($_POST["gender"]),
                //     "dob"=>trim($_POST["dob"]),
                //     "address"=>trim($_POST["address"]),
                //     "mob"=>trim($_POST["mobileNo"]),


                //     // "village"=>trim($_POST["village"]),

                //     "email"=>trim($_POST["email"]),


                // ];
                // $this->model->updateData($_SESSION["NIC"],$data);
                $this->view->data = $this->model->selectData($_SESSION["NIC"]);
                $this->view->render('gramaniladari_edit_profile', $this->view->data);
            }





            //if else ekak


        }
    }
    // view Cropdamage function to view list of all reported incidents 
    public function viewCropdamage()
    {
        // session_start();
        $this->view->data = $this->model->selectCropdamageData();
        $this->view->render('gramaniladari_view_cropdamage', $this->view->data);
    }
    // view Cropdamage indetail function to view full details of a reported incident.
    public function viewCropdamageDetails()
    {
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('gramaniladari_view_cropdamages_indetail');
    }
    //filter Cropdamage using report catagory in view reported incidents page.
    public function filterUsingReportCatagory()
    {
        $this->view->data[0]['selected'] = $_POST['report_catagory'];
        /////////////////////// do from here////////

    }
    //view dashboard of wildlife officer.
    public function viewDashboard()
    {
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('gramaniladari_dashboard');
    }
}