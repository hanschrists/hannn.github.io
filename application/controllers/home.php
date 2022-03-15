<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        if ($this->form_validation->run() == false) {
            $data['title'] = 'home';
            $this->load->view('penampung/header', $data);
            $this->load->view('penampung/sidebar', $data);
            $this->load->view('penampung/topbar', $data);
            $this->load->view('home/index', $data);
            $this->load->view('penampung/footer');
        }
    }
    public function kontak()
    {
        if ($this->form_validation->run() == false) {
            $data['title'] = 'kontak';
            $this->load->view('penampung/header', $data);
            $this->load->view('penampung/sidebar', $data);
            $this->load->view('penampung/topbar', $data);
            $this->load->view('home/kontak', $data);
            $this->load->view('penampung/footer');
        }
    }
    public function berita()
    {
        if ($this->form_validation->run() == false) {
            $data['title'] = 'berita';
            $this->load->view('penampung/header', $data);
            $this->load->view('penampung/sidebar', $data);
            $this->load->view('penampung/topbar', $data);
            $this->load->view('home/berita', $data);
            $this->load->view('penampung/footer');
        }
    }
    public function blocked()
    {
        $this->load->view('home/blocked');
    }
}
