<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		$content = file_get_contents('http://localhost/Magang/rest-server/index.php/kategori');
    	$data['result'] = json_decode($content);

    	$this->load->view('template/admin/header');
		$this->load->view('admin/kategori',$data);
		$this->load->view('template/admin/footer');
	}
}
