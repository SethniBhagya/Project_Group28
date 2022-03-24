<?php
include "user.php";
session_start();
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
        $this->view->data = $this->model->selectIncidentExtra();
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
        $this->view->data = $this->model->selectIncidentDataSpecial($_GET['index']);
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


    public function trigerRequest()
    {


        $nic = $_SESSION["NIC"];
        if (isset($_POST['accept'])) {
            $id = trim($_POST['acc']);
            $lang = $_GET['lang'];

            $result = $this->model->incidentStatUpdate("success", $id, $nic);

            $this->view->data = $this->model->selectIncidentExtra();
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

            $this->view->data = $this->model->selectIncidentExtra();
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





    //view dashboard of wildlife officer.
    public function viewDashboard()
    {
        $dataArray = [];
        if (isset($_GET['lang'])) {
            //assign the value

            $type = $_GET['lang'];
        }

        //   $this->view->render('dashboardVillager');
        $lastWeek = $this->model->lastWeek();
        $lastMonth = $this->model->lastMonth();
        $last24Hours = $this->model->last24Hours();
        $countWildElephantArrival = $this->model->countWildElephantArrival();
        $countWildAnimalArrival = $this->model->countWildAnimalArrival();
        $countElephantFence = $this->model->countElephantFence();
        $countcropDamages = $this->model->countcropDamages();
        $countOthers = $this->model->countOthers();
        $veterinarianDistrict = $this->model->getWildLifeDistrict($_SESSION['NIC']);

        foreach ($veterinarianDistrict as $row) {

            $dataDistrict = $row['district_name'];
        }
        $dataArray['districtName'] = $dataDistrict;

        $countGramaniladahari = $this->model->countGramaniladhari($dataDistrict);
        $countVeterinarian = $this->model->countVeterinarian($dataDistrict);
        $countwildlifeofficer = $this->model->countWildlifeOfficer($dataDistrict);
        $countVillager = $this->model->countVillagers($dataDistrict);
        $countWildElephantArrivalDistrict = $this->model->countWildElephantArrivalDistrict($dataDistrict);
        $countcropDamagesDistrict = $this->model->countcropDamagesDistrict($dataDistrict);
        $countIllegalThingDistrict = $this->model->countIllegalThingDistrict($dataDistrict);
        $countElephantFenceDistrict = $this->model->countElephantFenceDistrict($dataDistrict);
        $countWildAnimalDangerDistrict = $this->model->countWildAnimalDangerDistrict($dataDistrict);
        $countWildAnimalArrivalDistrict = $this->model->countWildAnimalArrivalDistrict($dataDistrict);
        $countWeekincidentdistrict = $this->model->countWeekincidentdistrict($dataDistrict);
        $countMonthincidentdistrict = $this->model->countMonthincidentdistrict($dataDistrict);
        $totalIncident = $this->model->countLast3MonthTotalIncident();
        $countLast3Monthincidentdistrict = $this->model->countLast3Monthincidentdistrict($dataDistrict);

        $countDayincidentdistrict = $this->model->countDayincidentdistrict($dataDistrict);
        $countCentralProvinceIncident = $this->model->countCentralProvinceIncident();
        $countNorthernProvinceIncident = $this->model->countNorthernProvinceIncident();
        $countSouthernProvinceIncident = $this->model->countSouthernProvinceIncident();
        $countWesternProvinceIncident = $this->model->countWesternProvinceIncident();
        $countNorthWesternProvinceIncident = $this->model->countNorthWesternProvinceIncident();
        $countUvaProvinceIncident = $this->model->countUvaProvinceIncident();
        $countSabaragamuwaProvinceIncident = $this->model->countSabaragamuwaProvinceIncident();
        $countNorthCentralProvinceIncident = $this->model->countNorthCentralProvinceIncident();
        $countIncident12AM = $this->model->countIncident12AM($dataDistrict);
        $countIncident01AM = $this->model->countIncident01AM($dataDistrict);
        $countIncident02AM = $this->model->countIncident02AM($dataDistrict);
        $countIncident03AM = $this->model->countIncident03AM($dataDistrict);
        $countIncident04AM = $this->model->countIncident04AM($dataDistrict);
        $countIncident05AM = $this->model->countIncident05AM($dataDistrict);
        $countIncident06AM = $this->model->countIncident06AM($dataDistrict);
        $countIncident07AM = $this->model->countIncident07AM($dataDistrict);
        $countIncident08AM = $this->model->countIncident08AM($dataDistrict);
        $countIncident09AM = $this->model->countIncident09AM($dataDistrict);
        $countIncident10AM = $this->model->countIncident10AM($dataDistrict);
        $countIncident11AM = $this->model->countIncident11AM($dataDistrict);
        $countIncident12PM = $this->model->countIncident12PM($dataDistrict);
        $countIncident01PM = $this->model->countIncident01PM($dataDistrict);
        $countIncident02PM = $this->model->countIncident02PM($dataDistrict);
        $countIncident03PM = $this->model->countIncident03PM($dataDistrict);
        $countIncident04PM = $this->model->countIncident04PM($dataDistrict);
        $countIncident05PM = $this->model->countIncident05PM($dataDistrict);
        $countIncident06PM = $this->model->countIncident06PM($dataDistrict);
        $countIncident07PM = $this->model->countIncident07PM($dataDistrict);
        $countIncident08PM = $this->model->countIncident08PM($dataDistrict);
        $countIncident09PM = $this->model->countIncident09PM($dataDistrict);
        $countIncident10PM = $this->model->countIncident10PM($dataDistrict);
        $countIncident11PM = $this->model->countIncident11PM($dataDistrict);
        $countIncidentJan = $this->model->countIncidentJan($dataDistrict);
        $countIncidentFeb = $this->model->countIncidentFeb($dataDistrict);
        $countIncidentMarch = $this->model->countIncidentMarch($dataDistrict);
        $countIncidentApril  = $this->model->countIncidentApril($dataDistrict);
        $countIncidentMay = $this->model->countIncidentMay($dataDistrict);
        $countIncidentJune = $this->model->countIncidentJune($dataDistrict);
        $countIncidentJuly = $this->model->countIncidentJuly($dataDistrict);
        $countIncidentAug = $this->model->countIncidentAug($dataDistrict);
        $countIncidentSep = $this->model->countIncidentSep($dataDistrict);
        $countIncidentOct = $this->model->countIncidentOct($dataDistrict);
        $countIncidentNov = $this->model->countIncidentNov($dataDistrict);
        $countIncidentDec  = $this->model->countIncidentDec($dataDistrict);
        $location = $this->model->selectLocation($dataDistrict);


        $dataArray['dataLocation'] = $location;





        foreach ($lastWeek as $row) {

            $dataLastWeek = $row['lastWeek'];
        }
        $dataArray['lastWeekData'] = $dataLastWeek;

        foreach ($lastMonth as $row) {
            $dataLastMonth = $row['lastMonth'];
        }
        $dataArray['lastMonthData'] = $dataLastMonth;

        foreach ($last24Hours as $row) {
            $dataLast24Hours = $row['last24Hours'];
        }
        $dataArray['last24HoursData'] = $dataLast24Hours;

        foreach ($countWildElephantArrival as $row) {
            $datacountWildElephantArrival = $row['countWildElephantArrival'];
        }
        $dataArray['lastMonthWildElephantArrival'] = $datacountWildElephantArrival;;

        foreach ($countWildAnimalArrival as $row) {
            $datacountWildAnimalArrival = $row['countWildAnimalArrival'];
        }
        $dataArray['lastMonthWildAnimalArrival'] = $datacountWildAnimalArrival;

        foreach ($countElephantFence as $row) {
            $datacountElephantFence = $row['countElephantFence'];
        }
        $dataArray['llastMonthElephantFence'] = $datacountElephantFence;

        foreach ($countcropDamages as $row) {
            $datacountcropDamages = $row['countcropDamages'];
        }
        $dataArray['lastMonthcropDamages'] = $datacountcropDamages;

        foreach ($countOthers as $row) {
            $datacountOthers = $row['countOthers'];
        }
        $dataArray['lastMonthOthers'] = $datacountOthers;

        foreach ($countGramaniladahari as $row) {
            $datacountGramaniladahari = $row['gramaNiladhari'];
        }
        $dataArray['gramaNiladhari'] = $datacountGramaniladahari;

        foreach ($countVeterinarian as $row) {

            $datacountVeterinarian = $row['veterinarian'];
        }
        $dataArray['veterinarian'] = $datacountVeterinarian;
        foreach ($countVillager as $row) {
            $datacountVillager = $row['villager'];
        }
        $dataArray['villager'] = $datacountVillager;

        foreach ($countwildlifeofficer as $row) {
            $datacountwildlifeofficer = $row['wildlifeOfficer'];
        }
        $dataArray['wildlifeOfficer'] =  $datacountwildlifeofficer;

        foreach ($countWildElephantArrivalDistrict as $row) {
            $datacountWildElephantArrivalDistrict = $row['WildElephantArrivalDistrict'];
        }
        $dataArray['lastMonthWildElephantArrivalDistrict'] = $datacountWildElephantArrivalDistrict;

        foreach ($countcropDamagesDistrict as $row) {
            $datacountcropDamagesDistrict  = $row['cropDamagesDistrict'];
        }
        $dataArray['lastMonthcropDamagesDistrict'] = $datacountcropDamagesDistrict;

        foreach ($countIllegalThingDistrict as $row) {
            $datacountIllegalThingDistrict  = $row['IllegalThing'];
        }
        $dataArray['lastMonthIllegalThingDistrict'] =  $datacountIllegalThingDistrict;

        foreach ($countElephantFenceDistrict as $row) {
            $datacountElephantFenceDistrict  = $row['ElephantFence'];
        }
        $dataArray['lastMonthElephantFenceDistrict'] = $datacountElephantFenceDistrict;

        foreach ($countWildAnimalDangerDistrict as $row) {
            $datacountWildAnimalDangerDistrict  = $row['WildAnimalDanger'];
        }
        $dataArray['lastMonthWildAnimalDangerDistrict'] = $datacountWildAnimalDangerDistrict;

        foreach ($countWildAnimalArrivalDistrict as $row) {
            $datacountWildAnimalArrivalDistrict  = $row['WildAnimalArrival'];
        }
        $dataArray['lastMonthWildAnimalArrivalDistrict'] = $datacountWildAnimalArrivalDistrict;

        foreach ($countWeekincidentdistrict as $row) {
            $datacountWeekincidentdistrict  = $row['incidentDistrictWeekly'];
        }
        $dataArray['lastWeekincidentdistrict'] = $datacountWeekincidentdistrict;

        foreach ($countMonthincidentdistrict as $row) {

            $datacountMonthincidentdistrict  = $row['incidentDistrictMontly'];
        }
        $dataArray['lastMonthincidentdistrict'] = $datacountMonthincidentdistrict;

        foreach ($countDayincidentdistrict as $row) {
            $datacountDayincidentdistrict  = $row['incidentDistrictDaily'];
        }
        $dataArray['lastDayincidentdistrict'] = $datacountDayincidentdistrict;
        foreach ($countLast3Monthincidentdistrict as $row) {
            $datacount3Monthincidentdistrict  = $row['incidentDistrict3Monthly'];
        }

        $dataArray['datacount3Monthincidentdistrict'] = $datacount3Monthincidentdistrict;

        foreach ($totalIncident as $row) {
            $datacountTotalIncident  = $row['totalincident'];
        }

        $dataArray['datacountTotalIncident'] =  $datacountTotalIncident;


        $datacount3MonthlyincidentdistrictINT = intval($datacount3Monthincidentdistrict);
        $dataTotalincident = intval($datacountTotalIncident);
        if ($dataTotalincident != 0) {
            $dataArray['districtIncidentPercentage'] =  (int)(($datacount3MonthlyincidentdistrictINT / $dataTotalincident) * 100);
        } else {
            $dataArray['districtIncidentPercentage'] = 0;
        }

        foreach ($countCentralProvinceIncident as $row) {
            $datacountCentralProvinceIncident  = $row['Central'];
        }
        $dataArray['CentralProvinceIncident'] = $datacountCentralProvinceIncident;

        foreach ($countSouthernProvinceIncident as $row) {
            $datacountSouthernProvinceIncident  = $row['Southern'];
        }
        $dataArray['SouthernProvinceIncident'] = $datacountSouthernProvinceIncident;

        foreach ($countNorthernProvinceIncident as $row) {
            $datacountNorthernProvinceIncident  = $row['Northern'];
        }
        $dataArray['NorthernProvinceIncident'] = $datacountNorthernProvinceIncident;

        foreach ($countWesternProvinceIncident as $row) {
            $datacountWesternProvinceIncident  = $row['Western'];
        }
        $dataArray['WesternProvinceIncident'] = $datacountWesternProvinceIncident;

        foreach ($countNorthWesternProvinceIncident as $row) {
            $datacountNorthWesternProvinceIncident  = $row['NorthWestern'];
        }
        $dataArray['NorthWesternProvinceIncident'] = $datacountNorthWesternProvinceIncident;

        foreach ($countNorthCentralProvinceIncident as $row) {
            $datacountNorthCentralProvinceIncident  = $row['NorthCentral'];
        }
        $dataArray['NorthCentralProvinceIncident'] = $datacountNorthCentralProvinceIncident;

        foreach ($countUvaProvinceIncident as $row) {
            $datacountUvaProvinceIncident  = $row['Uva'];
        }
        $dataArray['UvaProvinceIncident'] = $datacountUvaProvinceIncident;

        foreach ($countSabaragamuwaProvinceIncident as $row) {
            $datacountSabaragamuwaProvinceIncident  = $row['Sabaragamuwa'];
        }
        $dataArray['SabaragamuwaProvinceIncident'] = $datacountSabaragamuwaProvinceIncident;

        foreach ($countIncident12AM as $row) {
            $datacountIncident12AM  = $row['12AM'];
        }
        $dataArray['Incident12AMCount'] = $datacountIncident12AM;

        foreach ($countIncident01AM as $row) {
            $datacountIncident01AM  = $row['01AM'];
        }
        $dataArray['Incident01AMCount'] = $datacountIncident01AM;

        foreach ($countIncident02AM as $row) {
            $datacountIncident02AM  = $row['02AM'];
        }
        $dataArray['Incident02AMCount'] = $datacountIncident02AM;

        foreach ($countIncident03AM as $row) {
            $datacountIncident03AM  = $row['03AM'];
        }
        $dataArray['Incident03AMCount'] = $datacountIncident03AM;

        foreach ($countIncident04AM as $row) {
            $datacountIncident04AM  = $row['04AM'];
        }
        $dataArray['Incident04AMCount'] = $datacountIncident04AM;

        foreach ($countIncident05AM as $row) {
            $datacountIncident05AM  = $row['05AM'];
        }
        $dataArray['Incident05AMCount'] = $datacountIncident05AM;

        foreach ($countIncident06AM as $row) {
            $datacountIncident06AM  = $row['06AM'];
        }
        $dataArray['Incident06AMCount'] = $datacountIncident06AM;

        foreach ($countIncident07AM as $row) {
            $datacountIncident07AM  = $row['07AM'];
        }
        $dataArray['Incident07AMCount'] = $datacountIncident07AM;

        foreach ($countIncident08AM as $row) {
            $datacountIncident08AM  = $row['08AM'];
        }
        $dataArray['Incident08AMCount'] =  $datacountIncident08AM;

        foreach ($countIncident09AM as $row) {
            $datacountIncident09AM  = $row['09AM'];
        }
        $dataArray['Incident09AMCount'] = $datacountIncident09AM;

        foreach ($countIncident10AM as $row) {
            $datacountIncident10AM  = $row['10AM'];
        }
        $dataArray['Incident10AMCount'] = $datacountIncident10AM;

        foreach ($countIncident11AM as $row) {
            $datacountIncident11AM  = $row['11AM'];
        }
        $dataArray['Incident11AMCount'] = $datacountIncident11AM;

        foreach ($countIncident12PM as $row) {
            $datacountIncident12PM  = $row['12PM'];
        }
        $dataArray['Incident12PMCount'] = $datacountIncident12PM;

        foreach ($countIncident01PM as $row) {
            $datacountIncident01PM  = $row['01PM'];
        }
        $dataArray['Incident01PMCount'] = $datacountIncident01PM;

        foreach ($countIncident02PM as $row) {
            $datacountIncident02PM  = $row['02PM'];
        }
        $dataArray['Incident02PMCount'] = $datacountIncident02PM;

        foreach ($countIncident03PM as $row) {
            $datacountIncident03PM  = $row['03PM'];
        }
        $dataArray['Incident03PMCount'] = $datacountIncident03PM;

        foreach ($countIncident04PM as $row) {
            $datacountIncident04PM  = $row['04PM'];
        }
        $dataArray['Incident04PMCount'] = $datacountIncident04PM;

        foreach ($countIncident05PM as $row) {
            $datacountIncident05PM  = $row['05PM'];
        }
        $dataArray['Incident05PMCount'] = $datacountIncident05PM;

        foreach ($countIncident06PM as $row) {
            $datacountIncident06PM  = $row['06PM'];
        }
        $dataArray['Incident06PMCount'] = $datacountIncident06PM;

        foreach ($countIncident07PM as $row) {
            $datacountIncident07PM  = $row['07PM'];
        }
        $dataArray['Incident07PMCount'] = $datacountIncident07PM;

        foreach ($countIncident08PM as $row) {
            $datacountIncident08PM  = $row['08PM'];
        }
        $dataArray['Incident08PMCount'] = $datacountIncident08PM;

        foreach ($countIncident09PM as $row) {
            $datacountIncident09PM  = $row['09PM'];
        }
        $dataArray['Incident09PMCount'] = $datacountIncident09PM;

        foreach ($countIncident10PM as $row) {
            $datacountIncident10PM  = $row['10PM'];
        }
        $dataArray['Incident10PMCount'] = $datacountIncident10PM;

        foreach ($countIncident11PM as $row) {
            $datacountIncident11PM  = $row['11PM'];
        }
        $dataArray['Incident11PMCount'] = $datacountIncident11PM;

        foreach ($countIncidentJan as $row) {
            $datacountIncidentJan  = $row['Jan'];
        }
        $dataArray['IncidentJanCount'] = $datacountIncidentJan;

        foreach ($countIncidentFeb as $row) {
            $datacountIncidentFeb  = $row['Feb'];
        }
        $dataArray['IncidentFebCount'] = $datacountIncidentFeb;


        foreach ($countIncidentMarch as $row) {
            $datacountIncidentMarch  = $row['March'];
        }
        $dataArray['IncidentMarchCount'] = $datacountIncidentMarch;


        foreach ($countIncidentApril as $row) {
            $datacountIncidentApril  = $row['April'];
        }
        $dataArray['IncidentAprilCount'] = $datacountIncidentApril;


        foreach ($countIncidentMay as $row) {
            $datacountIncidentMay  = $row['May'];
        }
        $dataArray['IncidentMayCount'] = $datacountIncidentMay;


        foreach ($countIncidentJune as $row) {
            $datacountIncidentJune  = $row['June'];
        }
        $dataArray['IncidentJuneCount'] =  $datacountIncidentJune;




        foreach ($countIncidentJuly as $row) {
            $datacountIncidentJuly  = $row['July'];
        }
        $dataArray['IncidentJulyCount'] = $datacountIncidentJuly;


        foreach ($countIncidentAug as $row) {
            $datacountIncidentAug  = $row['Aug'];
        }
        $dataArray['IncidentAugCount'] = $datacountIncidentAug;


        foreach ($countIncidentSep as $row) {
            $datacountIncidentSep  = $row['Sep'];
        }
        $dataArray['IncidentSepCount'] = $datacountIncidentSep;


        foreach ($countIncidentOct as $row) {
            $datacountIncidentOct  = $row['Oct'];
        }
        $dataArray['IncidentOctCount'] = $datacountIncidentOct;

        foreach ($countIncidentNov as $row) {
            $datacountIncidentNov  = $row['Nov'];
        }
        $dataArray['IncidentNovCount'] = $datacountIncidentNov;


        foreach ($countIncidentDec as $row) {
            $datacountIncidentDec  = $row['Dece'];
        }
        $dataArray['IncidentDecCount'] = $datacountIncidentDec;

        $dataArray['district'] = $this->model->selectDistrictveterinarian($_SESSION['NIC']);
        switch ($type) {

            case 1:

                $this->view->render('veterinarianDashboard', $dataArray);

                break;
            case 2:

                $this->view->render('veterinarianDashboardSinhala', $dataArray);
                break;
            case 3:

                $this->view->render('veterinarianDashboardTamil', $dataArray);
                break;
        }
  public function getNotice(){
        $NIC=$_SESSION["NIC"];

        $lastNoticeID=$this->model->getLastNoticeId($NIC);
        $officeNum=$this->model->getUserOfficeNumber($NIC);
        $newNoticeDetails=$this->model->getNewNoticeDetails($officeNum,$lastNoticeID);

        if($newNoticeDetails!="No"){

            $noticeHtml="

        <div id=\"new-notice\">

           <img src=\"../Public/images/notice.jpg\">
           <h1>Date:".$newNoticeDetails["date"]."&emsp;Time:".$newNoticeDetails["time"]."</h1>
           <p>".$newNoticeDetails["description"]."</p>
           <audio id=\"audio\" autoplay loop  controls src=\"http://www.raypinson.com/ringtones/CarAlarm.mp3\"></audio>
           <button id=\"ok-btn\" value=".$newNoticeDetails["noticeID"]." onclick=\"endNotice(this.value)\">Okay</button>


        </div>




        ";

        echo $noticeHtml;

        }

        




    }


    public function endNotice(){

        $noticeId=$_POST["noticeId"];
        $url=$_GET['url'];
        $url  = rtrim($url,'/');
        $url  = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);

        $this->model->updateNotice($noticeId,$_SESSION["NIC"]);
        header("Location: ../veterinarian/".$url[1]);

    }
}
