<?php defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller
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
		$this->load->model('register_model');
		$this->load->model('testimonial_model');
	}

	// About IMA ------------------------------------------
	public function index()
	{
		$header['title'] = "About IMA | IMA Jodhpur";
		$data['testimonial'] = $this->testimonial_model->getAllReview();

		$this->load->view('header', $header);
		$this->load->view('pages/about', $data);
		$this->load->view('footer');
	}

	public function addEnquiryAbt()
	{
		$enqData = array('name'=>$_POST['tname'], 'email'=>$_POST['temail'], 'mobile'=>$_POST['tphone'], 'stream'=>$_POST['tstrem'], 'class'=>$_POST['tclass'], 'medium'=>$_POST['tmedium'], 'agree'=>$_POST['tagree'], 'date_info'=> date('j\-F\-Y'));

		if($this->input->post('tsubmit')!='')
		{
			$enqSave = $this->register_model->saveEnquiry($enqData);

			$this->session->set_flashdata('talkMessageAbt', 'Your query send to our experts. They will contact you soon.');
			redirect(base_url('about-ima/'));
		}
		else{
			$this->session->set_flashdata('talkMessageAbt', 'Oops something went wrong. Try again.');
			redirect(base_url('about-ima/'));
		}
	}

	// Why IMA ------------------------------------------
	public function why()
	{
		$header['title'] = "Why IMA | IMA Jodhpur";
		$data['testimonial'] = $this->testimonial_model->getAllReview();

		$this->load->view('header', $header);
		$this->load->view('pages/why', $data);
		$this->load->view('footer');
	}

	public function addEnquiryWhy()
	{
		$enqData = array('name'=>$_POST['tname'], 'email'=>$_POST['temail'], 'mobile'=>$_POST['tphone'], 'stream'=>$_POST['tstrem'], 'class'=>$_POST['tclass'], 'medium'=>$_POST['tmedium'], 'agree'=>$_POST['tagree'], 'date_info'=> date('j\-F\-Y'));

		if($this->input->post('tsubmit')!='')
		{
			$enqSave = $this->register_model->saveEnquiry($enqData);

			$this->session->set_flashdata('talkMessageWhy', 'Your query send to our experts. They will contact you soon.');
			redirect(base_url('why-ima/'));
		}
		else{
			$this->session->set_flashdata('talkMessageWhy', 'Oops something went wrong. Try again.');
			redirect(base_url('why-ima/'));
		}
	}

}
