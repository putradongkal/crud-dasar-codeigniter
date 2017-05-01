<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Mahasiswa_model');
		$this->load->library('session');

	}

	public function index() {

		$alert 	= $this->session->flashdata('alert');
		$data 	= array('mahasiswa'=>$this->Mahasiswa_model->get_mahasiswa(),
					  	'alert'=>$alert);

		$this->load->view('mahasiswa', $data);

	}

	public function input() {

		$error = '';

		if($this->input->post()) {

			$this->form_validation->set_rules('nim','Nim','required');
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('kelas','Kelas','required');
			$this->form_validation->set_rules('fakultas','Fakultas','required');

			if($this->form_validation->run() == FALSE) {

				$error = '<div class="alert alert-danger alert-dismissible align-left">
								<i class="fa fa-user-times"></i>
								Harap isi kolom dengan benar
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				          </div>';

			} else {

				$this->Mahasiswa_model->set_mahasiswa();

				$error = '<div class="alert alert-success alert-dismissible align-left">
								<i class="fa fa-user-plus"></i> 
								Mahasiswa baru berhasil ditambahkan.
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				          </div>';

			}
		}

		$this->load->view('input', ['error'=>$error]);

	}

	public function edit() {

		$nim 	= $this->input->get('nim');
		$error 	= '';

		if(!empty($nim)) {

			if($this->input->post()) {

				$this->form_validation->set_rules('nama','Nama','required');
				$this->form_validation->set_rules('kelas','Kelas','required');
				$this->form_validation->set_rules('fakultas','Fakultas','required');

				if($this->form_validation->run() == FALSE) {

					$error = '<div class="alert alert-danger alert-dismissible align-left">
									<i class="fa fa-user-times"></i>
									Harap isi kolom dengan benar
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					          </div>';

				} else {

					$this->Mahasiswa_model->update_mahasiswa($nim);

					$error = '<div class="alert alert-success alert-dismissible align-left">
									<i class="fa fa-user-plus"></i> 
									Data mahasiswa berhasil diubah.
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					          </div>';

				}
			}

			$mahasiswa 	= $this->Mahasiswa_model->get_mahasiswa($nim);
			$data 		= array('error'=>$error,
								'mhs'=>$mahasiswa);

			$this->load->view('edit', $data);

		} else {

			$this->load->view('error-404');

		}
	}

	public function hapus() {

		$nim = $this->input->get('nim');

		if(!empty($nim)) {

			echo 'Silahkan tunggu...';

			$alert = '<div class="alert alert-warning alert-dismissible align-left">
						<i class="fa fa-trash"></i>
						1 Mahasiswa berhasil dihapus
					    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					  </div>';

			$this->Mahasiswa_model->delete_mahasiswa($nim);
			$this->session->set_flashdata('alert', $alert);
			redirect(site_url().'/mahasiswa');

		} else {

			$this->load->view('error-404');

		}
	}
	
}