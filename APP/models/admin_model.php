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
		$fname=$data["fname"];
		$lname=$data["lname"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="Grama Niladhari";
		$email=$data["email"];
		$gender=$data["gender"];
		$gic=$data["gic"];

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO grama_niladhari VALUES('$nic','$gic')";

		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
	}

	public function woAdd($data){

		$nic=$data["nic"];
		$fname=$data["fname"];
		$lname=$data["lname"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="Wildlife Officer";
		$email=$data["email"];
		$gender=$data["gender"];
		$wid=$data["wid"];
		$officeNum=$data["officeNum"];

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO wildlife_officer VALUES('$nic','$wid','$officeNum')";
		
		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
	}
}