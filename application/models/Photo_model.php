<?php
class Photo_model extends CI_Model
{
	public function __construct(){$this->load->database();}

	public function getAllResult()
	{
		$sql = $this->db->query("SELECT * FROM `gallery_db`");
		return $sql->result_array();
	}

	public function saveResultData($resultData)
	{
		$resultinfo = array(
			'title' => $resultData['title'], 
			'image' => $resultData['pdf']
		);

		$this->db->insert('gallery_db', $resultinfo);
		$image_id = $this->db->insert_id();
		if($image_id){
			return $image_id;
		}
		else{
			return 0;
		}
	}

	public function addImage($data)
    {			
        $msg = '';
        $sql  = $this->db->query("INSERT INTO gallery_db (image, product_id) VALUES ('".$data['Image_name']."','".$data['vehicle_id']."')");
        $msg = 'ins';
        return $msg;
    }

	public function deleteRes($r_id)
	{
		$sql =  $this->db->query("DELETE FROM `gallery_db` WHERE id = '".$r_id."' ");
	}

}
?>