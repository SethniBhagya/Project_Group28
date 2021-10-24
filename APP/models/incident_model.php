<?php 

class incident_model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function insertReport1($id, $noOfelephant, $placeStatus,$photo,$place , $latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $date = date("Y-m-d"); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC= '$id' ), (SELECT `NIC` FROM `villager` WHERE NIC= '$id'), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' )),  '$time', '$date', '$photo','pending','','$place',' $latitude','$longitude','Wild Elephant are in The Village' )"); 
        $this->db->runQuery("INSERT INTO `elephants_in_village`(`incidentID`, `In Your Registered Village`, `no_of_elephants`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ),'$placeStatus','$noOfelephant')");
    }
    function insertReport2($id,$animalType,$noOfanimal, $description,$photo,$place,$latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $date = date("Y-m-d"); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC= '$id' ), (SELECT `NIC` FROM `villager` WHERE NIC= '$id'), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' )),  '$time', '$date', '$photo','pending','$description','$place', '$latitude','$longitude','Other Wild Animal Come  Village')"); 
        $this->db->runQuery("INSERT INTO `other_animals_in_village`(`incidentID`, `animal`, `no_of_animals`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ),'$animalType','$noOfanimal')");
    }

    function insertReport3($id,$photo,$place,$latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $date = date("Y-m-d"); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC='$id' ), (SELECT `NIC` FROM `villager` WHERE NIC= '$id'), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' )),  '$time', '$date', '$photo','pending',' ','$place',' $latitude','$longitude','Breakdown of Elephant Fence')"); 
        
        $this->db->runQuery("INSERT INTO `breakdown_fence`(`incidentID`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ))");
    }
    function insertReport4($id,$animalType,$cultivatedCrop,$cultivatedLand,$photo,$place,$damageLand,$latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $date = date("Y-m-d"); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC= '$id' ), (SELECT `NIC` FROM `villager` WHERE NIC= '$id'), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' )),  '$time', '$date', '$photo','pending',' ','$place',' $latitude','$longitude','Crop Damages')"); 
        $this->db->runQuery("INSERT INTO `crop_damage`(`incidentID`, `animal_cause_to_damage`, `cultivated_crop`, `cultivated_land_extent`, `damaged_land_extent`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ),'$animalType','$cultivatedCrop','$cultivatedLand','$damageLand')");
    }
    function insertReport5($id,$animal,$noOfanimals,$support,$discription,$photo,$place,$latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $date = date("Y-m-d"); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC= '$id' ), (SELECT `NIC` FROM `villager` WHEREs  NIC= '$id'), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' )),  '$time', '$date', '$photo','pending',' $discription','$place','$latitude','$longitude','Wild Animal Danger')"); 
        $this->db->runQuery("INSERT INTO `animal_is_in_danger`(`incidentID`, `animal`, `no_of_animals`, `vet_support`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ),'$animal','$noOfanimals ','$support')") ;
    }
    function insertReport6($id,$photo,$place,$latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $date = date("Y-m-d"); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC= $id ), (SELECT `NIC` FROM `villager` WHERE NIC= $id), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= $id ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= $id )),  '$time', '$date', '$photo','pending',' ','$place',' $latitude','$longitude','Illegal Thing happening the Forest')"); 
        
        $this->db->runQuery("INSERT INTO `illegal_things`(`incidentID`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ))");
    }
    function getdatalimit($start,$rowsPer){
        return $this->db->runQuery("SELECT * FROM `reported_incident`   LIMIT {$start} , {$rowsPer}  ");

    }
    function getReportrows(){
        return $this->db->numberofrows("SELECT count(*) as total_rows FROM `reported_incident` ");
    }
    function getData(){
        return $this->db->runQuery("SELECT * FROM   `reported_incident`");
        
    }
    function getReport($incidentID){
        return $this->db->runQuery("SELECT * FROM   `reported_incident` WHERE incidentID='$incidentID' ");
    }
    
}
  
?>