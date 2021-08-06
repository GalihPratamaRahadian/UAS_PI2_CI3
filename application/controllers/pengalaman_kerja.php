<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengalaman_kerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengalaman_kerjaModel');
    }
    public function index()
    {

        $data['allpengalaman_kerja'] = $this->pengalaman_kerjaModel->get_all_data_pengalaman_kerja();
        $data['title'] = "Pengalaman Kerja";

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman_kerja/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Tambah pengalaman kerja";

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman_kerja/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpanpengalaman_kerja()
    {
        $data = [
            'pengalaman' => $this->input->post('pengalaman')
        ];
        $this->db->insert('pengalaman_kerja', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Pengalaman sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pengalaman_kerja');
    }

    public function edit($id_pengalaman)
    {
        $data['title'] = "Edit Pengalaman";
        $data['pengalaman_kerja'] = $this->db->get_where('pengalaman_kerja', ['id_pengalaman' => $id_pengalaman])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pengalaman_kerja/edit', $data);
        $this->load->view('templates/footer');
    }

    public function editpengalaman_kerja()
    {

        $this->db->set('pengalaman', $this->input->post('pengalaman'));
        $this->db->where('id_pengalaman', $this->input->post('id_pengalaman'));
        $this->db->update('pengalaman_kerja');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Pengalaman sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pengalaman_kerja');
    }

    public function hapus($id_pengalaman)
    {

        $this->db->where('id_pengalaman', $id_pengalaman);
        $this->db->delete('pengalaman_kerja');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Pengalaman sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pengalaman_kerja');
    }
}