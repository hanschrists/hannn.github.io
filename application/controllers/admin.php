<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['user'] = $this->db->get('user')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status')
            ];
            $this->db->insert('suhu', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">success!</div>');
            redirect('menu');
        }
    }
    public function role()
    {
        $data['title'] = 'role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function charts()
    {
        $this->load->helper('url');
        $this->load->database();
        // $query = $this->db->get('portfolio');
        // $data['portfolio']=$query->result_array();
        $this->load->view('charts/charts_suhu');
    }
    public function view_laporan()
    {
        $this->load->model('grafik_model');
        $data['labelnya'] = $this->grafik_model->load_data();
        $this->load->view('charts/charts_suhu', $data);
    }
    public function laporan()
    {
        try {
            $crud = new grocery_crud();

            //$crud->set_theme('datatables');
            $crud->set_table('suhu');
            $crud->set_subject('suhu');
            //'
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
}
