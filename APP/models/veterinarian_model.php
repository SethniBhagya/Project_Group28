<?php
class veterinarian_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function selectData($userName)
    {
        $details = $this->db->runQuery("SELECT * from user WHERE NIC= '$userName'");
        $office_no = $this->db->runQuery("SELECT officeNo from veterinarian WHERE NIC= '$userName'");
        $no = $office_no[0]['officeNo'];
        $details[1] = $this->db->runQuery("SELECT address from regional_wildlife_office WHERE officeNo= '$no' ")[0]; //get district

        return $details;
    }

    function selectIncidentDataEx()
    {
        $details = $this->db->runQuery("SELECT * from reported_incident WHERE sendToVetStatus= 'visible'");

        return $details;
    }
    function selectIncidentData()
    {
        $details = $this->db->runQuery("SELECT * from reported_incident WHERE sendToVetStatus= 'visible'");
        $joindetails = $this->db->runQuery("SELECT work.wildlife_NIC,work.incidentID,reported_incident.status,user.Fname,user.Lname FROM reported_incident INNER JOIN work ON reported_incident.incidentID= work.incidentID INNER JOIN user ON user.NIC=work.wildlife_NIC");
        // print_r($joindetails);
        return [$details, $joindetails];
    }
    public function incidentStatUpdate($state, $ID, $nic)
    {
        if ($state == 'success') {
            $stmt2 = "UPDATE reported_incident SET vetStatus='$state' WHERE incidentID='$ID'; UPDATE work SET vet_NIC='$nic' WHERE incidentID='$ID'";
        } else {
            $stmt2 = "UPDATE reported_incident SET vetStatus='$state' WHERE incidentID='$ID'; UPDATE work SET vet_NIC='$nic' WHERE incidentID='$ID'";
        }


        $result1 = $this->db->runQuery($stmt2);

        return $result1;
    }
    function updateData($userName, $data)
    {

        $fname = $data["fName"];
        $lname = $data["lName"];
        //$nic=$data["nic"];
        // $mob=$data["mob"];
        //$gender=$data["gender"];
        // $dob = $data["dob"];
        $address = $data["address"];
        $mob = $data["mob"];
        $email = $data["email"];
        $office_address = $data["office_address"];
        $office_no = $this->db->runQuery("SELECT officeNo from regional_wildlife_office WHERE address= '$office_address'")[0]['officeNo'];







        $stmt1 = "UPDATE user SET  Fname='$fname', Lname='$lname', mobileNo='$mob',Address='$address',email='$email' WHERE NIC= '$userName'";
        $stmt2 = "UPDATE veterinarian SET officeNo='$office_no' WHERE NIC='$userName'";
        //$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";

        $result[0] = $this->db->runQuery($stmt1);
        // //return $result;
        $result[1] = $this->db->runQuery($stmt2);
        //$this->db->runQuery($stmt3);
        return $result;
    }
    function selectNotificationsData()
    {
        $details = $this->db->runQuery("SELECT * from notice WHERE jobType='veterinarian' order by date,time desc");
        //$joindetails = $this->db->runQuery("SELECT work.wildlife_NIC,work.incidentID,reported_incident.status,user.Fname,user.Lname FROM reported_incident INNER JOIN work ON reported_incident.incidentID= work.incidentID INNER JOIN user ON user.NIC=work.wildlife_NIC");
        // print_r($joindetails);
        return $details;
    }

        public function getLastNoticeId($NIC)
    {
        $lastNoticeId=(($this->db->runQuery("SELECT lastNoticeId FROM user WHERE NIC='$NIC'"))[0])["lastNoticeId"];
        return $lastNoticeId;
    }

    public function getUserOfficeNumber($NIC){
        $officeNum=(($this->db->runQuery("SELECT officeNo FROM veterinarian WHERE NIC='$NIC'"))[0])["officeNo"];
        return $officeNum;
    }

    public function getNewNoticeDetails($officeNum,$lastNoticeId){

        $newNoticeId=$this->db->runQuery("SELECT * FROM notice_has_wildlifeoffice_village WHERE officeNo='$officeNum' AND noticeID>'$lastNoticeId' AND jobType='veterinarian'");

        if(!empty($newNoticeId))
        {
            $latestNoticeId=($newNoticeId[0])["noticeID"];

            $detialsOfNotice=($this->db->runQuery("SELECT * FROM notice WHERE noticeID='$latestNoticeId'"))[0];

            return $detialsOfNotice;

        }
        else
            return "No";
    }

    public function updateNotice($noticeId,$nic)
    {
        $this->db->runQuery("UPDATE user SET lastNoticeId='$noticeId' WHERE NIC='$nic'");
    }
}
