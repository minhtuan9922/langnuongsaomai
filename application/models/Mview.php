<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mview extends CI_Model{

	public function __construct() {
	parent::__construct();
		$ip = $_SERVER['REMOTE_ADDR'];
		$diachitruoc = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
		$diachisau = base_url().$_SERVER['REQUEST_URI'];
		$lichsu = $this->get_lichsu($ip, date('Y-m-d H:i:s', strtotime('-1 hour')));
		if(empty($lichsu))
		{
			$data = array(
				'ip' => $ip,
				'diachitruoc' => $diachitruoc,
				'diachisau' => $diachisau,
				'ngaygio' => date('Y-m-d H:i:s')
			);
			$this->themlichsu($data);
		}
	}

	public function get_lichsu($ip, $date)
	{
		$this->db->from('lichsuxem');
		$this->db->where('ip', $ip);
		$this->db->where('ngaygio >', $date);
		return $this->db->get()->row_array();
	}
	public function danhsach($start = NULL, $limit = NULL) 
	{
		$this->db->from('video');
		$this->db->order_by('ngaythem desc');
		if($limit != NULL && $start == NULL)
		{
			$this->db->limit($limit);
		}
		elseif($limit != NULL && $start != NULL)
		{
			$this->db->limit($limit, $start);
		}
		return $this->db->get()->result_array();
	}
	public function countAll(){
		$this->db->from('video');
		return $this->db->count_all_results(); 
	}
	public function themlichsu($data = array())
	{
		$this->db->insert('lichsuxem',$data);
		return $this->db->insert_id();
	}
	public function capnhat($data = array(), $id) 
	{
		$this->db->where('idvideo',$id);
        return $this->db->update('video',$data);
	}
	public function get_list_video($limit = NULL)
	{
		$this->db->from('video');
		if($limit != NULL)
		{
			$this->db->limit($limit);
		}
		return $this->db->get()->result_array();
	}
	public function xoavideo($idvideo)
	{
		$this->db->where('idvideo', $idvideo);
		return $this->db->delete('video');
	}
}