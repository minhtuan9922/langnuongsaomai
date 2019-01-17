<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model('mslide');
	}
	public function index()
	{
		$data['title'] = 'Trang chủ | phimmt';
		$data['slide'] = 'home/slide';
		$data['phimmoi'] = $this->mphim->phimmoicapnhat();
		$theloai = $this->mtheloai->theloai();
		
		$result = array();
		foreach($theloai as $item)
		{
			$result[] = array(
				'theloai' => $item['tentheloai'],
				'phim' => $this->mphim->get_list_phim($item['id_theloai'], 12, NULL, 'rand()'),
			);
		}
		$data['list_phim'] = $result;
		
		$data['list_slide'] = $this->mslide->danhsach();
		
		$data['content'] = 'home/home';
		$this->load->view('index', $data);
	}
	public function trailer()
	{
		if(isset($_POST['id']))
		{
			$phim = $this->mphim->playphim($_POST['id']);
			$trailer = $phim['trailer'];
			$json['trailer'] = $trailer;
			echo json_encode($json);
		}
	}
	public function timkiem()
	{
		if(isset($_POST['tukhoa']))
		{
			$tukhoa = $_POST['tukhoa'];
			$kq = $this->mphim->timphim($tukhoa);
			$html = '';
			if(!empty($kq))
			{
				foreach($kq as $item)
				{
					$html .= '<a href="'.base_url('xemphim/'.$item['id_phim'].'/'.$this->chuanhoa->convert_vi_to_en($item['tenphim_vn'])).'" >
								<div class="media">
									<img class="align-self-center mr-3" src="'.base_url('img/poster/'.$item['poster']).'" alt="Generic placeholder image" width="40px">
									<div class="media-body">
										<h5 class="mt-0">'.$item['tenphim_vn'].'</h5>
										<p>'.$item['tenphim_en'].'</p>
									</div>
								</div>
							</a>';
				}
			}
			else
			{
				$html .= '<p>Không tìm thấy phim bạn đang tìm</p>';
			}
			echo $html;
		}
	}
}
