<?php
class villager_model extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function selectData($userName){
        return $this->db->runQuery("SELECT * from user WHERE NIC= '$userName'");

    }
      
    function insertData($firstName, $lastName, $address, $gender ,$userNic,$userPassword, $userEmail, $userMobileNumber, $userDataofBirth, $GNDivision,$province,$district){                                                    
        $this->db->runQuery("INSERT INTO `user`(`NIC`, `Fname`, `Lname`, `email` , `mobileNo`, `BOD`, `Address`, `jobType`) VALUES ('$userNic','$firstName','$lastName','$userEmail','$userMobileNumber','$userDataofBirth','$address','villager')");
        $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        $this->db->runQuery("INSERT INTO `login`(`userName`, `password`) VALUES ('$userNic','$userPassword')");
    }


}
 