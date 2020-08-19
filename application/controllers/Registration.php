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
  }
  
	public function index(){
		redirect("registration/registration_list");
  }
  
  public function registration_list(){
    $data['registration_list'] 			= array();
    
		$data['subview'] 			= 'registration/registration_list';
		$data['meta_title'] 	= 'Registration List';
		$this->load->view('index', $data);
	}
}
