<?php

class profilModel extends CI_Model
{
    public $id_profil;
    public $nama;
    public $alamat;
    public $tgl_lahir;
    public $gol_darah;
    public $status;

    public function get_all_data_profil()
    {
        $query = "SELECT * FROM profil";
        return $this->db->query($query)->result_array();
    }

    public function simpanprofil()
    {
    }
}
