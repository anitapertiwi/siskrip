<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skripsi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_siskrip');
	}
	public function praProcess($fakultas,$jurusan){
		$dataFakultas = Array();

		$dataFakultas['FIP'] = "Fakultas Ilmu Pendidikan";
		$dataFakultas['FPIPS'] = "Fakultas Pendidikan Ilmu Pengetahuan Sosial";
		$dataFakultas['FPBS'] = "Fakultas Pendidikan Bahasa dan Sastra";
		$dataFakultas['FPMIPA'] = "Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam";
		$dataFakultas['FPTK'] = "Fakultas Pendidikan Teknologi dan Kejuruan";
		$dataFakultas['FPOK'] = "Fakultas Pendidikan Olahraga dan Kesehatan";
		$dataFakultas['FPEB'] = "Fakultas Pendidikan Ekonomi dan Bisnis";
		$dataFakultas['FPSD'] = "Fakultas Pendidikan Seni dan Desain";
		$dataFakultas['SPS'] = "Sekolah Pasca Sarjana";

		return [$dataFakultas[$fakultas],urldecode($jurusan)];
	}

	public function index($fakultas = NULL, $jurusan = NULL){
		$get = $this->praProcess($fakultas,$jurusan);
		$data['siskrip'] = $this->Model_siskrip->showFiltered($get[0],$get[1])->result();
		$data['jml'] = Array();
		$this->load->view('templates/header');
		$this->load->view('table',$data);
		// $this->load->view('templates/footer');
		$this->load->view('templates/footer2');
	}
	public function information($fakultas = NULL, $jurusan = NULL){
		$data['jml'] = Array();

		$this->load->view('templates/header');
		$this->load->view('templates/information');
		// $this->load->view('templates/footer');
		$this->load->view('templates/footer2');
	}

	public function search(){
		$data = $this->input->post();
		$data['jml'] = NULL;

		$data['fakultas'] = NULL;
		if($data['jurusan'] == ""){
			$data['jurusan'] = NULL;
		}
		if($data['judul'] == ""){
			$data['judul'] = NULL;
		}		
		if($data['dosen'] == ""){
			$data['dosen'] = NULL;
		}		

		$data['siskrip'] = $this->Model_siskrip->showFiltered($data['fakultas'],$data['jurusan'],$data['judul'],$data['dosen'])->result();
		// var_dump($data);
		$this->load->view('templates/header');
		$this->load->view('table',$data);
		$this->load->view('templates/footer2');
	}
	
}
	/*public function fetchMemberData(){
		$nim = $this->session->userdata('nim');
		$penulis $this->session->userdata('penulis');
		
		$result = array('data' => array());
		$data = $this->Model_siskrip->ShowTable();
		if($data != null){
			$no = 1;
			foreach ($data as $key => $value) {
				$result['data'][$key] = array(
					$no++,
					$value['nim'],
					$value['penulis'],
				);
			}
			echo json_encode($result);
		}*/
		/*else{
			echo json_encode({
				"sEcho" => 1,
				"iTotalRecord" => 0,
				"iTotalDisplayRecord" => 0,
				"aaData" => []
			});
		}*/

		/*public function tampildata(){
     		$data = $this->db->query("SELECT * FROM siskrip");
           	foreach ($data->result_array() as $siskrip) {
                echo "Nim : ".$siskrip['nim']."<br/>";
                echo "Penulis : ".$siskrip['penulis']."<hr/>";
                echo "Judul : ".$siskrip['judul']."<hr/>";
                echo "Jurusan : ".$siskrip['jurusan']."<hr/>";
                echo "Fakultas : ".$siskrip['fakultas']."<hr/>";
                echo "Dosen Pembimbing 1 : ".$siskrip['dosenpembimbing1']."<hr/>";
                echo "Dosen Pembimbing 2 : ".$siskrip['dosenpembimbing2']."<hr/>";
                echo "Abstrak : ".$siskrip['abstrak']."<hr/>";
        	}
 		}
 	}*/