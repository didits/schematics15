<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oprec extends CI_Controller {

	public function index()
	{
		$this->load->view('oprec/oprec_login');
	}
}
