<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Sthe extends CI_Controller
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
		$this->load->model('enroll_model');
	}

	public function index()
	{
		$header['title'] = "STHE | IMA Jodhpur";
		$data['testimonial'] = $this->testimonial_model->getAllReview();

		$this->load->view('header', $header);
		$this->load->view('pages/sthe', $data);
		$this->load->view('footer');
	}

	public function verifyOtp()
	{
		$header['title'] = "STHE | IMA Jodhpur";
		$mobile['mobileno'] = $_POST['sthnumber'];

		$n = "6";
		$generator = "1357902468";
		$result = "";
		for($i = 1; $i <= $n; $i++){
			$result .= substr($generator, (rand()%(strlen($generator))), 1);
		}

		$saveMob = array('mobile_no' => $_POST['sthnumber'], 'otp' => $result);
		$checkmob = $this->enroll_model->checknumber($saveMob);

		if($_POST['sthnumber']==$checkmob['mobile_no']){
			$this->session->set_flashdata('stheMessage', 'This Mobile number is already register for enrollment.');
			redirect(base_url('STHE/'));
		}
		else{
			// SMS Function ------------
			$contacts = $_POST['sthnumber'];
	        $msg = $result." is your OTP to verify your mobile number for STHE. Do not share your OTP with anyone for security reasons.- IMA Jodhpur";

			$api_key = '261A9DBC25005A';
	        $from = 'IMAJHO';
	        $template_id = 1207163721517581787;
	        $sms_text = urlencode($msg);

	        $ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, "http://sms.digicenters.in/app/smsapi/index.php");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=13810&routeid=30&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=".$template_id);
			$response = curl_exec($ch);
			curl_close($ch);

			$this->enroll_model->saveotp($saveMob);

			$this->load->view('header', $header);
			$this->load->view('pages/otp_form', $mobile);
			$this->load->view('footer');
		}
	}

	public function verifyusr()
	{
		$header['title'] = "Enrollment Form | STHE | IMA Jodhpur";
		$mobile['mobileno'] = $_POST['mobile'];

		$otpData = array('mobile' => $_POST['mobile'], 'otp' => $_POST['sthotp']);

		$otpver = $this->enroll_model->verifyotp($otpData);

		if($_POST['mobile']==$otpver['mobile_no'] && $_POST['sthotp']==$otpver['otp']){
			$this->load->view('header', $header);
			$this->load->view('pages/enrollment_form', $mobile);
			$this->load->view('footer');
		}
		else{
			$this->session->set_flashdata('stheMessage', 'Please entre correct OTP Number.');

			$this->load->view('header', $header);
			$this->load->view('pages/otp_form', $mobile);
			$this->load->view('footer');
		}
	}

	public function addEnquirysthe()
	{
		$enqData = array('name'=>$_POST['tname'], 'email'=>$_POST['temail'], 'mobile'=>$_POST['tphone'], 'stream'=>$_POST['tstrem'], 'class'=>$_POST['tclass'], 'medium'=>$_POST['tmedium'], 'agree'=>$_POST['tagree'], 'date_info'=> date('j\-F\-Y'));

		if($this->input->post('tsubmit')!='')
		{
			$enqSave = $this->register_model->saveEnquiry($enqData);

			$this->session->set_flashdata('stheMessage', 'Your query send to our experts. They will contact you soon.');
			redirect(base_url('STHE/'));
		}
		else{
			$this->session->set_flashdata('stheMessage', 'Oops something went wrong. Try again.');
			redirect(base_url('STHE/'));
		}
	}

	public function stheForm()
	{
		$header['title'] = "Enrollment Form | STHE | IMA Jodhpur";

		$this->load->view('header', $header);
		$this->load->view('pages/enrollment_form');
		$this->load->view('footer');
	}

	public function enrollStudent()
	{
		if($this->input->post('submitSethEn')!='')
		{
			$pre = 'STHE10';
			$reviewId = getMaxId('enrollment_db', 'id');
			$enroll = $pre.str_pad($reviewId + 1, 3, 0, STR_PAD_LEFT);

			$enrollData = array(
				'enroll_no' => $enroll, 
				'name' => $_POST['studentname'], 
				'fatherName' => $_POST['guardianname'], 
				'email' => $_POST['emailid'], 
				'mobileno' => $_POST['mobileno'], 
				'dob' => $_POST['dob'], 
				'class' => $_POST['classs'], 
				'medium' => $_POST['medium'], 
				'stream' => $_POST['streames'], 
				'examMode' =>$_POST['exammode'] , 
				'examTime' => $_POST['examtime'], 
				'examDate' => $_POST['examdate'], 
				'submitDate' => date('j\-F\-Y')
			);

			$enqSave = $this->enroll_model->saveEnrollment($enrollData);

			// SMS Function ------------
			$contacts = $_POST['mobileno'];
	        $msg = "Dear ".$_POST['studentname'].", Your application for STHE submitted successfully. Your registration number is ".$enroll.". One of our dedicated executive will connect you shortly. Thanks IMA JODHPUR www.imajodhpur.com";

			$api_key = '261A9DBC25005A';
	        $from = 'IMAJHA';
	        $template_id = 1207163755792246582;
	        $sms_text = urlencode($msg);

	        $ch = curl_init();
			curl_setopt($ch,CURLOPT_URL, "http://sms.digicenters.in/app/smsapi/index.php");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=13810&routeid=30&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=".$template_id);
			$response = curl_exec($ch);
			curl_close($ch);

			$this->session->set_flashdata('stheMessage', 'Your enrollment is submitted successfully. Our team gets in touch with you.');
			redirect(base_url('STHE/'));
		}
		else{
			$this->session->set_flashdata('stheMessage', 'Oops something went wrong. Please try again later.');
			redirect(base_url('STHE/'));
		}
	}

}
