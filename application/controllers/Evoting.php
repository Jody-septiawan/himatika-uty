<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Evoting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Voting_model');
    }

    public function login()
    {
        if ($this->session->userdata('id')) {
            redirect('evoting/index');
        }
        $this->form_validation->set_rules('nim', 'nim', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('evoting/header');
            $this->load->view('evoting/login');
            $this->load->view('evoting/footer');
        } else {
            $this->login_proses();
        }
    }

    public function login_proses()
    {
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');
        $pemilih = $this->db->get_where('pemilih', ['nim' => $nim])->row_array();

        if ($pemilih) {
            if (password_verify($password, $pemilih['password'])) {
                $data = [
                    'id_pemilih' => $pemilih['id']
                ];
                $this->session->set_userdata($data);

                // HISTORY LOGIN USER
                date_default_timezone_set('Asia/Jakarta');
                $waktu = time();

                if ($this->agent->is_browser()) {
                    $agent = $this->agent->browser() . ' ' . $this->agent->version();
                } elseif ($this->agent->is_mobile()) {
                    $agent = $this->agent->mobile();
                } else {
                    $agent = 'Data user gagal di dapatkan';
                }

                $ip = $this->input->ip_address();
                $sistem_operasi = $this->agent->platform();

                $dataHistory =
                    [
                        'id_pemilih' => $this->session->userdata('id_pemilih'),
                        'ip_address' => $ip,
                        'browser' => $agent,
                        'sistem_operasi' => $sistem_operasi,
                        'status' => 'login',
                        'time' => $waktu
                    ];
                $this->db->insert('log_voting', $dataHistory);

                redirect('evoting');
            } else {
                $this->session->set_flashdata('message', 'Paswword Salah!');
                redirect('evoting/login');
            }
        } else {
            $this->session->set_flashdata('message2', 'NIM tidak terdaftar');
            redirect('evoting/login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id_pemilih');
        $data['id_pemilih'] = $id;
        $this->Voting_model->CekSession($id);

        $queryCalon = "SELECT c.id,c.nim_ketua, p.nama AS ketua, c.nim_wakil, o.nama as wakil, c.visi, c.misi FROM calon c, pengurus p, oprec o
                        WHERE  c.nim_ketua = p.nim
                        AND c.nim_wakil = o.nim ORDER BY c.id ASC";
        $data['calon'] = $this->db->query($queryCalon)->result_array();

        // $data['calonexam'] = $this->db->get('calon')->result_array();
        $data['calonexam'] = false;

        $user = $this->db->get_where('pemilih', ['id' => $id])->row_array();
        $data['user'] = $user;
        $data['control'] = $this->db->get_where('control', ['id' => 2])->row_array();

        $this->form_validation->set_rules('pw1', '<span class="text-danger">New Password</span>', 'required|trim|min_length[3]|matches[pw2]');
        $this->form_validation->set_rules('pw2', '<span class="text-danger">Repeat Password</span>', 'required|trim|min_length[3]|matches[pw1]');


        if ($this->form_validation->run() == false) :
            $this->load->view('evoting/header');
            $this->load->view('evoting/index', $data);
            $this->load->view('evoting/footer');
        else :
            $this->setpw();
        endif;
    }

    public function setpw()
    {
        $pw1 = $this->input->post('pw1');
        $pw_hash = password_hash($pw1, PASSWORD_DEFAULT);

        $this->db->set('password', $pw_hash);
        $this->db->set('set_pw', 1);
        $this->db->where('id', $this->session->userdata('id_pemilih'));
        $update = $this->db->update('pemilih');

        if ($update) :
            // HISTORY LOGIN USER
            date_default_timezone_set('Asia/Jakarta');
            $waktu = time();

            if ($this->agent->is_browser()) {
                $agent = $this->agent->browser() . ' ' . $this->agent->version();
            } elseif ($this->agent->is_mobile()) {
                $agent = $this->agent->mobile();
            } else {
                $agent = 'Data user gagal di dapatkan';
            }

            $ip = $this->input->ip_address();
            $sistem_operasi = $this->agent->platform();

            $dataHistory =
                [
                    'id_pemilih' => $this->session->userdata('id_pemilih'),
                    'ip_address' => $ip,
                    'browser' => $agent,
                    'sistem_operasi' => $sistem_operasi,
                    'status' => 'setpw',
                    'time' => $waktu
                ];
            $this->db->insert('log_voting', $dataHistory);

            $this->session->set_flashdata('message3', 'Password berhasil diperbaharui');
            redirect('evoting/index');
        else :
            redirect('evoting/index');
        endif;
    }

    public function pilihan($hash1 = null, $id_pemilih = null, $hash2 = null, $id_calon = null, $hash3 = null)
    {
        $data = [
            'id_calon' => $id_calon,
            'status' => 1
        ];
        $this->db->where('id', $id_pemilih);
        $vote = $this->db->update('pemilih', $data);

        if ($vote) :
            // HISTORY LOGIN USER
            date_default_timezone_set('Asia/Jakarta');
            $waktu = time();

            if ($this->agent->is_browser()) {
                $agent = $this->agent->browser() . ' ' . $this->agent->version();
            } elseif ($this->agent->is_mobile()) {
                $agent = $this->agent->mobile();
            } else {
                $agent = 'Data user gagal di dapatkan';
            }

            $ip = $this->input->ip_address();
            $sistem_operasi = $this->agent->platform();

            $dataHistory =
                [
                    'id_pemilih' => $this->session->userdata('id_pemilih'),
                    'ip_address' => $ip,
                    'browser' => $agent,
                    'sistem_operasi' => $sistem_operasi,
                    'status' => 'voting',
                    'time' => $waktu
                ];
            $this->db->insert('log_voting', $dataHistory);

            $this->session->set_flashdata('message3', 'Terima kasih telah melakukan Voting');
            redirect('evoting/index');
        else :
            redirect('evoting/index');
        endif;
    }

    public function logout()
    {
        // HISTORY LOGIN USER
        date_default_timezone_set('Asia/Jakarta');
        $waktu = time();

        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Data user gagal di dapatkan';
        }

        $ip = $this->input->ip_address();
        $sistem_operasi = $this->agent->platform();

        $dataHistory =
            [
                'id_pemilih' => $this->session->userdata('id_pemilih'),
                'ip_address' => $ip,
                'browser' => $agent,
                'sistem_operasi' => $sistem_operasi,
                'status' => 'logout',
                'time' => $waktu
            ];
        $this->db->insert('log_voting', $dataHistory);

        $this->session->unset_userdata('id_pemilih');

        redirect('evoting/login');
    }
}
