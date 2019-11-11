<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index(){
		redirect('users/tampilan');
	}

	public function tampilan() {
		$data = array(
			'isi' => $this->users_model->retrive(),
		);
		$this->load->view('tampilan_data', $data);
	}

	public function tampilan2() {
		$data = array(
			'isi' => $this->users_model->retrive2(),
		);
		$this->load->view('log_list', $data);
	}

	public function add(){
		$data = array('title' => 'Addfrom');
		$this->load->view('addform', $data);
	}

	public function simpan(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_mhs','nama_mhs','required');
		$this->form_validation->set_rules('no_hp', 'no_hp', "required");
		if ($this->form_validation->run() == false) {
			$data = array(
				'judul' => 'Addfrom');
			$this->load->view('addform', $data);

			echo "Halaman gagal Tersimpan";
		}else{
			echo "Halaman Tersimpan";

			$data = array(
				'id' => '',
				'nim' => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp')
			);
			$this->users_model->simpan_data($data);

			redirect('users/tampilan');
		}
	}

	public function ubah($id){
		$id = $this->uri->segment(3);
		$q = $this->users_model->getRow($id);
		$data = array(
			'judul' => 'Ubah Data',
			'id' => $q->row('id'),
			'nim' => $q->row('nim'),
			'nama_mhs' => $q->row('nama_mhs'),
			'jk' => $q->row('jk'),
			'alamat' => $q->row('alamat'),
			'no_hp' => $q->row('no_hp')
			);
		$this->load->view('editform', $data);
	}

	public function update(){
		$this->users_model->editform();
		}

	public function view() {
		$id = $this->uri->segment(3);
	}

	public function delete(){
		$this->users_model->editform();
	}
}
