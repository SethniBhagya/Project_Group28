<?php
include "user.php";
class veterinarian extends user
{

    function __construct()
    {
        parent::__construct();
    }

    //index function to load wildlifeofficer default page
    public function index()
    {
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        // session_start();
        // $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        switch ($lang) {
            case 1:
                //display profile page     
                $this->view->render('veterinarian');
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianSinhala');
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianTamil');
                break;
        }
    }


    // view profile function to view profile of wildlife officer
    public function viewProfile()
    {
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        session_start();
        $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        switch ($lang) {
            case 1:
                //display profile page     
                $this->view->render('veterinarianViewProfile', $this->view->data);
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianViewProfileSinhala', $this->view->data);
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianViewProfileTamil', $this->view->data);
                break;
        }
    }
    // Edit profile function to view edit profile page of wildlife officer
    public function editProfile()
    {
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        session_start();
        $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        switch ($lang) {
            case 1:
                //display profile page     
                $this->view->render('veterinarianEditProfile', $this->view->data);
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianEditProfileSinhala', $this->view->data);
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianEditProfileTamil', $this->view->data);
                break;
        }
    }


    // update profile function to update profile of wildlife officer after editing edit page
    public function updateProfile()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            session_start();
            if (isset($_GET['lang'])) {
                //assign the value
                $lang = $_GET['lang'];
            }

            //chack whether wildlife officer have save the changes
            if (isset($_POST["save"])) {
                $data = [

                    "fName" => trim($_POST["fname"]),
                    "lName" => trim($_POST["lname"]),
                    //"nic"=>trim($_POST["nic"]),
                    // "gender"=>trim($_POST["gender"]),
                    // "dob" => trim($_POST["dob"]),
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
                    switch ($lang) {
                        case 1:
                            //display profile page     
                            $this->view->render('veterinarianEditProfile', $this->view->data);
                            break;
                        case 2:
                            //display profile page  
                            $this->view->render('veterinarianEditProfileSinhala', $this->view->data);
                            break;
                        case 3:
                            //display profile page   
                            $this->view->render('veterinarianEditProfileTamil', $this->view->data);
                            break;
                    }
                } else {
                    $this->view->data = $this->model->selectData($_SESSION["NIC"]);
                    $this->view->data[0]['message'] = "fail updating";
                    switch ($lang) {
                        case 1:
                            //display profile page     
                            $this->view->render('veterinarianEditProfile', $this->view->data);
                            break;
                        case 2:
                            //display profile page  
                            $this->view->render('veterinarianEditProfileSinhala', $this->view->data);
                            break;
                        case 3:
                            //display profile page   
                            $this->view->render('veterinarianEditProfileTamil', $this->view->data);
                            break;
                    }
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
                switch ($lang) {
                    case 1:
                        //display profile page     
                        $this->view->render('veterinarianEditProfile', $this->view->data);
                        break;
                    case 2:
                        //display profile page  
                        $this->view->render('veterinarianEditProfileSinhala', $this->view->data);
                        break;
                    case 3:
                        //display profile page   
                        $this->view->render('veterinarianEditProfileTamil', $this->view->data);
                        break;
                }
            } //if else ekak


        }
    }
    // view Incidents function to view list of all reported incidents 
    public function viewIncidents()
    {
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        // session_start();
        $this->view->data = $this->model->selectIncidentData();
        switch ($lang) {
            case 1:

                $this->view->render('veterinarianViewIncidents', $this->view->data);
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianViewIncidentsSinhala', $this->view->data);
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianViewIncidentsTamil', $this->view->data);
                break;
        }
    }

    // view Incidents indetail function to view full details of a reported incident.
    public function viewIncidentDetails()
    {
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        // session_start();
        $this->view->data = $this->model->selectIncidentData();
        switch ($lang) {
            case 1:

                $this->view->render('veterinarianViewIncidentsIndetail', $this->view->data);
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianViewIncidentsIndetailSinhala', $this->view->data);
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianViewIncidentsIndetailTamil', $this->view->data);
                break;
        }
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
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        // session_start();
        // $this->view->data = $this->model->selectData($_SESSION["NIC"]);

        switch ($lang) {
            case 1:
                //display profile page     
                $this->view->render('veterinarianDashboard');
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianDashboardSinhala');
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianDashboardTamil');
                break;
        }
        // session_start();
        // $this->view->data=$this->model->selectData($_SESSION["NIC"]);

    }

    public function trigerRequest()
    {
        session_start();

        $nic = $_SESSION["NIC"];
        if (isset($_POST['accept'])) {
            $id = trim($_POST['acc']);
            $lang = $_GET['lang'];

            $result = $this->model->incidentStatUpdate("success", $id, $nic);

            $this->view->data = $this->model->selectIncidentData();
            switch ($lang) {
                case '1':
                    $this->view->render('veterinarianViewIncidents', $this->view->data);
                    break;
                case '2':
                    $this->view->render('veterinarianViewIncidentsSinhala', $this->view->data);
                    break;
                case '3':
                    $this->view->render('veterinarianViewIncidentsTamil', $this->view->data);
                    break;
            }
        }
        if (isset($_POST['cancel'])) {
            $nic = "";
            $id = trim($_POST['can']);
            $lang = $_GET['lang'];
            $result = $this->model->incidentStatUpdate("pending", $id, $nic);

            $this->view->data = $this->model->selectIncidentData();
            switch ($lang) {
                case '1':
                    $this->view->render('veterinarianViewIncidents', $this->view->data);
                    break;
                case '2':
                    $this->view->render('veterinarianViewIncidentsSinhala', $this->view->data);
                    break;
                case '3':
                    $this->view->render('veterinarianViewIncidentsTamil', $this->view->data);
                    break;
            }
        }
    }

    function viewNotification()

    {
        if (isset($_GET['lang'])) {
            //assign the value
            $lang = $_GET['lang'];
        }
        // session_start();
        $this->view->data = $this->model->selectNotificationsData();

        switch ($lang) {
            case 1:

                $this->view->render('veterinarianNotifications', $this->view->data);
                break;
            case 2:
                //display profile page  
                $this->view->render('veterinarianNotificationsSinhala', $this->view->data);
                break;
            case 3:
                //display profile page   
                $this->view->render('veterinarianNotificationsTamil', $this->view->data);
                break;
        }
    }
}
