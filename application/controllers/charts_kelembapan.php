<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Charts_Kelembapan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //load chart_model from model
        $this->load->model('chart_model_kelembapan');
    }

    public function index()
    {
        $data['title'] = 'charts kelembapan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data = $this->chart_model_kelembapan->get_data()->result();
        $x['data'] = json_encode($data);

        $this->load->view('chart_kelembapan', $x);
    }
}
