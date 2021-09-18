<?php
class villager_model extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function selectData($userName){
        return $this->db->runQuery("SELECT * from user WHERE NIC='$userName'");

    }
      
    function insertData($firstName, $lastName, $address, $gender ,$userNic,$userPassword, $userEmail, $userMobileNumber, $userDataofBirth, $GNDivision,$province,$district){                                                    
<<<<<<< HEAD
        $this->db->runQuery("INSERT INTO `user`(`NIC`, `Fname`, `Lname`, `gender`, `email` , `mobileNo`, `BOD`, `Address`, `jobType`) VALUES ('$userNic','$firstName','$lastName','$gender','$userEmail','$userMobileNumber','$userDataofBirth','$address','villager')");
        $hashPassword = sha1($userPassword);
        $this->db->runQuery("INSERT INTO `login`(`userName`, `password`) VALUES ('$userNic','$hashPassword')");
=======
        $this->db->runQuery("INSERT INTO `user`(`NIC`, `Fname`, `Lname`, `email` , `mobileNo`, `BOD`, `Address`, `jobType`) VALUES ('$userNic','$firstName','$lastName','$userEmail','$userMobileNumber','$userDataofBirth','$address','villager')");
        $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        $this->db->runQuery("INSERT INTO `login`(`userName`, `userPassword`) VALUES ('$userNic','$hashPassword')");
>>>>>>> da15f4c489deae86c5ca5bd66e7c47ae815877c8
    }


}
 