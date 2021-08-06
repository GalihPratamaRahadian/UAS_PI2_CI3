<?php

class pengalaman_kerjaModel extends CI_Model
{
        public function get_all_data_pengalaman_kerja()
        {
            $query = "SELECT * FROM pengalaman_kerja";
            return $this->db->query($query)->result_array();
        }
    
        public function simpanprofil()
        {
        }
    }
    
