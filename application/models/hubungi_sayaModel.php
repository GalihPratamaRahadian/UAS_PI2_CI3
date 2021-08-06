<?php

class hubungi_sayaModel extends CI_Model
{
        public function get_all_data_hubungi_saya()
        {
            $query = "SELECT * FROM hubungi_saya";
            return $this->db->query($query)->result_array();
        }
    
        public function simpanprofil()
        {
        }
    }
    
