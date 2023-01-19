<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Enroll extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->helper('general_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('email');
		$this->load->model('enroll_model');
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
			$header['title'] = "Enrollment Detail - IMA Jodhpur";
			$header['header_title'] = "IMA Jodhpur";
			$result['allcontact'] = $this->enroll_model->getAllEnroll();

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/enroll/list', $result, $ses_usrnm);
			$this->load->view('admin/common/footer');
		}
	}

	public function createExcel()
	{

		$filename = 'enroll-'.date('dmy').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename = $filename"); 
		header("Content-Type: application/csv; ");

		$enrollData = $this->enroll_model->getExcel();

		$file = fopen('php://output','w');

		$header = array("S.No","Enrollment Number","Name","Guardian Name","Email Address", "Mobile Number", "Date Of Birth", "Class", "Medium", "Stream", "Exam Mode", "Exam Time", "Exam Date", "Submit Date", "Create Date & Time");
		fputcsv($file, $header);

		foreach($enrollData as $data)
		{
			fputcsv($file,$data);
		}
		fclose($file);
		exit;
	}

	public function delete()
	{
		$e_id = $this->input->post('value');
		$ret = $this->enroll_model->deleteThis($e_id);
		$this->session->set_flashdata('error', 'User Enquiry Deleted Successfully.');
		echo ('['.json_encode($data).']');
	}

}
