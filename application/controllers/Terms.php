<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Terms extends CI_Controller
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
	}

	public function index()
	{
		$header['title'] = "Terms & Conditions | IMA Jodhpur";

		$this->load->view('header', $header);
		$this->load->view('pages/terms_conditions');
		$this->load->view('footer');
	}

	public function policy()
	{
		$header['title'] = "Privacy Policy | IMA Jodhpur";

		$this->load->view('header', $header);
		$this->load->view('pages/privacy_policy');
		$this->load->view('footer');
	}

}