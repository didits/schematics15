<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oprec extends CI_Controller {
	function __construct() {
    	parent::__construct();
    	$this->load->model('oprec_model');
		$this->load->lybrary('session')
;    }

	public function index()
	{
		$this->load->view('oprec/oprec_login');
	}
	
	public function register()
	{
		if(empty($_POST['captcha']))
		{
				$nrp = $this->input->post('nrp');
				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$fb = $this->input->post('fb');
			$this->oprec_model->input_oprec($nrp, $nama, $email, $fb);
		}else
		{
			redirect(base_url()."oprec?status=gagal"); 
		}
	}
}
