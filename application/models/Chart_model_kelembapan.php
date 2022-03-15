<?php
class Chart_model_kelembapan extends CI_Model
{

    //get data from database
    function get_data()
    {
        $this->db->select('siraman_air,nilai_eksas,nilai_perkiraan,galat');
        $result = $this->db->get('kelembapan_tanah');
        return $result;
    }
}
