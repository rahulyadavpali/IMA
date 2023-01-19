<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Studenthub extends CI_Controller
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
		$this->load->model('lesson_model');
		$this->load->model('book_model');
		$this->load->model('notes_model');
		$this->load->model('entrance_model');
	}

	public function index()
	{
		$header['title'] = "Lesson Planner | Student Hub | IMA Jodhpur";
		$data['page_title'] = "Lesson Planner";
		$data['folderName'] = "lessons";
		$data['announcment'] = $this->lesson_model->getAllResult();

		$this->load->view('header', $header);
		$this->load->view('pages/lesson', $data);
		$this->load->view('footer');
	}

	public function lessonplanner()
	{
		$less_id = $this->uri->segment(3);
		$header['title'] = "Lesson Planner | Student Hub | IMA Jodhpur";
		$data['page_title'] = "Lesson Planner";
		$data['folderName'] = "lessons";
		$data['announcment'] = $this->lesson_model->getidResult($less_id);

		$this->load->view('header', $header);
		$this->load->view('pages/lesson', $data);
		$this->load->view('footer');
	}

	public function bookSolution()
	{
		$less_id = $this->uri->segment(3);
		$header['title'] = "Book Solution | Student Hub | IMA Jodhpur";
		$data['folderName'] = "books";
		$data['page_title'] = "Book Solution";
		$data['announcment'] = $this->book_model->getidResult($less_id);

		$this->load->view('header', $header);
		$this->load->view('pages/lesson', $data);
		$this->load->view('footer');
	}

	public function impNotes()
	{
		$less_id = $this->uri->segment(3);
		$header['title'] = "Important Notes | Student Hub | IMA Jodhpur";
		$data['folderName'] = "importantnotes";
		$data['page_title'] = "Important Notes";
		$data['announcment'] = $this->notes_model->getidResult($less_id);

		$this->load->view('header', $header);
		$this->load->view('pages/lesson', $data);
		$this->load->view('footer');
	}

	public function entranceTest()
	{
		$less_id = $this->uri->segment(3);
		$header['title'] = "Entrance Test | Student Hub | IMA Jodhpur";
		$data['folderName'] = "entrancetests";
		$data['page_title'] = "Entrance Test";
		$data['announcment'] = $this->entrance_model->getidResult($less_id);

		$this->load->view('header', $header);
		$this->load->view('pages/lesson', $data);
		$this->load->view('footer');
	}

	public function addExpertFaci()
	{
		$enqData = array('name'=>$_POST['tname'], 'email'=>$_POST['temail'], 'mobile'=>$_POST['tphone'], 'stream'=>$_POST['tstrem'], 'class'=>$_POST['tclass'], 'medium'=>$_POST['tmedium'], 'agree'=>$_POST['tagree'], 'date_info'=> date('j\-F\-Y'));

		if($this->input->post('tsubmit')!='')
		{
			$enqSave = $this->register_model->saveEnquiry($enqData);

			$this->session->set_flashdata('talkMessagefac', 'Your query send to our experts. They will contact you soon.');
			redirect(base_url('facilities/'));
		}
		else{
			$this->session->set_flashdata('talkMessagefac', 'Oops something went wrong. Try again.');
			redirect(base_url('facilities/'));
		}
	}

}
