<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlienhe extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function get_sanpham_danhmuc($iddanhmuc)
	{
		$this->db->from('lienhe');
		$this->db->order_by('ngaythem', 'desc');
		return $this->db->get()->result_array();
	}
	public function themlienhe($data = array())
	{
		$this->db->insert('lienhe',$data);
		return $this->db->insert_id();
	}
}