<?php
defined('BASEPATH') or exit('No direct script access allowed');

class history extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('historyModel', 'hm');
    }
    public function index()
    {
        $this->load->model('historyModel', 'hm');

        $data['allhistory'] = $this->hm->get_all_data_history();
        $data['title'] = "history";

        $this->load->view('templates/header', $data);
        $this->load->view('history/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Tambah history";

        $this->load->view('templates/header', $data);
        $this->load->view('history/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpanhistory()
    {
        $data = [
            'nama_sd_terakhir' => $this->input->post('nama_sd_terakhir'),
            'nama_smp_terakhir' => $this->input->post('nama_smp_terakhir'),
            'nama_sma_terakhir' => $this->input->post('nama_sma_terakhir'),
        ];
        $this->db->insert('history', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>History sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('history');
    }

    public function edit($id_history)
    {
        $data['title'] = "Edit History";
        $data['history'] = $this->db->get_where('history', ['id_history' => $id_history])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('history/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edithistory()
    {

        $this->db->set('nama_sd_terakhir', $this->input->post('nama_sd_terakhir'));
        $this->db->set('nama_smp_terakhir', $this->input->post('nama_smp_terakhir'));
        $this->db->set('nama_sma_terakhir', $this->input->post('nama_sma_terakhir'));
        $this->db->where('id_history', $this->input->post('id_history'));
        $this->db->update('history');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>History sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('history');
    }

    public function hapus($id_history)
    {

        $this->db->where('id_history', $id_history);
        $this->db->delete('history');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>History sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('history');
    }
}
