<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $query = "SELECT p.id as id_pengurus, nim,nama,divisi, jabatan 
                    FROM pengurus p, jabatan j, divisi d
                    WHERE p.id_jabatan = j.id
                    AND p.id_divisi = d.id_divisi
                    AND p.id_divisi = 1";
        $data['bph'] = $this->db->query($query)->result_array();

        $query = "SELECT p.id as id_pengurus, nim,nama,divisi, jabatan 
                    FROM pengurus p, jabatan j, divisi d
                    WHERE p.id_jabatan = j.id
                    AND p.id_divisi = d.id_divisi
                    AND p.id_divisi = 3";
        $data['sdm'] = $this->db->query($query)->result_array();

        $query = "SELECT p.id as id_pengurus, nim,nama,divisi, jabatan 
                    FROM pengurus p, jabatan j, divisi d
                    WHERE p.id_jabatan = j.id
                    AND p.id_divisi = d.id_divisi
                    AND p.id_divisi = 4";
        $data['keilmuan'] = $this->db->query($query)->result_array();

        $query = "SELECT p.id as id_pengurus, nim,nama,divisi, jabatan 
                    FROM pengurus p, jabatan j, divisi d
                    WHERE p.id_jabatan = j.id
                    AND p.id_divisi = d.id_divisi
                    AND p.id_divisi = 2";
        $data['humas'] = $this->db->query($query)->result_array();

        $query = "SELECT p.id as id_pengurus, nim,nama,divisi, jabatan 
                    FROM pengurus p, jabatan j, divisi d
                    WHERE p.id_jabatan = j.id
                    AND p.id_divisi = d.id_divisi
                    AND p.id_divisi = 5";
        $data['media'] = $this->db->query($query)->result_array();

        $data['title'] = "Pengurus 2019/2020";
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $this->load->view('home/pengurus', $data);
        $this->load->view('home/footer');
    }
}
