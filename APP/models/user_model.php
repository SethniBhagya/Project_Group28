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
    	$row=$this->db->runQuery($stmt)[0];
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
             	$loginData["Error"]="Wrong password";
             	return $loginData;
             }


    	}
    	else
    	{
    		$loginData["Error"]="Wrong username";
            return $loginData;
    	}



    }
}