<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_nlc extends CI_Controller {
	public function index()
	{
		$this->load->view('quiz_nlc/index');
	}
}
