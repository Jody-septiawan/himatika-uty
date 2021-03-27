<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Webinar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['peserta'] = $this->db->get('pendaftaran_webinar')->result_array();

        $this->load->view('webinar/index', $data);
    }
}
