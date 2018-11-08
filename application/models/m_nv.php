<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_nv extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	//get all 
	function getAll(){
		$data = $this->db->get('danhsach');
		$data = $data->result_array();
		return $data;
	}
	function insert($manv, $hoten, $namsinh, $quequan, $chucvu, $anhdaidien)
	{
		$object = [
			'manv' => $manv,
			'hoten' => $hoten,
			'namsinh' => $namsinh,
			'quequan' => $quequan,
			'chucvu' => $chucvu,
			'anhdaidien' => $anhdaidien
		];
		$this->db->insert('danhsach', $object);
		return $this->db->insert_id();
	}
	function getByManv($manv)
	{
		$this->db->where('manv', $manv);
		$record = $this->db->get('danhsach');
		return $record->result_array();
	}
	function search($keyword){
		$this->db->like('manv',$keyword);
        $record  =   $this->db->get('danhsach');
        return $record->result_array();
	}
	function update($manv, $hoten, $namsinh, $quequan, $chucvu, $anhdaidien)
	{
		$object = [
			'hoten' => $hoten,
			'namsinh' => $namsinh,
			'quequan' => $quequan,
			'chucvu' => $chucvu,
			'anhdaidien' => $anhdaidien
		];

		$this->db->where('manv', $manv);
		$this->db->update('danhsach', $object);
		return $this->db->affected_rows();
	}
	function deleteById($manv){
		$this->db->where('manv', $manv);
		$data = $this->db->delete('danhsach');
		return $data;
	}
}

/* End of file m_so.php */
/* Location: ./application/models/m_so.php */