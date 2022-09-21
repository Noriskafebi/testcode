<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['tittle'] = 'testcode';

        $data['barang'] = $this->m_barang->tampil_data()->result();

        $this->load->view('admin/barang', $data);
    }
}
