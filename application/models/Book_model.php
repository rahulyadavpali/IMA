<?php
class Book_model extends CI_Model
{
	public function __construct(){$this->load->database();}

	public function getAllResult()
	{
		$sql = $this->db->query("SELECT * FROM `book_solution_db`");
		return $sql->result_array();
	}

	public function getidResult($less_id)
	{
		$query= $this->db->query("SELECT * FROM `book_solution_db` WHERE stream = '".$less_id."' ");
		return $query->result_array();
	}

	public function saveResultData($resultData)
	{
		$resultinfo = array(
			'date' => $resultData['date'], 
			'month' => $resultData['month'], 
			'title' => $resultData['title'], 
			// 'video_link' => $resultData['video_link'], 3
			'stream' => $resultData['stream'], 
			'pdf_name' => $resultData['pdf']
		);

		$this->db->insert('book_solution_db', $resultinfo);
		$image_id = $this->db->insert_id();
		if($image_id){
			return $image_id;
		}
		else{
			return 0;
		}
	}

	public function saveResultLink($resultData)
	{
		$resultinfo = array(
			'date' => $resultData['date'], 
			'month' => $resultData['month'], 
			'title' => $resultData['title'], 
			'video_link' => $resultData['video_link'], 
			'stream' => $resultData['stream']
		);

		$this->db->insert('book_solution_db', $resultinfo);
		$image_id = $this->db->insert_id();
		if($image_id){
			return $image_id;
		}
		else{
			return 0;
		}
	}

	public function deleteRes($r_id)
	{
		$sql =  $this->db->query("DELETE FROM `book_solution_db` WHERE id = '".$r_id."' ");
	}

}
?>