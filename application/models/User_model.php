<?php
class User_model extends CI_Model
{
    public function getUserById($id)
    {
        return $this->db->get_where('suhu', ['id' => $id])->row_array();
    }
}
