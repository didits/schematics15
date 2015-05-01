<?php

class Oprec_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
	public function input_oprec($nrp, $nama, $email, $fb)
	{
    	$this->db->query("insert into oprec(nrp,nama,email,fb)values('$nrp','$nama','$email','$fb')");
	}
}

