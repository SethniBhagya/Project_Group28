<?php
class user_model extends Model{

    function __construct(){
        parent::__construct();
    }
    function getData($villager_NIC){
        return $this->db->runQuery("SELECT * from user INNER JOIN villager_registration ON user.villager_NIC = villager_registration.villager_NIC WHERE user.villager_NIC='$villager_NIC'");

    }

    function selectData($userName){
        return $this->db->runQuery("SELECT * from user WHERE NIC= '$userName'");
    }
    
    public function login($username,$password){

    	$loginData=[

    		"Fname"=>"",
    		"Lname"=>"",
    		"NIC"=>"",
    		"jobtype"=>"",
    		"Error"=>""


    	];
        $stmt="SELECT * FROM Login WHERE userName='$username'";
    	$row=$this->db->runQuery($stmt);
        if(!empty($row))
            $row=$row[0];
    	if(!empty($row))
    	{     
              $hashPassword=$row["userPassword"];
             if(password_verify($password,$hashPassword))
              {
               	$stmt="SELECT * FROM user WHERE NIC='$username'";
               	$row=$this->db->runQuery($stmt)[0];
             	 $loginData["Fname"]=$row["Fname"];
             	 $loginData["Lname"]=$row["Lname"];
             	 $loginData["NIC"]=$row["NIC"];
             	 $loginData["jobtype"]=$row["jobType"];

             	 
             	 return $loginData;
               

             }
             else{
             	$loginData["Error"]="Wrong password!! Please try again..";
             	return $loginData;
             }


    	}
    	else
    	{
    		$loginData["Error"]="Wrong username!! Please try again..";
            return $loginData;
    	}



    }

    public function resetPasswordStore($userName,$selector,$token,$url,$expire){
       
        $hashedToken=password_hash($token, PASSWORD_DEFAULT);
        $email=(($this->db->runQuery("SELECT email FROM user WHERE NIC='$userName'"))[0])["email"];
       if(!empty($email)){
        $stmt1="DELETE FROM reset_password WHERE resetUserName='$userName'";
       $this->db->runQuery($stmt1);

       $stmt2="INSERT INTO reset_password (resetEmail,resetUserName,resetSelector,resetToken,resetExpire) VALUES('$email','$userName','$selector','$hashedToken','$expire') ";
        $this->db->runQuery($stmt2);

        return $email;
    }
    

    }

    public function resetPassword($nic,$password,$selector,$validator){
        $hashPassword=password_hash($password, PASSWORD_DEFAULT);

        $row=($this->db->runQuery("SELECT * FROM reset_password WHERE resetUserName='$nic'"))[0];
        if(!empty($row)){
            $validatorBin=hex2bin($validator);
            if(password_verify($validatorBin, $row["resetToken"])){

                $this->db->runQuery("UPDATE login SET userPassword='$hashPassword' WHERE userName='$nic'");
                return true;

            }
            else{
                return false;
            }

        }
        else{
            return false;
        }



 
    }
    
    function emergencyReport($id, $noOfelephant, $placeStatus,$photo,$place , $latitude,$longitude){
        date_default_timezone_set('Asia/Kolkata');
        $time =  date("h:i:sa");
        $time =  date("H:i:s"); 
        $date = date("Y-m-d"); 
        $divisionName = $this->db->runQuery("SELECT   gn_division.name AS divisionName FROM   grama_niladhari INNER JOIN lives  ON lives.gramaniladhari_NIC=grama_niladhari.NIC  INNER JOIN gn_division ON gn_division.GND_Code=grama_niladhari.GND  WHERE lives.villager_NIC= '$id' ");
        foreach($divisionName as $row) {
            $divisionNamevillagers = $row['divisionName'];
        }
        $villagers = $this->db->runQuery("SELECT   lives.villager_NIC AS villagerNIC  FROM   grama_niladhari INNER JOIN lives  ON lives.gramaniladhari_NIC=grama_niladhari.NIC  INNER JOIN gn_division ON gn_division.GND_Code=grama_niladhari.GND  WHERE  gn_division.name='$divisionNamevillagers' "); 
        $this->db->runQuery("INSERT INTO `reported_incident`(`incidentID`,`gramaniladari_NIC`,`villager_NIC`,  `village_code`, `officeNo`,`time_in`, `date`, `image`, `status`, `description`,`Place`, `lat`, `lon`,`reporttype`) VALUES ( '',(SELECT  `gramaniladhari_NIC` FROM `lives` WHERE villager_NIC= '$id' ), (SELECT `NIC` FROM `villager` WHERE NIC= '$id'), (SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' ),(SELECT  `officeNo` FROM `village` WHERE village_code=(SELECT  `village_code` FROM `lives` WHERE villager_NIC= '$id' )),  '$time', '$date', '$photo','pending','','$place',' $latitude','$longitude','Wild Elephant are in The Village' )"); 
        $this->db->runQuery("INSERT INTO `elephants_in_village`(`incidentID`, `In Your Registered Village`, `no_of_elephants`) VALUES ((SELECT  `incidentID` FROM `reported_incident` WHERE   time_in='$time' ),'$placeStatus','$noOfelephant')");
         foreach( $villagers as $row) {
          
            $villagerNIC =  $row['villagerNIC'];
            $this->db->runQuery("UPDATE `alert` SET  `alertstatus`='notview'    WHERE NIC= '$villagerNIC' ");  
            $this->db->runQuery("UPDATE `alert` SET  `alertstatus`='view'    WHERE NIC= '$id' "); 
        }
    }
    public function getAlerStatus($NIC){
        return $this->db->runQuery("SELECT `alertstatus` FROM `alert` WHERE NIC= '$NIC'");
    }
    public function setAlerStatus($NIC){
        $this->db->runQuery("UPDATE `alert` SET  `alertstatus`='view'    WHERE NIC= '$NIC'");
        
    } 
     
}