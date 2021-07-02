<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
   
	public function __construct() {
		parent::__construct(); 
		$this->load->model('PagesModel');         
	}
   
	public function index()
	{
		$data['data'] = $this->PagesModel->get_pages();
		$this->load->view('includes/header');       
		$this->load->view('pages/page_list',$data);
	}
   
	public function create()
	{
		$this->load->view('includes/header');
		$this->load->view('pages/create',array('error' => ' ' ));
	}
   
	public function store()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('page_files[]', 'Files', 'callback_files_check');
		
		if ($this->form_validation->run() == FALSE) {
			$this->create();
		}
		else{
			$this->load->library('upload');
			$files = $_FILES;
			$cpt = count($_FILES['page_files']['name']);//count for number of image files
			$page_name =array();
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['page_files']['name']= $files['page_files']['name'][$i];
				$_FILES['page_files']['type']= $files['page_files']['type'][$i];
				$_FILES['page_files']['tmp_name'] = $files['page_files']['tmp_name'][$i];
				$_FILES['page_files']['error']= $files['page_files']['error'][$i]; 
				$_FILES['page_files']['size'] = $files['page_files']['size'][$i];

				$this->upload->initialize($this->set_upload_options());
         
				if ( ! $this->upload->do_upload('page_files'))
                {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('includes/header');
					$this->load->view('pages/create', $error);
                }
                else
                {
					$data = array('upload_data' => $this->upload->data());
					$page_name[$i]['name']=$data['upload_data']['file_name'];
				}
			}
			if(!empty($page_name)){
				$this->load->model('PagesModel');
				$this->PagesModel->insert_page($page_name); 
				redirect(base_url('index.php/pages'));
			}
			
		}
    }
	public function set_upload_options()
{   
    $config = array();
    $config['upload_path'] = './resources/pages/';
    $config['allowed_types'] = 'doc|docx';
    $config['overwrite']     = FALSE;

    return $config;
}
	function files_check(){

		if (empty($_FILES['page_files']['name'])) {
			$this->form_validation->set_message('files_check', 'Please select file.');
            return false;
        }else{
			if(count($_FILES['page_files']['name'])<2){
				$this->form_validation->set_message('files_check', 'Please select min 2 files.');
				return false;
			}else{
				return true;
			}
        }
	}
}