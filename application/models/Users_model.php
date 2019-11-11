<?php
	class Users_model extends CI_Model {

		public function retrive(){
			$this->db->select('id, nim, nama_mhs, jk, alamat, no_hp');
			$this->db->from('mahasiswa');
			$q = $this->db->get();
			if ($q->num_rows() > 0) {
				$hasil = $q->result_array();
			}else{
				$hasil = array();
			}
			$q->free_result();
			return $hasil;
		}

		public function retrive2() {
			$this->db->select('id, nim, no_hp_lama, no_hp_baru, tgl_diubah');
			$this->db->from('log');
			$q = $this->db->get();
			if ($q->num_rows() > 0) {
				$hasil = $q->result_array();
			}else{
				$hasil = array();
			}
			$q->free_result();
			return $hasil;
		}

		public function simpan_data($data){
			$q = $this->db->insert('mahasiswa', $data);
		}

		public function getUser($id){
			$q = $this->db->where('id', $id)->get('mahasiswa');
			return $q;
		}

		public function update_data(){
			$id = $this->input->post('id');
			$data = array(
				'nim' => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
			);

			$q = $this->db->where('id', $id)->update('mahasiswa', $data);
			if ($q) {
				redirect('Users/tampilan');
			}
		}

		public function delete_data(){
			$id = $this->uri->segment(3);
			$q = $this->db->where('id', $id);
			return $this->db->delete('mahasiswa');
			if ($q) {
				redirect('Users/tampilan');
			}
		}

	}