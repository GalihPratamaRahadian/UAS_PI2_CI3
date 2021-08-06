<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hubungi_saya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hubungi_sayaModel');
    }
    public function index()
    {

        $data['allhubungi_saya'] = $this->hubungi_sayaModel->get_all_data_hubungi_saya();
        $data['title'] = "Hubungi Saya";

        $this->load->view('templates/header', $data);
        $this->load->view('hubungi_saya/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Tambah nomor";

        $this->load->view('templates/header', $data);
        $this->load->view('hubungi_saya/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpanhubungi_saya()
    {
        $data = [
            'no_tlp' => $this->input->post('no_tlp')
        ];
        $this->db->insert('hubungi_saya', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Nomor sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('hubungi_saya');
    }

    public function edit($id_telp)
    {
        $data['title'] = "Edit Nomor";
        $data['hubungi_saya'] = $this->db->get_where('hubungi_saya', ['id_telp' => $id_telp])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('hubungi_saya/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edithubungi_saya()
    {

        $this->db->set('no_tlp', $this->input->post['no_tlp']);
        $this->db->where('id_telp', $this->input->post['id_telp']);
        $this->db->update('hubungi_saya');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Nomor sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('hubungi_saya');
    }

    public function hapus($id_telp)
    {

        $this->db->where('id_telp', $id_telp);
        $this->db->delete('hubungi_saya');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Nomor sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('hubungi_saya');
    }
}