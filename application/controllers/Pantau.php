<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pantau extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function voter()
    {
        $this->load->view('pantau/voter');
    }

    public function activity()
    {
        $this->load->view('pantau/activity');
    }

    public function data_log_voter()
    {
        date_default_timezone_set('Asia/Jakarta');

        $query = "SELECT p.nim,p.nama, l.ip_address, l.browser, l.sistem_operasi, l.status, l.time FROM log_voting l, pemilih p
                    WHERE l.id_pemilih = p.id ORDER BY l.id DESC";
        $data = $this->db->query($query)->result_array();

        $no = 0;
        foreach ($data as $d) :
            $data[$no]['time'] = date('d-m-Y H:i', $d['time']);
            $no++;
        endforeach;
        echo json_encode($data);
    }

    public function data_voter()
    {
        $query = "SELECT nim,nama,set_pw,status FROM pemilih ORDER BY nim ASC";
        $data = $this->db->query($query)->result();
        echo json_encode($data);
    }

    public function data_pw($id = null)
    {
        if ($id == 1) :
            $query = "SELECT COUNT(*) AS sudah FROM pemilih WHERE set_pw = $id";
        else :
            $query = "SELECT COUNT(*) AS belum FROM pemilih WHERE set_pw = $id";
        endif;
        $data = $this->db->query($query)->row_array();
        echo json_encode($data);
    }

    public function data_status($id = null)
    {
        if ($id == 1) :
            $query = "SELECT COUNT(*) AS sudah FROM pemilih WHERE status = $id";
        else :
            $query = "SELECT COUNT(*) AS belum FROM pemilih WHERE status = $id";
        endif;
        $data = $this->db->query($query)->row_array();
        echo json_encode($data);
    }

    public function index()
    {
        $data['control'] = $this->db->get_where('control', ['id' => 3])->row_array();
        $queryMasuk = "SELECT COUNT(*) AS masuk FROM pemilih WHERE status = 1";
        $data['suara'] = $this->db->query($queryMasuk)->row_array();


        $queryCalon = "SELECT c.id,c.nim_ketua, p.nama AS ketua, c.nim_wakil, o.nama as wakil, c.visi, c.misi FROM calon c, pengurus p, oprec o
                        WHERE  c.nim_ketua = p.nim
                        AND c.nim_wakil = o.nim ORDER BY c.id ASC";
        $data['calon'] = $this->db->query($queryCalon)->result_array();

        $queryC1 = "SELECT COUNT(*) as suara1 FROM pemilih p, calon c WHERE p.id_calon = c.id AND c.id = 1";
        $data['calon1'] = $this->db->query($queryC1)->row_array();

        $queryC2 = "SELECT COUNT(*) as suara2 FROM pemilih p, calon c WHERE p.id_calon = c.id AND c.id = 2";
        $data['calon2'] = $this->db->query($queryC2)->row_array();

        $this->load->view('pantau/index', $data);
    }
}
