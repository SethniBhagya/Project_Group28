<?php
class user_model extends Model{

    function __construct(){
        parent::__construct();
    }
    function getData(){
        return $this->db->runQuery("SELECT * from user");

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
    public function profileData($userid){
          return $this->db->runQuery("SELECT * FROM `user` WHERE NIC ='$userid' ");
    }
}