<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('profilModel', 'pm');
	}
	public function index()
	{

		$data['allprofil'] = $this->pm->get_all_data_profil();
		$data['title'] = "Profil Diri";

		$this->load->view('templates/header', $data);
		$this->load->view('profil/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = "Tambah Profil";

		$this->load->view('templates/header', $data);
		$this->load->view('profil/create', $data);
		$this->load->view('templates/footer');
	}

	public function simpanprofil()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'gol_darah' => $this->input->post('gol_darah'),
			'status' => $this->input->post('status'),
		];
		$this->db->insert('profil', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Profil sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('profil');
	}

	public function edit($id_profil)
	{
		$data['title'] = "Edit Profil";
		$data['profil'] = $this->db->get_where('profil', ['id_profil' => $id_profil])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('profil/edit', $data);
		$this->load->view('templates/footer');
	}

	public function editprofil()
	{

		$this->db->set('nama', $this->input->post('nama'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('tgl_lahir', $this->input->post('tgl_lahir'));
		$this->db->set('gol_darah', $this->input->post('gol_darah'));
		$this->db->set('status', $this->input->post('status'));
		$this->db->where('id_profil', $this->input->post('id_profil'));
		$this->db->update('profil');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Profil sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('profil');
	}

	public function hapus($id_profil)
	{

		$this->db->where('id_profil', $id_profil);
		$this->db->delete('profil');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Profil sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('profil');
	}
}
