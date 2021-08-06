<?php

class historyModel extends CI_Model
{
    public function get_all_data_history()
    {
        $query = "SELECT * FROM history";
        return $this->db->query($query)->result_array();
    }

    public function simpanprofil()
    {
    }
}
