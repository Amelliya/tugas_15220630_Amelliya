<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman About";
        $data['nama_depan'] = "Amelliya";
        $data['nama_belakang'] = "-";
        $data['alamat'] = "Jakarta";
        $data['tempat_lahir'] = "Lebak";
        $data['olahraga_favorit'] = array("Basket","Volly");

        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}
