<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhinhanh extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function get_hinhanh()
	{
		$this->db->from('hinhanh');
		$this->db->order_by('ngaythem', 'desc');
		return $this->db->get()->result_array();
	}
	public function themlienhe($data = array())
	{
		$this->db->insert('lienhe',$data);
		return $this->db->insert_id();
	}
}