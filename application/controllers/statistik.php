<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statistik extends CI_Controller {
	public function index()
	{
		$this->load->view('statistik/statistik');
	}
}
