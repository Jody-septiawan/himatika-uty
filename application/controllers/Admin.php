<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $id = $this->session->userdata('id_admin');
        $this->Admin_model->CekSession($id);
        $data['title'] = "Welcome";
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function agenda()
    {
        $id = $this->session->userdata('id_admin');
        $this->Admin_model->CekSession($id);
        $data['agenda'] = $this->db->get('agenda')->result_array();

        $data['title'] = "Agenda";
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/agenda', $data);
        $this->load->view('admin/footer');
    }

    public function tambahagenda()
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['agenda'] = $this->db->get('agenda')->result_array();

            $data['title'] = "Agenda";
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/agenda', $data);
            $this->load->view('admin/footer');
        } else {
            $tgl = $this->input->post('tanggal');
            $judul = $this->input->post('judul');
            $desk = $this->input->post('deskripsi');
            $link = $this->input->post('link');

            $data = [
                'tanggal' => $tgl,
                'judul' => $judul,
                'deskripsi' => $desk,
                'link' => $link
            ];

            $this->db->insert('agenda', $data);
            $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">
            Tambah user berhasil  </div>');
            redirect('admin/agenda');
        }
    }

    public function pengurus()
    {
        $query = "SELECT p.id as id_pengurus, nim,nama,divisi, jabatan 
                    FROM pengurus p, jabatan j, divisi d
                    WHERE p.id_jabatan = j.id
                    AND p.id_divisi = d.id_divisi";
        $data['pengurus'] = $this->db->query($query)->result_array();


        $data['title'] = "Pengurus";
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/pengurus', $data);
        $this->load->view('admin/footer');
    }

    public function login()
    {
        if ($this->session->userdata('id_admin')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $this->login_proses();
        }
    }

    public function login_proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $this->session->set_userdata(['id_admin' => $admin['id']]);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', 'Wrong password!');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('message', 'Username not registered!');
            redirect('admin/login');
        }
    }

    public function logout()
    {
        // date_default_timezone_set('Asia/Jakarta');
        // $time = time();

        $this->session->unset_userdata('id_admin');

        $this->session->set_flashdata('logout_message', '<div class="alert alert-success mx-5" role="alert">
            You success has been logout  </div>');
        redirect('admin/login');
    }

    public function evoting($id_menu_param = null)
    {
        if (!$id_menu_param) :
            redirect('admin');
        endif;

        $data['id_menu'] = $id_menu_param;

        $id = $this->session->userdata('id_admin');
        $this->Admin_model->CekSession($id);
        $data['title'] = "e-Voting";

        $data['menu'] = [
            [
                'id' => "1",
                'nama' => 'Dashboard'
            ],
            [
                'id' => "2",
                'nama' => 'Calon Ketua'
            ],
            [
                'id' => "3",
                'nama' => 'Data Pemilih'
            ]
        ];

        $data['pengurus'] = $this->db->get('pengurus')->result_array();
        $data['calon'] = $this->db->get('calon')->result_array();
        $data['pemilih'] = $this->db->get('pemilih')->result_array();
        $data['control_voting'] = $this->db->get_where('control', ['id' => 2])->row_array();
        $data['control_hitung'] = $this->db->get_where('control', ['id' => 3])->row_array();

        $queryjmlcalon = "SELECT COUNT(*) AS jml_calon FROM calon";
        $data['jml_calon'] = $this->db->query($queryjmlcalon)->row_array();

        $queryCalon = "SELECT c.id,c.nim_ketua, p.nama AS ketua, c.nim_wakil, o.nama as wakil, c.visi, c.misi FROM calon c, pengurus p, oprec o
                        WHERE  c.nim_ketua = p.nim
                        AND c.nim_wakil = o.nim ORDER BY c.id ASC";
        $data['calonketua'] = $this->db->query($queryCalon)->result_array();

        $queryVote = "SELECT COUNT(status) as status FROM pemilih WHERE status = 1";
        $data['vote'] = $this->db->query($queryVote)->row_array();
        $queryVote = "SELECT COUNT(*) as status FROM pemilih";
        $data['voteallin'] = $this->db->query($queryVote)->row_array();

        $belum_vot = 0;
        $sudah_vot = 0;
        $set_pw = 0;

        foreach ($data['pemilih'] as $p) :
            if ($p['status'] == 0) :
                $belum_vot += 1;
            else :
                $sudah_vot += 1;
            endif;
            if ($p['set_pw'] == 0) :
                $set_pw += 1;
            endif;
        endforeach;

        $data['belum_vot'] = $belum_vot;
        $data['sudah_vot'] = $sudah_vot;
        $data['set_pw'] = $set_pw;

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/evoting', $data);
        $this->load->view('admin/footer');
    }

    public function tambahcalon()
    {
        $nim_ketua = $this->input->post('nim_ketua');
        $nim_wakil = $this->input->post('nim_wakil');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');

        $data = [
            'nim_ketua' => $nim_ketua,
            'nim_wakil' => $nim_wakil,
            'visi' => $visi,
            'misi' => $misi,
        ];

        $add = $this->db->insert('calon', $data);

        if ($add) :
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Tambah calon berhasil  </div>');
            redirect('admin/evoting/2');
        endif;
    }

    public function hapuscalon($id = null)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('calon');
        if ($delete) :
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Hapus calon berhasil  </div>');
            redirect('admin/evoting/2');
        endif;
    }

    public function ubahcalon($id_calon = null)
    {
        $id = $this->session->userdata('id_admin');
        $this->Admin_model->CekSession($id);
        $data['title'] = "e-Voting";

        $data['pengurus'] = $this->db->get('pengurus')->result_array();
        $data['pemilih'] = $this->db->get('pemilih')->result_array();

        $queryCalon = "SELECT c.id,c.nim_ketua, p.nama AS ketua, c.nim_wakil, o.nama as wakil, c.visi, c.misi FROM calon c, pengurus p, oprec o
                        WHERE  c.nim_ketua = p.nim
                        AND c.nim_wakil = o.nim 
                        AND c.id = $id_calon";
        $data['calonketua'] = $this->db->query($queryCalon)->row_array();

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/ubahcalon', $data);
        $this->load->view('admin/footer');
    }

    public function prosesubahcalon()
    {
        $id = $this->input->post('id');
        $nim_ketua = $this->input->post('nim_ketua');
        $nim_wakil = $this->input->post('nim_wakil');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');

        $data = [
            'nim_ketua' => $nim_ketua,
            'nim_wakil' => $nim_wakil,
            'visi' => $visi,
            'misi' => $misi,
        ];

        $this->db->where('id', $id);
        $add = $this->db->update('calon', $data);

        if ($add) :
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Edit calon berhasil  </div>');
            redirect('admin/evoting/2');
        endif;
    }

    public function resetpw($id = null)
    {
        $pw = password_hash("1234", PASSWORD_DEFAULT);

        $data = [
            'password' => $pw,
            'set_pw' => 0
        ];

        $this->db->where('id', $id);
        $reset = $this->db->update('pemilih', $data);
        if ($reset) :
            $this->session->set_flashdata('message3', 'Reset Password berhasil');
            redirect('admin/evoting/3');
        endif;
    }

    public function controlevoting()
    {
        $status = $this->input->post('status');
        $this->db->where('id', 2);
        $ubah = $this->db->update('control', ['status' => $status]);
        $data = $this->db->get_where('control', ['id' => 2])->row_array();
        if ($ubah) :
            if ($data['status'] == 1) :
                $this->session->set_flashdata('message3', 'Membuka e-Voting');
            else :
                $this->session->set_flashdata('message3', 'Menutup e-Voting');
            endif;
            redirect('admin/evoting/1');
        endif;
    }

    public function controlhitung()
    {
        $status = $this->input->post('status');
        $this->db->where('id', 3);
        $ubah = $this->db->update('control', ['status' => $status]);
        $data = $this->db->get_where('control', ['id' => 3])->row_array();
        if ($ubah) :
            if ($data['status'] == 1) :
                $this->session->set_flashdata('message3', 'Membuka e-Voting');
            else :
                $this->session->set_flashdata('message3', 'Menutup e-Voting');
            endif;
            redirect('admin/evoting/1');
        endif;
    }

    public function resetvoting()
    {
        $voter = $this->db->get('pemilih')->result_array();
        foreach ($voter as $v) :
            $id = $v['id'];
            $data = [
                'id_calon' => 0,
                'status' => 0
            ];
            $this->db->where('id', $id);
            $this->db->update('pemilih', $data);
        endforeach;
        redirect('admin/evoting/3');
    }

    public function resetpassword()
    {
        $voter = $this->db->get('pemilih')->result_array();

        $pw = password_hash("1234", PASSWORD_DEFAULT);
        foreach ($voter as $v) :
            $id = $v['id'];
            $data = [
                'password' => $pw,
                'set_pw' => 0
            ];
            $this->db->where('id', $id);
            $this->db->update('pemilih', $data);
        endforeach;

        redirect('admin/evoting/3');
    }

    public function resetall()
    {
        $voter = $this->db->get('pemilih')->result_array();

        //reset voting
        foreach ($voter as $v) :
            $id = $v['id'];
            $data = [
                'id_calon' => 0,
                'status' => 0
            ];
            $this->db->where('id', $id);
            $this->db->update('pemilih', $data);
        endforeach;

        //reset password
        $pw = password_hash("1234", PASSWORD_DEFAULT);
        foreach ($voter as $v) :
            $id = $v['id'];
            $data = [
                'password' => $pw,
                'set_pw' => 0
            ];
            $this->db->where('id', $id);
            $this->db->update('pemilih', $data);
        endforeach;

        redirect('admin/evoting/3');
    }

    public function hapusallcalon()
    {
        $query = "DELETE FROM calon";
        $delete = $this->db->query($query);
        if ($delete) :
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Hapus semua calon berhasil  </div>');
            redirect('admin/evoting/2');
        endif;
    }
}
