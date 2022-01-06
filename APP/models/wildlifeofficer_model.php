<?php
class Wildlifeofficer_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	function selectData($userName)
	{
		$details = $this->db->runQuery("SELECT * from user WHERE NIC= '$userName'");
		$office_no = $this->db->runQuery("SELECT officeNo from wildlife_officer WHERE NIC= '$userName'");
		$no = $office_no[0]['officeNo'];
		$details[1] = $this->db->runQuery("SELECT address from regional_wildlife_office WHERE officeNo= '$no' ")[0]; //get district

		return $details;
	}
	function selectIncidentData()
	{
		$details = $this->db->runQuery("SELECT * from reported_incident order by date desc");
		$joindetails = $this->db->runQuery("SELECT work.wildlife_NIC,work.incidentID,reported_incident.status,user.Fname,user.Lname FROM reported_incident INNER JOIN work ON reported_incident.incidentID= work.incidentID INNER JOIN user ON user.NIC=work.wildlife_NIC");
		// print_r($joindetails);
		return [$details, $joindetails];
	}
	public function selectIncidentDataEx()
	{
		$details = $this->db->runQuery("SELECT * from reported_incident order by date desc");


		return $details;
	}

	function updateData($userName, $data)
	{

		$fname = $data["fName"];
		$lname = $data["lName"];
		//$nic=$data["nic"];
		// $mob=$data["mob"];
		//$gender=$data["gender"];
		$dob = $data["dob"];
		$address = $data["address"];
		$mob = $data["mob"];
		$email = $data["email"];
		$office_address = $data["office_address"];
		$office_no = $this->db->runQuery("SELECT officeNo from regional_wildlife_office WHERE address= '$office_address'")[0]['officeNo'];







		$stmt1 = "UPDATE user SET  Fname='$fname', Lname='$lname', mobileNo='$mob', BOD='$dob',Address='$address',email='$email' WHERE NIC= '$userName'";
		$stmt2 = "UPDATE wildlife_officer SET officeNo='$office_no' WHERE NIC='$userName'";
		//$stmt3="INSERT INTO login VALUES('$nic','$hashPassword')";

		$result[0] = $this->db->runQuery($stmt1);
		// //return $result;
		$result[1] = $this->db->runQuery($stmt2);
		//$this->db->runQuery($stmt3);
		return $result;
	}

	public function incidentStatUpdate($state, $ID, $nic)
	{
		if ($state == 'success') {
			$stmt2 = "UPDATE reported_incident SET status='$state' WHERE incidentID='$ID'; INSERT INTO work (wildlife_NIC,incidentID) VALUES('$nic','$ID')";
		} else {
			$stmt2 = "UPDATE reported_incident SET status='$state' WHERE incidentID='$ID'; DELETE FROM work WHERE incidentID='$ID' ";
		}


		$result1 = $this->db->runQuery($stmt2);

		return $result1;
	}
	public function sendToVetData($ID)
	{
		$stmt2 = "UPDATE reported_incident SET sendToVetStatus='visible' WHERE incidentID='$ID'";
		$result = $this->db->runQuery($stmt2);
		return $result;
	}

	function selectNotificationsData()
	{
		$details = $this->db->runQuery("SELECT * from notice WHERE jobType='wildlifeOfficer' order by date,time desc");
		//$joindetails = $this->db->runQuery("SELECT work.wildlife_NIC,work.incidentID,reported_incident.status,user.Fname,user.Lname FROM reported_incident INNER JOIN work ON reported_incident.incidentID= work.incidentID INNER JOIN user ON user.NIC=work.wildlife_NIC");
		// print_r($joindetails);
		return $details;
	}
	function selectDashboardData()
	{
	}
}
