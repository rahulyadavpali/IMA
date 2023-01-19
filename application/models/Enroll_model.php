<?php class Enroll_model extends CI_Model
{
	public function __construct(){$this->load->database();}

	public function checknumber($saveMob)
	{
		$mobile = $saveMob['mobile_no'];
		$sql 	 = "SELECT `mobile_no` FROM `verify_mobile` WHERE `mobile_no` = '".$mobile."'";
		$query  = $this->db->query($sql);
		$result = $query->row_array();
		return $result;
	}

	public function saveotp($saveMob)
	{
		$this->db->insert('verify_mobile', $saveMob);
	}

	public function verifyotp($otpData){
		$msql 	 = "SELECT `mobile_no`, `otp` FROM `verify_mobile` WHERE `mobile_no` = '".$otpData['mobile']."'";
		$mquery  = $this->db->query($msql);
		$mresult = $mquery->row_array();
		return $mresult;
	}

	public function saveEnrollment($enrollData)
	{
		$this->db->insert('enrollment_db', $enrollData);
	}

	public function getAllEnroll()
	{
		$sql = $this->db->query("SELECT * FROM `enrollment_db`");
		return $sql->result_array();
	}

	public function getExcel()
	{
		$response = array();
		$this->db->select('id,enroll_no,name,fatherName,email,mobileno,dob,class,medium,stream,examMode,examTime,examDate,submitDate,createDateTime');
		$q = $this->db->get('enrollment_db');
		$response = $q->result_array();
	 	return $response;
	}

	public function deleteThis($e_id)
	{
		$sql =  $this->db->query("DELETE FROM `enrollment_db` WHERE id = '".$e_id."' ");
	}

}
?>