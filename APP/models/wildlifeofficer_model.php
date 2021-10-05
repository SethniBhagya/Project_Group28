<?php
class Wildlifeofficer_model extends Model 
{
    function __construct()
    {
        parent::__construct();
    }

    function selectData($userName){
        $details= 
        
        $this->db->runQuery("SELECT * from user WHERE NIC= '$userName'");
        $office_no=$this->db->runQuery("SELECT officeNo from wildlife_officer WHERE NIC= '$userName'");
        $no=$office_no[0]['officeNo'];
        $details[1]=$this->db->runQuery("SELECT address from regional_wildlife_office WHERE officeNo= '$no' ")[0];//get district

        return $details;
    }
    function updateData($userName,$data){
        
		$fname=$data["fName"];
		$lname=$data["lName"];
		$nic=$data["nic"];
		// $mob=$data["mob"];
		$gender=$data["gender"];
		$dob=$data["dob"];
		$address=$data["address"];
		$email=$data["email"];
		
		
		
	
		
	

		$stmt1="UPDATE user SET NIC='$nic', Fname='$fname', Lname='$lname', BOD='$dob',Address='$address',email='$email', gender='$gender' WHERE NIC= '$userName'";
		//$stmt2="INSERT INTO wildlife_officer VALUES('$nic','$wid','$officeNum')";
		//$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";
		
		$result=$this->db->runQuery($stmt1);
		return $result;
		//$this->db->runQuery($stmt2);
		//$this->db->runQuery($stmt3);
    }

    
}


?>