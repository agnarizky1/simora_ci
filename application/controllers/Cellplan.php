<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cellplan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cellplan2_model');
        $this->load->model('Idsite_model');
    }
    public function index()
    {
        $data['title'] = 'Cell Plan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getProvider();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cellplan', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        $this->Idsite_model->hapusDataIdsite($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('idsite');
    }
    public function barcode($id)
    {
        $data['title'] = 'Generate Barcode';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getIdsiteById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/barcode', $data);
        $this->load->view('templates/footer');
    }
    public function details($id)
    {
        $data['title'] = 'Details Id Site';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['idsite'] = $this->Cellplan2_model->getIdsiteById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/idsite_details', $data);
        $this->load->view('templates/footer');
    }
    public function filter_perusahaan()
    {
        $data['title'] = 'Id Site';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $nama_perusahaan_id = $this->input->get('provider_id');
        // $warna = $this->input->get('warna');
        $data['hasil'] = $this->Idsite_model->filter_perusahaan($nama_perusahaan_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cellplan_filter', $data);
        $this->load->view('templates/footer');
    }
    public function filter_kecamatan()
    {
        $data['title'] = 'Id Site';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        $kecamatan = $this->input->get('kecamatan_id');
        // $warna = $this->input->get('warna');
        $data['hasil'] = $this->Idsite_model->filter_kecamatan($kecamatan);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cellplan_filter', $data);
        $this->load->view('templates/footer');
    }
    public function filter_desa()
    {
        $data['title'] = 'Id Site';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['desa'] = $this->db->get('desa')->result_array();

        $desa = $this->input->get('desa_id');
        // $warna = $this->input->get('warna');
        $data['hasil'] = $this->Idsite_model->filter_desa($desa);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cellplan_filter', $data);
        $this->load->view('templates/footer');
    }
    public function cluster()
    {
        $data['title'] = 'Cluster Marker';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getProvider();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cluster', $data);
        $this->load->view('templates/footer');
    }
}
