<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_nv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('m_nv');
		$data=$this->m_nv->getAll();
		$dulieu['dsnv'] = $data;
		$this->load->view('v_nv', $dulieu);	
	}
	public function loadInsert()
	{
		$this->load->view('v_insert');
	}
	function insert(){
		$manv = $this->input->post('manv');
		$hoten = $this->input->post('hoten');
		$namsinh = $this->input->post('namsinh');
		$quequan = $this->input->post('quequan');
		$chucvu = $this->input->post('chucvu');
		$anhdaidien = $this->upload_avatar();
		$this->load->model('m_nv');
		$this->m_nv->insert($manv, $hoten, $namsinh, $quequan, $chucvu, $anhdaidien);
		if($manv != ''){
			echo '<script type="text/javascript">alert("Thêm thành công")</script>';
			$data = $this->m_nv->getAll();
			$dulieu['dsnv'] = $data;
			$this->load->view('v_nv', $dulieu);
		}else{
			echo '<script type="text/javascript">alert("Thêm thất bại")</script>';
			$data = $this->m_nv->getAll();
			$dulieu['dsnv'] = $data;
			$this->load->view('v_nv', $dulieu);
		}
	}
	function upload_avatar()
	{
		$config['upload_path'] = './avatar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('anhdaidien')){
			$error = array('error' => $this->upload->display_errors());
			echo '<pre>';
			print_r($error);
			echo '</pre>';
			die;
		}else{
			return "avatar/".$this->upload->data()['file_name'];
		}
	}
	function sua($manv)
	{
		$this->load->model('m_nv');
		$record = $this->m_nv->getByManv($manv);
		// if (file_exists($record['anhdaidien'])) {
		// 	unlink($record['anhdaidien']);
		// }
		$dulieu['dsnv'] = $record;
		$this->load->view('v_update', $dulieu);

	}
	function search()
	{
		$this->load->model('m_nv');
		$keyword    =   $this->input->post('keyword');
        $record =   $this->m_nv->search($keyword);
		$dulieu['dsnv'] = $record;
        $this->load->view('result_view', $dulieu);
	}
	function update()
	{
		$this->load->model('m_nv');
		$manv = $this->input->post('manv');
		$hoten = $this->input->post('hoten');
		$namsinh = $this->input->post('namsinh');
		$quequan = $this->input->post('quequan');
		$chucvu = $this->input->post('chucvu');
		$anhdaidien = $this->upload_avatar();
		if($manv){
			$this->m_nv->update($manv, $hoten, $namsinh, $quequan, $chucvu, $anhdaidien);
			echo '<script type="text/javascript">alert("Sửa thành công")</script>';
			$data = $this->m_nv->getAll();
			$dulieu['dsnv'] = $data;
			$this->load->view('v_nv', $dulieu);
		}else{
			echo '<script type="text/javascript">alert("Sửa thất bại")</script>';
			$data = $this->m_nv->getAll();
			$dulieu['dsnv'] = $data;
			$this->load->view('v_nv', $dulieu);
		}
	}
	function xoa($manv){ 
		$this->load->model('m_nv');
		// $record = $this->m_nv->getByManv($manv);
		// echo $record[5];
		if($manv){
			$this->m_nv->deleteById($manv);
			echo '<script type="text/javascript">alert("Bạn có muốn xóa?")</script>';
			// if (file_exists($record['anhdaidien'])){
			// }
			$data = $this->m_nv->getAll();
			$dulieu['dsnv'] = $data;
			$this->load->view('v_nv', $dulieu);
		}else{
			echo '<script type="text/javascript">alert("Không thể xóa")</script>';
			$data = $this->m_nv->getAll();
			$dulieu['dsnv'] = $data;
			$this->load->view('v_nv', $dulieu);
		}
	}

}

/* End of file c_so.php */
/* Location: ./application/controllers/c_so.php */