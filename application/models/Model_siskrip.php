<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siskrip extends CI_Model{
	/*public function ShowTable(){
		$sql = "select * from siskrip";
		$query = $this->db->query($sql);
		return $query->row_array();
	}*/

	public function showAll(){
		$this->db->select("*");
		$this->db->from('siskrip');
		$query = $this->db->get();
		return $query->result();
	}

	public function showFiltered($fakultas = NULL,$jurusan = NULL,$judul = NULL, $dosen= NULL){
		$this->db->select("*");
		$this->db->from('siskrip');
		if(isset($fakultas)){
			$this->db->where('fakultas',$fakultas);
			$this->db->order_by('jurusan','ASC');
		}


		if(isset($jurusan))
			$this->db->where("jurusan",$jurusan);

		if(isset($judul))
			$this->db->where("judul like '%".$judul."%'");


		if(isset($dosen)){
			$where = "(dosen_pembimbing1 like '%".$dosen."%' or dosen_pembimbing2 like '%".$dosen."%')";
			$this->db->where($where);
		}

		return $this->db->get();
	}

	public function countJurusan($fakultas){
		$this->db->select("jurusan, count(*) as 'num' ");
		$this->db->from('siskrip');
		$this->db->where('fakultas',$fakultas);
		$this->db->group_by('jurusan');

		return $this->db->get();
	}
	public function countDosen(){
		$indexes = Array();
		foreach($this->showAll() as $row){
			$key = $row->dosen_pembimbing1;
			if($key != "" && !array_key_exists($key,$indexes)){
				$indexes[$key] = Array(
					"dosen" => $key,
					"p1" => 1,
					"p2" => 0
				);
			}else{
				if(isset($indexes[$key])){
					$indexes[$key]["p1"]+=1;
				}
			}
		}
		foreach($this->showAll() as $row){
			$key = $row->dosen_pembimbing2;
			if($key != "" && array_key_exists($key,$indexes)){
				$indexes[$key] = Array(
					"dosen" => $key,
					"p1" => 0,
					"p2" => 1
				);
			}else{
				if(isset($indexes[$key])){
					$indexes[$key]["p2"]+=1;
				}			}
		}		

		return $indexes;
	}	

/*	public function showTable(){
		$query = $this->db->get('siskrip');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return array();
		}
	}*/
	
}