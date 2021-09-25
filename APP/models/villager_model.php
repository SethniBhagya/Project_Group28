<?php
class villager_model extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function selectData(){
        return $this->db->runQuery("SELECT * FROM `user`");
   }

    function insertData($firstName, $lastName, $address, $gender ,$userNic,$userPassword, $userEmail, $userMobileNumber, $userDataofBirth, $GNDivision,$province,$district){                                                    

        $this->db->runQuery("INSERT INTO `user`(`NIC`, `Fname`, `Lname`, `mobileNo`, `BOD`, `Address`, `jobType`, `email`, `gender`) VALUES ('$userNic','$firstName','$lastName','$userMobileNumber','$userDataofBirth','$address','villager','$userEmail', '$gender')");
        $hashPassword = sha1($userPassword);
        $this->db->runQuery("INSERT INTO `login`(`userName`, `userpassword`) VALUES ('$userNic','$hashPassword')");    
        $this->db->runQuery("INSERT INTO `villager`(`NIC`) VALUES ('$userNic')");
 
    }
   


}
 