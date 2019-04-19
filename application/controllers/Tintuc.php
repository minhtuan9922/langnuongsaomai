<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tintuc extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('mbaiviet');
	}
	public function index()
	{
		$data['title'] = 'Tin tức';
		
		
		$data['content'] = 'gioithieu';
		$this->load->view('index', $data);
	}
}
