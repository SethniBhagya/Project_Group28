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


    function insertData($firstName, $lastName, $address, $gender ,$userNic,$userPassword, $userEmail, $userMobileNumber, $userDataofBirth, $GNDivision,$district,$province){                                                

        $this->db->runQuery("INSERT INTO `user`(`NIC`, `Fname`, `Lname`, `mobileNo`, `BOD`, `Address`, `jobType`, `email`, `gender`) VALUES ('$userNic','$firstName','$lastName','$userMobileNumber','$userDataofBirth','$address','villager','$userEmail', '$gender')");
        $hashPassword = password_hash($userPassword,PASSWORD_DEFAULT);
        $this->db->runQuery("INSERT INTO `login`(`userName`, `userpassword`) VALUES ('$userNic','$hashPassword')");    
        $this->db->runQuery("INSERT INTO `villager`(`NIC`) VALUES ('$userNic')");
        $this->db->runQuery("INSERT INTO `lives`(`villager_NIC`, `gramaniladhari_NIC`, `village_code`, `province`, `district`) VALUES ((SELECT `NIC` FROM `villager` WHERE NIC= '$userNic' ), (SELECT `NIC` FROM `grama_niladhari` WHERE GND= (SELECT `GND_Code`  FROM `gn_division` WHERE name= '$GNDivision'  )) ,(SELECT `village_code` FROM `village` WHERE GND_Code=(SELECT `GND_Code`  FROM `gn_division` WHERE name= '$GNDivision' )),'$province','$district') ");
        $this->db->runQuery("INSERT INTO `villager_registration`(`villager_NIC`, `registrationStatus`  ) VALUES ('$userNic'  , 'pending')");
        $this->db->runQuery("INSERT INTO `alert`(`NIC`, `alertstatus`) VALUES ('$userNic'  , 'newreg')");
    }
    public function getName($id){
        return $this->db->runQuery("SELECT * FROM user WHERE user.NIC ='$id'");
    }
    public function getVillagerIncident($id ){
         return $this->db->runQuery( "SELECT COUNT(reported_incident.incidentID) AS villagerIncident FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( ( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&(lives.villager_NIC='$id'))  ");
     } 
   
    public function getVillagerWildElephantArrivalIncident($id ){
         
        return $this->db->runQuery( "SELECT COUNT(reported_incident.incidentID) AS villagerIncidentWildElephantArrival FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((  reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Wild Elephant are in The Village')&&(lives.Villager_NIC='$id'))  ");
     }
     public function getVillagerWildAnimalsDangerIncident($id ){
         
        return $this->db->runQuery( "SELECT COUNT(reported_incident.incidentID) AS villagerIncidentWildAnimalsDanger FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((  reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Wild Animal Danger')&&(lives.Villager_NIC='$id'))  ");
     }
     public function getVillagerCropDamagesIncident($id ){
         
        return $this->db->runQuery( "SELECT COUNT(reported_incident.incidentID) AS villagerIncidentCropDamages FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((  reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Crop Damages')&&(lives.Villager_NIC='$id'))  ");
     }
     public function getVillagerIncidentacceptwildlifeOfficer($id ){
        return $this->db->runQuery( "SELECT COUNT(reported_incident.incidentID) AS acceptwildlifeOfficer FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( ( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&(lives.villager_NIC='$id')&&( reported_incident.reporttype !='Crop Damages')&&(reported_incident.status = 'accept') ) ");
    }
    public function getVillagerIncidentacceptGramaseweka($id ){
         
        return $this->db->runQuery( "SELECT COUNT(reported_incident.incidentID) AS acceptGramaseweka FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((  reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Crop Damages')&&(reported_incident.status = 'accept')&&(lives.Villager_NIC='$id'))  ");
     }
     
     public function getlastincident($id){
         return  $this->db->runQuery( "SELECT * FROM reported_incident WHERE reported_incident.villager_NIC = '$id'  ORDER BY incidentID DESC LIMIT 1   ");
     }
     public function profileData($villagerId){
        return $this->db->runQuery("SELECT * FROM `user` WHERE NIC ='$villagerId' ");
     }
     public function getProvince($villagerId){
        return $this->db->runQuery("SELECT province FROM lives WHERE Villager_NIC= '$villagerId'");
    }
     public function getDistrict($villagerId){
         return $this->db->runQuery("SELECT district FROM lives WHERE Villager_NIC= '$villagerId'");
     }
     public function getGramaniladhariDivision($villagerId){
        return $this->db->runQuery("SELECT  gn_division.name FROM gn_division INNER JOIN grama_niladhari ON gn_division.GND_Code = grama_niladhari.GND INNER JOIN lives ON lives.gramaniladhari_NIC  = grama_niladhari.NIC WHERE lives.villager_NIC='$villagerId' ");
    }
    public function getHashPassword($villagerId){
        return $this->db->runQuery("SELECT userPassword FROM `login` WHERE userName= '$villagerId'");
    }
    public function getNotification($NIC){
        return $this->db->runQuery("SELECT * FROM `notification` WHERE NIC= '$NIC' ORDER BY `no` DESC  LIMIT 10");
    }
    public function getAlerStatus($NIC){
        return $this->db->runQuery("SELECT `alertstatus` FROM `alert` WHERE NIC= '$NIC'");
    }
    public function setAlerStatus($NIC){
        $this->db->runQuery("UPDATE `alert` SET  `alertstatus`='view'    WHERE NIC= '$NIC'");
        
    } 
    public function getNotificationStatus($NIC){
        return $this->db->runQuery("SELECT COUNT(*) AS numberofnotification FROM `notification` WHERE NIC= '$NIC' and`status`='notview'");
    }
    public function setNotificationStatus($NIC){
        $getnumbers = $this->db->runQuery("SELECT `no` AS numbers FROM `notification` WHERE NIC= '$NIC'");
        foreach  ($getnumbers AS $row){
             $number = $row['numbers'];
             $this->db->runQuery("UPDATE `notification` SET  `status`='view'  WHERE `no`= $number ");

        }
 
        
    } 

}