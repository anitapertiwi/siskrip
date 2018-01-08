<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $dataFakultas;
	public function __construct(){
		parent::__construct();
		$this->dataFakultas = Array();
		$this->dataFakultas['FIP'] = "Fakultas Ilmu Pendidikan";
		$this->dataFakultas['FPIPS'] = "Fakultas Pendidikan Ilmu Pengetahuan Sosial";
		$this->dataFakultas['FPBS'] = "Fakultas Pendidikan Bahasa dan Sastra";
		$this->dataFakultas['FPMIPA'] = "Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam";
		$this->dataFakultas['FPTK'] = "Fakultas Pendidikan Teknologi dan Kejuruan";
		$this->dataFakultas['FPOK'] = "Fakultas Pendidikan Olahraga dan Kesehatan";
		$this->dataFakultas['FPEB'] = "Fakultas Pendidikan Ekonomi dan Bisnis";
		$this->dataFakultas['FPSD'] = "Fakultas Pendidikan Seni dan Desain";
		$this->dataFakultas['Cibiru'] = "Kampus Cibiru";
		$this->dataFakultas['Purwakarta'] = "Kampus Purwakarta";
		$this->dataFakultas['Tasikmalaya'] = "Kampus Tasikmalaya";
		$this->dataFakultas['Serang'] = "Kampus Serang";
		$this->dataFakultas['Sumedang'] = "Kampus Sumedang";		
		$this->dataFakultas['SPSS'] = "Sekolah Pascasarjana";		
	}
	public function praProcess($fakultas){

		return $this->dataFakultas[$fakultas];
	}
	public function toUpper(){
		$new = Array();
		foreach($this->dataFakultas as $key=>$row){
			$new[$key] = strtoupper($row);
		}
		return $new;
	}
	public function index()
	{
		// $data['jml_FIP'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Ilmu Pendidikan')->num_rows();
		// $data['jml_FPIPS'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Ilmu Pengetahuan Sosial')->num_rows();
		// $data['jml_FPBS'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Bahasa dan Sastra')->num_rows();
		// $data['jml_FPMIPA'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam')->num_rows();
		// $data['jml_FPTK'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Teknologi dan Kejuruan')->num_rows();
		// $data['jml_FPOK'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Olahraga dan Kesehatan')->num_rows();
		// $data['jml_FPEB'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Ekonomi dan Bisnis')->num_rows();
		// $data['jml_FPSD'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Seni dan Desain')->num_rows();
		// $data['jml_CBR'] = $this->Model_siskrip->showFiltered($fakultas='Kampus Cibiru')->num_rows();
		// $data['jml_PRW'] = $this->Model_siskrip->showFiltered($fakultas='Kampus Purwakarta')->num_rows();
		// $data['jml_TSK'] = $this->Model_siskrip->showFiltered($fakultas='Kampus Tasikmalaya')->num_rows();
		// $data['jml_SRG'] = $this->Model_siskrip->showFiltered($fakultas='Kampus Serang')->num_rows();
		// $data['jml_SMD'] = $this->Model_siskrip->showFiltered($fakultas='Kampus Sumedang')->num_rows();
		$x = $this->Model_siskrip->countFakultas()->result_array();
		$data['years'] = $this->Model_siskrip->getTW()->result_array();
		$indexes = Array();
		foreach($x as $i){
			$indexes[$i['fakultas']][$i['tahun_wisuda']] = $i['count(*)'];
		}
		$fix = array();
		foreach($indexes as $key=>$i){
			// var_dump(array_search($key,$this->toUpper()));
			$fix[array_search($key,$this->toUpper())] = $i; 
		}
		$data['jml'] = $fix;
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer',$data);
	}
	
	public function grafik($fakultas){
		$x = $this->Model_siskrip->countJurusan()->result_array();
				$data['jml'] = $this->Model_siskrip->countJurusan($this->praProcess($fakultas))->result_array();
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer2',$data);
	}

	public function dosen(){
		$data['jml'] = Array();
		$data['agregatDosen'] = $this->Model_siskrip->countDosen();
		$this->load->view('templates/header');
		$this->load->view('table2',$data);
		// $this->load->view('templates/footer');
		$this->load->view('templates/footer2',$data);

	}

	public function fakultasTabel(){
		$data['jml'] = Array();
		$data['agregatFakultas'] = $this->Model_siskrip->countFakultasTabel()->result();
		//$this->Model_siskrip->countFakultasTabel()->result();
		$this->load->view('templates/header');
		$this->load->view('table3',$data);
		// $this->load->view('templates/footer');
		$this->load->view('templates/footer2',$data);

	}

	public function jurusanTabel(){
		$data['jml'] = Array();
		$data['agregatJurusan'] = $this->Model_siskrip->countJurusanTabel()->result();
		//$this->Model_siskrip->countJurusanTabel($this->praProcess($fakultas))->result();
		$this->load->view('templates/header');
		$this->load->view('table4',$data);
		// $this->load->view('templates/footer');
		$this->load->view('templates/footer2',$data);

	}

/*	public function blank(){
		
		$x = $this->Model_siskrip->countFakultas()->result_array();
		$y = $this->Model_siskrip->getTW()->result_array();
		$indexes = Array();
		foreach($x as $i){
			$indexes[$i['fakultas']][$i['tahun_wisuda']] = $i['count(*)'];
		}
		echo "<pre>";
		print_r($indexes);
		echo "</pre>";
	}*/
	// public function chart(){
	// 	$this->load->view('chart');
	// }
	// public function form(){
	// 	$this->load->view('form');
	// }
	// public function login(){
	// 	$this->load->view('login');
	// }
	// public function registeration(){
	// 	$this->load->view('registeration');
	// }
	// public function table(){
	// 	$this->load->view('table');
	// }
	// public function tabpanel(){
	// 	$this->load->view('tab-panel');
	// }
	// public function ui(){
	// 	$this->load->view('ui');
	// }
}
