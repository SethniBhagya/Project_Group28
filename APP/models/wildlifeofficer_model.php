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
	public function updateLocation($lat, $lng, $ID)
	{
		$res = $this->db->runQery("UPDATE reported_incident SET current_lat=:lat, current_lon=:lng WHERE incidentID= :ID", [":lat" => $lat, ":lng" => $lng, ":ID" => $ID]);
		return $res;
	}
	function selectIncidentData()
	{
		$data = [];
		$details = $this->db->runQuery("SELECT * from reported_incident order by date desc");
		$joindetails = $this->db->runQuery("SELECT work.wildlife_NIC,work.incidentID,reported_incident.status,user.Fname,user.Lname FROM reported_incident INNER JOIN work ON reported_incident.incidentID= work.incidentID INNER JOIN user ON user.NIC=work.wildlife_NIC");

		foreach ($joindetails as $value) {
			if ($value['wildlife_NIC'] == $_SESSION['NIC']) {
				$data[] = $value;
			}
		}

		return [$details, $data];
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
		//$dob = $data["dob"];
		$address = $data["address"];
		$mob = $data["mob"];
		$email = $data["email"];
		$office_address = $data["office_address"];
		$office_no = $this->db->runQuery("SELECT officeNo from regional_wildlife_office WHERE address= '$office_address'")[0]['officeNo'];

		$stmt1 = "UPDATE user SET  Fname='$fname', Lname='$lname', mobileNo='$mob',Address='$address',email='$email' WHERE NIC= '$userName'";
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
	function setIncidentStatus($ID, $state)
	{
		$stmt1 = "UPDATE reported_incident SET incidentStatus='$state' WHERE incidentID= '$ID'";
		$result = $this->db->runQuery($stmt1);
		return $result;
	}





	//DASHBOARD DATA//

	public function getWildLifeDistrict($wildliferNic)
	{
		$officeNo = $this->db->runQuery("SELECT officeNo FROM wildlife_officer WHERE `NIC`='$wildliferNic'")[0]['officeNo'];
		$gndcode = $this->db->runQuery("SELECT GND_Code FROM village WHERE `officeNo`='$officeNo'")[0]['GND_Code'];
		$district = $this->db->runQuery("SELECT district_name FROM gn_division WHERE `GND_Code`='$gndcode'");


		return $district;
	}
	public function lastWeek()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS lastWeek FROM reported_incident  WHERE `date`  between date_sub(now(),INTERVAL 7 DAY ) and now(); ");
	}
	public function lastMonth()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS lastMonth FROM reported_incident  WHERE `date`  between date_sub(now(),INTERVAL 1 MONTH) and now(); ");
	}
	public function last24Hours()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS last24Hours FROM reported_incident  WHERE `date`  between date_sub(now(),INTERVAL 1 DAY ) and now(); ");
	}
	// public function districtLastWeek($villagerNic){
	//    $this->db->runQuery( "SELECT column_name(s)  FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE SELECT ");
	// }
	public function countWildElephantArrival()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS countWildElephantArrival FROM reported_incident  WHERE (`date`  between date_sub(now(),INTERVAL 1 MONTH) and now())&&( `reporttype`='Wild Elephant are in The Village')");
	}
	public function countWildAnimalArrival()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS countWildAnimalArrival FROM reported_incident  WHERE (`date`  between date_sub(now(),INTERVAL 1 MONTH) and now())&&( `reporttype`='Other Wild Animals are in The Village')");
	}
	public function countElephantFence()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS countElephantFence FROM reported_incident  WHERE (`date`  between date_sub(now(),INTERVAL 1 MONTH) and now())&&( `reporttype`='Breakdown of Elephant Fence')");
	}
	public function countcropDamages()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS countcropDamages   FROM reported_incident  WHERE (`date`  between date_sub(now(),INTERVAL 1 MONTH) and now())&&( `reporttype`='Crop Damages')");
	}
	public function countOthers()
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date("Y-m-d");
		return $this->db->runQuery("SELECT COUNT(incidentID) AS countOthers FROM reported_incident  WHERE (`date`  between date_sub(now(),INTERVAL 1 MONTH) and now())&&(( `reporttype`='Illegal Thing happening the Forest')||( `reporttype`='Wild Animal Danger'))");
	}
	public function countWildlifeOfficer($district)
	{
		$this->db->runQuery("SELECT COUNT(incidentID) AS wildlifeOfficer  FROM user INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE SELECT ");
	}
	public function countGramaniladhari($district)
	{
		return $this->db->runQuery("SELECT COUNT(grama_niladhari.NIC) AS gramaNiladhari  FROM grama_niladhari INNER JOIN gn_division ON grama_niladhari.GND = gn_division.GND_Code WHERE  gn_division.district_name= '$district'  ");
	}
	public function countVillagers($district)
	{
		return $this->db->runQuery("SELECT COUNT(villager_NIC) AS villager  FROM lives WHERE   district= '$district'  ");
	}
	public function countWildElephantArrivalDistrict($district)
	{

		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS WildElephantArrivalDistrict FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Wild Elephant are in The Village'))  ");
	}
	public function countcropDamagesDistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS cropDamagesDistrict FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Crop Damages'))  ");
	}
	public function countIllegalThingDistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS IllegalThing FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Illegal Thing happening the Forest'))  ");
	}
	public function countElephantFenceDistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS ElephantFence FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Breakdown of Elephant Fence'))  ");
	}
	public function countWildAnimalDangerDistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS WildAnimalDanger FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Wild Animal Danger'))  ");
	}
	public function countWildAnimalArrivalDistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS WildAnimalArrival FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&&( reported_incident.reporttype ='Other Wild Animals are in The Village'))  ");
	}
	public function countWeekincidentdistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS incidentDistrictWeekly FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 7 DAY ) and now()))");
	}
	public function countMonthincidentdistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS incidentDistrictMontly FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH ) and now()))");
	}
	public function countDayincidentdistrict($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS incidentDistrictDaily FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ((lives.district = '$district')&&( reported_incident.date   between date_sub(now(),INTERVAL 1 DAY ) and now()))");
	}
	public function countCentralProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Central FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='Central' )  ");
	}
	public function countNorthernProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Northern FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='Northern' )  ");
	}
	public function countSouthernProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS  Southern FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='Southern' )  ");
	}
	public function countWesternProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Western FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='Western' )  ");
	}
	public function countNorthWesternProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS NorthWestern FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='NorthWestern' )  ");
	}
	public function countNorthCentralProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS NorthCentral FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='NorthCentral' )  ");
	}
	public function countUvaProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Uva FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='Uva' )  ");
	}
	public function countSabaragamuwaProvinceIncident()
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Sabaragamuwa FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (reported_incident.date   between date_sub(now(),INTERVAL 1 MONTH) and now())&& lives.province='Sabaragamuwa' )  ");
	}
	public function countIncident12AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 12AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY ) and now())&& reported_incident.time_in>='23:01:00' and reported_incident.time_in<='00:00:00')");
	}
	public function countIncident01AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 01AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='00:01:00' and reported_incident.time_in<='01:00:00')");
	}
	public function countIncident02AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 02AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='01:01:00' and reported_incident.time_in<='02:00:00') ");
	}
	public function countIncident03AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 03AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&&  reported_incident.time_in>='02:01:00' and reported_incident.time_in<='03:00:00')");
	}
	public function countIncident04AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 04AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='03:01:00' and reported_incident.time_in<='04:00:00') ");
	}
	public function countIncident05AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 05AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='04:01:00' and reported_incident.time_in<='05:00:00') ");
	}
	public function countIncident06AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 06AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='05:01:00' and reported_incident.time_in<='06:00:00')");
	}
	public function countIncident07AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 07AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='06:01:00' and reported_incident.time_in<='07:00:00') ");
	}
	public function countIncident08AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 08AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&&reported_incident.time_in>='07:01:00' and reported_incident.time_in<='08:00:00')");
	}
	public function countIncident09AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 09AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='08:01:00' and reported_incident.time_in<='09:00:00') ");
	}
	public function countIncident10AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 10AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='09:01:00' and reported_incident.time_in<='10:00:00')");
	}
	public function countIncident11AM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 11AM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='10:01:00' and reported_incident.time_in<='11:00:00')");
	}
	public function countIncident12PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 12PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='11:01:00' and reported_incident.time_in<='12:00:00') ");
	}
	public function countIncident01PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 01PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='12:01:00' and reported_incident.time_in<='13:00:00') ");
	}
	public function countIncident02PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 02PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='13:01:00' and reported_incident.time_in<='14:00:00') ");
	}
	public function countIncident03PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 03PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='14:01:00' and reported_incident.time_in<='15:00:00')");
	}
	public function countIncident04PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 04PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='15:01:00' and reported_incident.time_in<='16:00:00')");
	}
	public function countIncident05PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 05PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='16:01:00' and reported_incident.time_in<='17:00:00')");
	}
	public function countIncident06PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 06PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='17:01:00' and reported_incident.time_in<='18:00:00')");
	}
	public function countIncident07PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 07PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='18:01:00' and reported_incident.time_in<='19:00:00')");
	}
	public function countIncident08PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 08PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='19:01:00' and reported_incident.time_in<='20:00:00') ");
	}
	public function countIncident09PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 09PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='20:01:00' and reported_incident.time_in<='21:00:00')");
	}
	public function countIncident10PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 10PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='21:01:00' and reported_incident.time_in<='22:00:00')");
	}
	public function countIncident11PM($district)
	{
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS 11PM FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date   between date_sub(now(),INTERVAL 1 DAY) and now())&& reported_incident.time_in>='22:01:00' and reported_incident.time_in<='23:00:00')");
	}
	public function countIncidentJan($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Jan FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date-01-01' and reported_incident.date<='$date-01-31'))");
	}
	public function countIncidentFeb($district)
	{

		$date = date("Y");

		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Feb FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-02-01' and reported_incident.date<='$date.-02-29'))");
	}
	public function countIncidentMarch($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS March FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-03-01' and reported_incident.date<='$date.-03-31'))");
	}
	public function countIncidentApril($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS April FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-04-01' and reported_incident.date<='$date.-04-30'))");
	}
	public function countIncidentMay($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS May FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-05-01' and reported_incident.date<='$date.-05-31'))");
	}
	public function countIncidentJune($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS June FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-06-01' and reported_incident.date<='$date.-06-30'))");
	}
	public function countIncidentJuly($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS July FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-07-01' and reported_incident.date<='$date.-07-31'))");
	}
	public function countIncidentAug($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Aug FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-08-01' and reported_incident.date<='$date.-08-31'))");
	}
	public function countIncidentSep($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Sep FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-09-01' and reported_incident.date<='$date.-09-30'))");
	}
	public function countIncidentOct($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Oct FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-10-01' and reported_incident.date<='$date.-10-31'))");
	}
	public function countIncidentNov($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Nov FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-11-01' and reported_incident.date<='$date.-11-30'))");
	}
	public function countIncidentDec($district)
	{
		$date = date("Y");
		return $this->db->runQuery("SELECT COUNT(reported_incident.incidentID) AS Dece  FROM reported_incident INNER JOIN lives ON reported_incident.villager_NIC = lives.villager_NIC WHERE ( (lives.district = '$district')&&(reported_incident.date>='$date.-12-01' and reported_incident.date<='$date.-12-31'))");
	}

		public function getLastNoticeId($NIC)
	{
		$lastNoticeId=(($this->db->runQuery("SELECT lastNoticeId FROM user WHERE NIC='$NIC'"))[0])["lastNoticeId"];
		return $lastNoticeId;
	}

	public function getUserOfficeNumber($NIC){
		$officeNum=(($this->db->runQuery("SELECT officeNo FROM wildlife_officer WHERE NIC='$NIC'"))[0])["officeNo"];
		return $officeNum;
	}

	public function getNewNoticeDetails($officeNum,$lastNoticeId){

		$newNoticeId=$this->db->runQuery("SELECT * FROM notice_has_wildlifeoffice_village WHERE officeNo='$officeNum' AND noticeID>'$lastNoticeId' AND jobType='wildlifeOfficer'");

		if(!empty($newNoticeId))
		{
			$latestNoticeId=($newNoticeId[0])["noticeID"];

			$detialsOfNotice=($this->db->runQuery("SELECT * FROM notice WHERE noticeID='$latestNoticeId'"))[0];

			return $detialsOfNotice;

		}
		else
			return "No";
	}

	public function updateNotice($noticeId,$nic)
	{
		$this->db->runQuery("UPDATE user SET lastNoticeId='$noticeId' WHERE NIC='$nic'");
	}

}
