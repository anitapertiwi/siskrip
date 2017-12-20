<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function praProcess($fakultas){
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

		return $dataFakultas[$fakultas];
	}
	public function index()
	{
		$data['jml_FIP'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Ilmu Pendidikan')->num_rows();
		$data['jml_FPIPS'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Ilmu Pengetahuan Sosial')->num_rows();
		$data['jml_FPBS'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Bahasa dan Sastra')->num_rows();
		$data['jml_FPMIPA'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam')->num_rows();
		$data['jml_FPTK'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Teknologi dan Kejuruan')->num_rows();
		$data['jml_FPOK'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Olahraga dan Kesehatan')->num_rows();
		$data['jml_FPEB'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Ekonomi dan Bisnis')->num_rows();
		$data['jml_FPSD'] = $this->Model_siskrip->showFiltered($fakultas='Fakultas Pendidikan Seni dan Desain')->num_rows();
		
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer',$data);
	}
	
	public function grafik($fakultas){
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
	// public function blank(){
	// 	$this->load->view('blank');
	// }
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
