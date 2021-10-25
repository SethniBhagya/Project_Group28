<?php
include "user.php";
class wildlifeofficer extends user
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
        $this->view->render('wildlifeofficer');
    }

    // view profile function to view profile of wildlife officer
    public function viewProfile()
    {
        session_start();
        $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        $this->view->render('wildlifeofficerViewProfile', $this->view->data);
    }
    // Edit profile function to view edit profile page of wildlife officer
    public function editProfile()
    {
        session_start();
        $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        $this->view->render('wildlifeofficerEditProfile', $this->view->data);
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
                    $this->view->render('wildlifeofficerViewProfile', $this->view->data);
                } else {
                    $this->view->data = $this->model->selectData($_SESSION["NIC"]);
                    $this->view->data[0]['message'] = "fail updating";
                    $this->view->render('wildlifeofficerEditProfile', $this->view->data);
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
                $this->view->render('wildlifeofficerEditProfile', $this->view->data);
            }





            //if else ekak


        }
    }
    // view Incidents function to view list of all reported incidents 
    public function viewIncidents()
    {
        // session_start();
        $this->view->data = $this->model->selectIncidentData();
        $this->view->render('wildlifeofficerViewIncidents', $this->view->data);
    }
    // view Incidents indetail function to view full details of a reported incident.
    public function viewIncidentDetails()
    {
        // session_start();
        $this->view->data = $this->model->selectIncidentData();
        $this->view->render('wildlifeoffficerViewIncidentsIndetail', $this->view->data);
    }
    // sendIncidentDetailsToVet function to send incident to veterinarian.
    public function sendIncidentDetailsToVet()
    {
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);
        $this->view->render('wildlifeoffficerViewIncidentsIndetail');
    }
    //filter incidents using report catagory in view reported incidents page.
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
        $this->view->render('wildlifeofficerDashboard');
    }




    //when tap the accept button or cancel button
    public function trigerRequest()
    {
        if (isset($_POST['accept'])) {
            $id = trim($_POST['acc']);
            $result = $this->model->incidentStatUpdate("success", $id);

            $this->view->data = $this->model->selectIncidentData();
            $this->view->render('wildlifeofficerViewIncidents', $this->view->data);
        }
        if (isset($_POST['cancel'])) {
            $id = trim($_POST['can']);
            $result = $this->model->incidentStatUpdate("pending", $id);

            $this->view->data = $this->model->selectIncidentData();
            $this->view->render('wildlifeofficerViewIncidents', $this->view->data);
        }
    }
}
