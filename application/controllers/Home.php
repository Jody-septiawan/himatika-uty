<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['agenda'] = $this->db->get('agenda')->result_array();
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('home/footer');
    }
}
