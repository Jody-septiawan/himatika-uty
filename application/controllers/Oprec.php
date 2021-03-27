<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Oprec_model', 'Search');
        $data['control'] = $this->db->get_where('control', ['id' => 1])->result_array();
        $status_c = $data['control'][0]['status'];

        if ($status_c != 1) {
            redirect('pending');
        }
    }

    public function index()
    {
        $this->load->view('oprec/header');
        $this->load->view('oprec/index');
        $this->load->view('oprec/footer');
    }

    public function pengumuman()
    {
        $nim = $this->input->post('nim');
        if (empty($nim)) {
            $this->session->set_flashdata('message', 'NIM tidak boleh kosong');
            redirect('oprec');
        }
        $data['oprec'] = $this->Search->SearchOprec($nim);
        $i = 0;
        foreach ($data['oprec'] as $d) :
            ++$i;
        endforeach;

        if ($i == 0) {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect('oprec');
        }


        $this->load->view('oprec/header-notice');
        $this->load->view('oprec/pengumuman', $data);
        $this->load->view('oprec/footer-notice');
    }
}
