<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Photo extends CI_Controller
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
		$this->load->model('photo_model');
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
			$header['title'] = "Photo Gallery - IMA Jodhpur";
			$header['header_title'] = "IMA Jodhpur";
			$result['allresult'] = $this->photo_model->getAllResult();

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/gallery/list', $result, $ses_usrnm);
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
			$header['title'] = "Add New Photo - IMA Jodhpur";
			$header['header_title'] = "IMA Jodhpur";

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/gallery/add', $ses_usrnm);
			$this->load->view('admin/common/footer');
		}
	}

	public function saveResult()
	{
		$resultId = getMaxId('gallery_db', 'id');
		$invID = str_pad($resultId, 3, '0', STR_PAD_LEFT);
        $insert;

		$resultData = array('title'=> $_POST['title']);

		if($_FILES['pdf']['name'] != ""){
			$ext_thumbnail = explode(".",$_FILES['pdf']['name']);
			$ext_thumbnail = strtolower($ext_thumbnail[1]);
			$check = array('JPG','jpg','png','PNG','JPEG','jpeg');

			if(in_array($ext_thumbnail, $check)){
				$upload_thumbnail['upload_path'] = UPLOAD_ROOT_PATH.'gallery/';
				$upload_thumbnail['allowed_types'] = 'jpg|JPG|png|PNG|jpeg|JPEG';
				$upload_thumbnail['overwrite'] = FALSE;
				$thumbnail_upload = $upload_thumbnail['file_name'] = 'gallery-photo-'.$resultId.".".$ext_thumbnail;
				$resultData['pdf'] = $thumbnail_upload;
				$this->upload->initialize($upload_thumbnail);

				if($this->upload->do_upload('pdf') == FALSE){
					$data['error'] = 'THE UPLOADED FILE MUST BE A PDF OR Image';
					$this->session->set_flashdata('item',$this->upload->display_errors());
					redirect('admin/photo-gallery/add/');
				}

				$ret = $this->photo_model->saveResultData($resultData);

				if($_FILES['VehicleImage1']['name'] != ""){
                    if(count($_FILES['VehicleImage1']['name']) > 0){
                        $VehicleName1_new = array();
                        $VehicleName1 = '';
                        $config = array(
                            'upload_path'   => UPLOAD_ROOT_PATH.'gallery/', 
                            'allowed_types' => 'jpg|JPG|png|PNG|jpeg|JPEG', 
                            'overwrite'     => 1
                        );
                        $images = array();
                        $j = 1;

                        foreach($_FILES['VehicleImage1']['name'] as $key => $value ){
                            $filename = $_FILES['VehicleImage1']['name'][$key][0];
                            $filetype = $_FILES['VehicleImage1']['type'][$key][0];
                            $file_tmp_name = $_FILES['VehicleImage1']['tmp_name'][$key][0];
                            $ArrExt = explode(".",$filename);
                            $i++;
                            $ext = end($ArrExt);
                            if($filename!=""){
                                if(isset($_POST['image1'][$key][0]) && $_POST['image1'][$key][0]!=""){
                                    $this->photo_model->singleCarImageDefilebyfile($resultId,$_POST['image1'][$key][0]);
                                }
                                $newfilename='gallery-photo-'.$resultId.'-sub-'.$i.".".$ext;
                                $path = UPLOAD_ROOT_PATH.'gallery/';
                                if(file_exists($path)){
                                    $carid = getMaxId('gallery_db','id');
                                    $newfilename = 'gallery-photo-'.$resultId.'-sub-'.$carid.'-'.$i.".".$ext;
                                    $path = UPLOAD_ROOT_PATH.'gallery/'.$newfilename;
                                }
                                move_uploaded_file($file_tmp_name,$path);
                                $data  = array('Image_name' => $newfilename, 'vehicle_id' => $resultId);
                                // print_r($data); exit;
                                $ret   = $this->photo_model->addImage($data);
                            }
                        }
                    }
                    redirect('admin/photo-gallery/');
                }
                    // else{
                    //     $this->session->set_flashdata('item', 'please upload image width 800 or height 1000');
                    //     redirect('admin/agroproduct/add');
                    // }
            }
            else{
                $data['error'] = 'THE UPLOADED FILE MUST BE A PDF OR Image';
				$this->session->set_flashdata('item',$this->upload->display_errors());
                redirect('admin/photo-gallery/add/');
            }
		}
		else{
			$data['error'] = 'THE UPLOADED FILE MUST BE A PDF OR Image';
			$this->session->set_flashdata('item',$this->upload->display_errors());
			redirect('admin/photo-gallery/add/');
		}
	}

	public function delete()
	{
		$r_id = $this->input->post('value');
		$ret = $this->photo_model->deleteRes($r_id);
		$this->session->set_flashdata('error', 'User Enquiry Deleted Successfully.');
		echo ('['.json_encode($data).']');
	}

}