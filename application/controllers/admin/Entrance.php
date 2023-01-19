<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Entrance extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->helper('general_helper');
		$this->load->helper('file');
		$this->load->library('upload');
		$this->load->library('image_lib');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('email');
		$this->load->model('entrance_model');
	}

	public function index()
	{
		$sess = $this->session->userdata('user_id');
		$ses_usrnm['usernm'] = $this->session->userdata('user_n');

		if($sess != 1)
		{
			redirect(base_url('/admin'));
		}
		else
		{
			$header['title'] = "Entrance Test Detail - IMA Jodhpur";
			$header['header_title'] = "IMA Jodhpur";
			$result['allresult'] = $this->entrance_model->getAllResult();

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/entrance/list', $result, $ses_usrnm);
			$this->load->view('admin/common/footer');
		}
	}

	public function add()
	{
		$sess = $this->session->userdata('user_id');
		$ses_usrnm['usernm'] = $this->session->userdata('user_n');

		if($sess != 1)
		{
			redirect(base_url('/admin'));
		}
		else
		{
			$header['title'] = "Add New Entrance Test - IMA Jodhpur";
			$header['header_title'] = "IMA Jodhpur";

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/entrance/add', $ses_usrnm);
			$this->load->view('admin/common/footer');
		}
	}

	public function saveResult()
	{
		$resultId = getMaxId('entarncetest_db', 'id');

		$resultData = array(
			'date' => date('d'), 
			'month' => date('M'), 
			'title'=> $_POST['title'], 
			'video_link' => $_POST['video_lnk'], 
			'stream' => $_POST['stream']
		);

		if($_FILES['pdf']['name'] != "")
		{
			$ext_thumbnail = explode(".",$_FILES['pdf']['name']);
			$ext_thumbnail = strtolower($ext_thumbnail[1]);
			$check = array('pdf','JPG','jpg','png','PNG','JPEG','jpeg');

			if(in_array($ext_thumbnail, $check))
			{
				$upload_thumbnail['upload_path'] = UPLOAD_ROOT_PATH.'entrancetests/';
				$upload_thumbnail['allowed_types'] = 'pdf|jpg|JPG|png|PNG|jpeg|JPEG';
				$upload_thumbnail['overwrite'] = TRUE;
				$thumbnail_upload = $upload_thumbnail['file_name'] = 'entrancetests-'.$resultId.".".$ext_thumbnail;
				$resultData['pdf'] = $thumbnail_upload;

				$this->upload->initialize($upload_thumbnail);
				if($this->upload->do_upload('pdf') == FALSE)
				{
					$data['error'] = 'THE UPLOADED FILE MUST BE A PDF OR Image';
					$this->session->set_flashdata('item',$this->upload->display_errors());
					redirect('admin/entrance/add/');
				}

				$ret = $this->entrance_model->saveResultData($resultData);
				redirect('admin/entrance/');
			}
			else
			{
				$data['error'] = 'THE UPLOADED FILE MUST BE A PDF OR Image';
				$this->session->set_flashdata('item',$this->upload->display_errors());
					redirect('admin/entrance/add/');
			}
		}
		else
		{
			$ret = $this->entrance_model->saveResultLink($resultData);
			redirect('admin/entrance/');
		}
	}

	public function delete()
	{
		$r_id = $this->input->post('value');
		$ret = $this->entrance_model->deleteRes($r_id);
		$this->session->set_flashdata('error', 'User Enquiry Deleted Successfully.');
		echo ('['.json_encode($data).']');
	}

}