<?php

class admin_model extends Model{

	function __construct(){
		parent::__construct();
	}




	public function checkMail($mail){

		$stmt="SELECT * FROM user where email='$mail'";
		$row=$this->db->runQuery($stmt);

		if(empty($row))
			return false;
		else
			return true;
	}

	public function gnAdd($data){

		$nic=$data["nic"];
		$fname=$data["fName"];
		$lname=$data["lName"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="Grama Niladhari";
		$email=$data["email"];
		$gender=$data["gender"];
		$gic=$data["gic"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);
        
		$stmt1="INSERT INTO user VALUES('$nic','$fName','$lName','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO grama_niladhari VALUES('$nic','$gic')";
		$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";

		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
		$this->db->runQuery($stmt3);
	}

	public function woAdd($data){

		$nic=$data["nic"];
		$fname=$data["fName"];
		$lname=$data["lName"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="Wildlife Officer";
		$email=$data["email"];
		$gender=$data["gender"];
		$wid=$data["wid"];
		$officeNum=$data["officeNum"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO wildlife_officer VALUES('$nic','$wid','$officeNum')";
		$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";
		
		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
		$this->db->runQuery($stmt3);
	}


	public function vetAdd($data){

		$nic=$data["nic"];
		$fname=$data["fName"];
		$lname=$data["lName"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="Wildlife Officer";
		$email=$data["email"];
		$gender=$data["gender"];
		$vid=$data["vid"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO veterinarian VALUES('$nic','$vid')";
		$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";
		
		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
		$this->db->runQuery($stmt3);
	}


	public function vilAdd($data){

		$nic=$data["nic"];
		$fname=$data["fName"];
		$lname=$data["lName"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="Wildlife Officer";
		$email=$data["email"];
		$gender=$data["gender"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO villager VALUES('$nic')";
		$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";
		
		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
		$this->db->runQuery($stmt3);
	}







}