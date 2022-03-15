<?php
class Chart_model extends CI_Model
{

    //get data from database
    function get_data()
    {
        $this->db->select('suhu,hasil_akhir_alat_penulis,hasil_akhir_alat_pembanding,error');
        $result = $this->db->get('suhu');
        return $result;
    }
}
