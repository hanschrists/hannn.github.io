<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }


    public function index()
    {
        $data['title'] = 'Data Suhu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['suhu'] = $this->db->get('suhu')->result_array();

        $this->form_validation->set_rules('suhu', 'Suhu', 'required');
        $this->form_validation->set_rules('hasil_akhir_alat_penulis', 'Hasil_Akhir_Alat_Penulis', 'required');
        $this->form_validation->set_rules('hasil_akhir_alat_pembanding', 'Hasil_Akhir_Alat_Pembanding', 'required');
        $this->form_validation->set_rules('error', 'Error', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'suhu' => $this->input->post('suhu'),
                'hasil_akhir_alat_penulis' => $this->input->post('hasil_akhir_alat_penulis'),
                'hasil_akhir_alat_pembanding' => $this->input->post('hasil_akhir_alat_pembanding'),
                'error' => $this->input->post('error'),
            ];
            $this->db->insert('suhu', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">success!</div>');
            redirect('menu');
        }
    }
    public function kelembapan()
    {
        $data['title'] = 'kelembapan tanah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kelembapan'] = $this->db->get('kelembapan_tanah')->result_array();

        $this->form_validation->set_rules('siraman_air', 'Siraman_Air', 'required');
        $this->form_validation->set_rules('nilai_eksas', 'Nilai_Eksas', 'required');
        $this->form_validation->set_rules('nilai_perkiraan', 'Nilai_Perkiraan', 'required');
        $this->form_validation->set_rules('galat', 'Galat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/kelembapan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'siraman_air' => $this->input->post('siraman_air'),
                'nilai_eksas' => $this->input->post('nilai_eksas'),
                'nilai_perkiraan' => $this->input->post('nilai_perkiraan'),
                'galat' => $this->input->post('galat')
            ];
            $this->db->insert('kelembapan_tanah', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">success!</div>');
            redirect('menu/kelembapan');
        }
    }
    public function formEdit($id)
    {
        $data['user'] = $this->User_model->getUserById($id);
        $this->load->view('menu/form_edit', $data);
    }
}
