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

	public function checkMobile($mobile){

		$stmt="SELECT * FROM user where mobileNo='$mobile'";
		$row=$this->db->runQuery($stmt);

		if(empty($row))
			return false;
		else
			return true;
	}

	public function checkNIC($nic){

		$stmt="SELECT * FROM user where NIC='$nic'";
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
		$province=$data["province"];
		$district=$data["district"];
		$gnd=$data["gnd"];
		$gic=$data["gic"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);
        
		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO grama_niladhari VALUES('$nic','$gic')";
		$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";
		$gnd_code=(($this->db->runQuery("SELECT GND_Code FROM gn_division WHERE name='$gnd' AND district_name='$district'"))[0])["GND_Code"];
		$stmt4="UPDATE village SET grama_niladhari_NIC='$nic' WHERE GND_Code='$gnd_code'";
        
		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
		$this->db->runQuery($stmt3);
		$this->db->runQuery($stmt4);
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


	public function roAdd($data){

		$nic=$data["nic"];
		$fname=$data["fName"];
		$lname=$data["lName"];
		$mob=$data["mob"];
		$dob=$data["dob"];
		$address=$data["address"];
		$userType="regional Officer";
		$email=$data["email"];
		$gender=$data["gender"];
		$rid=$data["rid"];
		$officeNum=$data["officeNum"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO regional_officer VALUES('$nic','$rid','$officeNum')";
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
		$userType="veterinarian";
		$email=$data["email"];
		$gender=$data["gender"];
		$vid=$data["vid"];
		$officeNum=$data["officeNum"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO veterinarian VALUES('$nic','$vid','$officeNum')";
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
		$userType="villager";
		$email=$data["email"];
		$gender=$data["gender"];
		$village=$data["village"];
		$province=$data["province"];
		$district=$data["district"];
		$gnd=$data["gnd"];
		$hashPassword=password_hash($data["password"], PASSWORD_DEFAULT);

		$stmt1="INSERT INTO user VALUES('$nic','$fname','$lname','$mob','$dob','$address','$userType','$email','$gender')";
		$stmt2="INSERT INTO villager VALUES('$nic')";
		$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";
		$gramaniladhari_NIC=(($this->db->runQuery("SELECT village.grama_niladhari_NIC FROM village,gn_division,district,province WHERE province.Name='$province' AND district.Name='$district' AND gn_division.name='$gnd' AND village.name='$village'"))[0])["grama_niladhari_NIC"];
		$village_code=(($this->db->runQuery("SELECT village.village_code FROM village,gn_division,district,province WHERE province.Name='$province' AND district.Name='$district' AND gn_division.name='$gnd' AND village.name='$village'"))[0])["village_code"];
		$stmt4="INSERT INTO lives VALUES('$nic','$gramaniladhari_NIC','$village_code')";
		
		$this->db->runQuery($stmt1);
		$this->db->runQuery($stmt2);
		$this->db->runQuery($stmt3);
		$this->db->runQuery($stmt4);
	}


	public function getUser(){

		
			
				$stmt1="SELECT user.NIC,user.Fname,user.Lname,user.BOD,user.mobileNo,user.Address,village.name,gn_division.name AS 'gnd_name',district.Name AS 'district_name',province.Name FROM user,lives,village,gn_division,district,province WHERE user.jobType='villager' AND user.NIC=lives.villager_NIC AND lives.village_code=village.village_code AND village.GND_Code=gn_division.GND_Code AND gn_division.district_name=district.Name AND district.province_name=province.Name";

				$stmt2="SELECT user.NIC,regional_officer.RID,user.Fname,user.Lname,user.BOD,user.mobileNo,regional_officer.officeNo,district.Name AS 'district_name',province.Name FROM                                                                           user,regional_officer,regional_wildlife_office,village,gn_division,district,province WHERE user.jobType='regional officer' AND  user.NIC=regional_officer.NIC  AND regional_officer.officeNo=regional_wildlife_office.officeNo AND regional_wildlife_office.officeNo=village.officeNo AND village.GND_Code=gn_division.GND_Code AND gn_division.district_name=district.Name AND district.province_name=province.Name";

				$stmt3="SELECT user.NIC,wildlife_officer.WID,user.Fname,user.Lname,user.BOD,user.mobileNo,wildlife_officer.officeNo,district.Name AS 'district_name',province.Name FROM                                                                           user,wildlife_officer,regional_wildlife_office,village,gn_division,district,province WHERE user.jobType='wildlife officer' AND  user.NIC=wildlife_officer.NIC  AND wildlife_officer.officeNo=regional_wildlife_office.officeNo AND regional_wildlife_office.officeNo=village.officeNo AND village.GND_Code=gn_division.GND_Code AND gn_division.district_name=district.Name AND district.province_name=province.Name";

				$stmt4="SELECT user.NIC,veterinarian.VID,user.Fname,user.Lname,user.BOD,user.mobileNo,veterinarian.officeNo,district.Name AS 'district_name',province.Name FROM                                                                           user,veterinarian,regional_wildlife_office,village,gn_division,district,province WHERE user.jobType='veterinarian' AND  user.NIC=veterinarian.NIC  AND veterinarian.officeNo=regional_wildlife_office.officeNo AND regional_wildlife_office.officeNo=village.officeNo AND village.GND_Code=gn_division.GND_Code AND gn_division.district_name=district.Name AND district.province_name=province.Name";

				$stmt5="SELECT user.NIC,grama_niladhari.GID,user.Fname,user.Lname,user.BOD,user.mobileNo,user.Address,village.name,gn_division.name AS 'gnd_name',district.Name AS 'district_name',province.Name FROM user,grama_niladhari,lives,village,gn_division,district,province WHERE user.jobType='grama niladhari' AND user.NIC=grama_niladhari.NIC AND grama_niladhari.NIC=lives.gramaniladhari_NIC AND  lives.village_code=village.village_code AND village.GND_Code=gn_division.GND_Code AND gn_division.district_name=district.Name AND district.province_name=province.Name";

				$rows1=$this->db->runQuery($stmt1);
				$rows2=$this->db->runQuery($stmt2);
				$rows3=$this->db->runQuery($stmt3);
				$rows4=$this->db->runQuery($stmt4);
				$rows5=$this->db->runQuery($stmt5);
				$allUsers=["villager"=>$rows1,
				            "regional officer"=>$rows2,
				            "wildlife officer"=>$rows3,
				            "veterinarian"=>$rows4,
				            "grama niladhari"=>$rows5

			                ];
				return $allUsers;
				
			
		
	}







}