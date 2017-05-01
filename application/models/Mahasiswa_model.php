<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function __construct() {

		$this->load->Database();

	}

	public function set_mahasiswa() {

		$data = array('nim'=>$this->input->post('nim'),
			          'nama_mahasiswa'=>$this->input->post('nama'),
			          'kelas'=>$this->input->post('kelas'),
			          'fakultas'=>$this->input->post('fakultas'));

		return $this->db->insert('mahasiswa', $data);

	}

	public function get_mahasiswa($nim = FALSE) {

		if($nim == FALSE){

			return $this->db->get('mahasiswa')
							->result_array();
							
		} else {

			return $this->db->get_where('mahasiswa', array('nim'=>$nim))
							->row_array();

		}

	}

	public function update_mahasiswa($nim) {

		$data = array('nama_mahasiswa'=>$this->input->post('nama'),
			          'kelas'=>$this->input->post('kelas'),
			          'fakultas'=>$this->input->post('fakultas'));		

		return $this->db->where('nim', $nim)
						->update('mahasiswa', $data);

	}

	public function delete_mahasiswa($nim) {

		return $this->db->where('nim', $nim)
						->delete('mahasiswa');

	}
}