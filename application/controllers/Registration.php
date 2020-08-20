<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  public function __construct(){
		parent::__construct();
		$this->load->model('registration_mod');
  }
  
	public function index(){
		redirect("registration/registration_list");
  }
  
  public function registration_list(){
    $data['registration_list'] 			= $this->registration_mod->register_list_db();
    
		$data['subview'] 			= 'registration/registration_list';
		$data['meta_title'] 	= 'Registration List';
		$this->load->view('index', $data);
	}

	public function registration_detail($id){
		$where['id'] 						= $id;
		$registration_list 			= $this->registration_mod->register_list_db($where);
		$data['registration'] 	= $registration_list[0];
		
		$data['subview'] 			= 'registration/registration_detail';
		$data['meta_title'] 	= 'Registration Detail';
		$this->load->view('index', $data);
	}

	public function registration_reviewqa_process(){
		print_r($this->input->post());
		$post = $this->input->post();
		$form_data = array(
			'num_audit' 	=> $post['num_audit'],
			'day_audit' 	=> $post['day_audit'],
			'status' 			=> 1,
		);
		$where['id'] = $post['id'];
		$this->registration_mod->register_update_process_db($form_data, $where);
		$this->session->set_flashdata('success', 'Your data has been updated!');
		redirect('registration/registration_detail/'.$post['id']);
	}
}
