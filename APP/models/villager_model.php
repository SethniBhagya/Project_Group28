<?php
class villager_model extends Model{

    function __construct()
    {
        parent::__construct();
    }
   
    function getGrmaniladariDivision(){
        return $this->db->runQuery("SELECT * FROM `gn_division` ");
    }
    
    function selectData(){
        return $this->db->runQuery("SELECT * FROM `user`");
   }


    function insertData($firstName, $lastName, $address, $gender ,$userNic,$userPassword, $userEmail, $userMobileNumber, $userDataofBirth, $GNDivision,$province,$district){                                                    

        $this->db->runQuery("INSERT INTO `user`(`NIC`, `Fname`, `Lname`, `mobileNo`, `BOD`, `Address`, `jobType`, `email`, `gender`) VALUES ('$userNic','$firstName','$lastName','$userMobileNumber','$userDataofBirth','$address','villager','$userEmail', '$gender')");
        $hashPassword = password_hash($userPassword,PASSWORD_DEFAULT);
        $this->db->runQuery("INSERT INTO `login`(`userName`, `userpassword`) VALUES ('$userNic','$hashPassword')");    
        $this->db->runQuery("INSERT INTO `villager`(`NIC`) VALUES ('$userNic')");
       
        $this->db->runQuery("INSERT INTO `lives`(`villager_NIC`, `gramaniladhari_NIC`, `village_code`) VALUES ((SELECT `NIC` FROM `villager` WHERE NIC= '$userNic' ), (SELECT `NIC` FROM `grama_niladhari` WHERE GND= (SELECT `GND_Code`  FROM `gn_division` WHERE name= '$GNDivision'  )) ,(SELECT `village_code` FROM `village` WHERE GND_Code=(SELECT `GND_Code`  FROM `gn_division` WHERE name= '$GNDivision' ))) ");
 
    }



       public function getLastNoticeId($NIC)
    {
        $lastNoticeId=(($this->db->runQuery("SELECT lastNoticeId FROM user WHERE NIC='$NIC'"))[0])["lastNoticeId"];
        return $lastNoticeId;
    }

    public function getUserVillageCode($NIC){
        $villageCode=(($this->db->runQuery("SELECT village_code FROM lives WHERE villager_NIC='$NIC'"))[0])["village_code"];
        return $villageCode;
    }

    public function getNewNoticeDetails($villageCode,$lastNoticeId){

        $newNoticeId=$this->db->runQuery("SELECT * FROM notice_has_wildlifeoffice_village WHERE village_code='$villageCode' AND noticeID>'$lastNoticeId' AND jobType='villager'");

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
 