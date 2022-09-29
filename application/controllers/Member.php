<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Cellplan2_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard Member';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['totaluser'] = $this->Admin_model->total_user();
        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $data['provider'] = $this->db->get('provider')->result_array();

        // $this->load->model('Provider_model', 'provider');
        // $data['provider'] = $this->provider->getProviderById();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }
    public function perusahaanTambah()
    {
        $data['title'] = 'Nama perusahaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('daftar/daftarnama', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nama_perusahaan'   => $this->input->post('nama_perusahaan'),
            ];
            $this->db->insert('nama_perusahaan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');

            $this->load->view('member/print_output_perusahaan', $data);
        }
    }
    public function providerTambah()
    {
        $data['title'] = 'Provider';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['provider'] = $this->db->get('provider')->result_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $this->form_validation->set_rules('id_perusahaan', 'id_perusahaan', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('marker_color', 'marker_color', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('daftar/daftarnama', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'id_perusahaan'   => $this->input->post('id_perusahaan'),
                'alamat'            => $this->input->post('alamat'),
                'marker_color'      => $this->input->post('marker_color')
            ];
            $this->db->insert('provider', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');

            $this->load->view('member/print_output_provider', $data);
        }
    }
    public function input_tower()
    {
        $data['title'] = 'Input Data Cellplan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->form_validation->set_rules('id_site', 'id_site', 'required');
        $this->form_validation->set_rules('provider_id', 'provider_id', 'required');
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
        $this->form_validation->set_rules('latitude', 'latitude', 'required');
        $this->form_validation->set_rules('longitude', 'longitude', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getProvider();
        $data['marker_color'] = $this->cellplan2->getMarkerColor();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();
        $data['provider'] = $this->db->get('provider')->result_array();
        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/input_tower', $data);
        $this->load->view('templates/footer');
    }
    public function inputTowerTambah()
    {
        $data['title'] = 'Input Tower';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['marker_color'] = $this->cellplan2->getMarkerColor();

        $data['provider'] = $this->db->get('provider')->result_array();

        $this->form_validation->set_rules('id_site', 'id_site', 'required');
        $this->form_validation->set_rules('provider_id', 'provider_id', 'required');
        $this->form_validation->set_rules('kecamatan_id', 'kecamatan_id', 'required');
        $this->form_validation->set_rules('desa_id', 'desa_id', 'required');
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
        $this->form_validation->set_rules('latitude', 'latitude', 'required');
        $this->form_validation->set_rules('longitude', 'longitude', 'required');
        $this->form_validation->set_rules('radius', 'radius', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('member/input_tower', $data);
            $this->load->view('templates/footer');
        } else {
            $gambar = $_FILES['gambar'];

            if ($gambar = '') {
            } else {
                $config['upload_path']      = './assets/img/idsite';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = [
                'id_site'       => $this->input->post('id_site'),
                'provider_id'   => $this->input->post('provider_id'),
                'kecamatan_id'   => $this->input->post('kecamatan_id'),
                'desa_id'   => $this->input->post('desa_id'),
                'lokasi'        => $this->input->post('lokasi'),
                'latitude'      => $this->input->post('latitude'),
                'longitude'     => $this->input->post('longitude'),
                'radius'        => $this->input->post('radius'),
                'warna'        => $this->input->post('warna'),
                'gambar'        => $gambar
            ];
            $this->db->insert('cellplan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('member/input_tower');
        }
    }
    public function getDesa()
    {
        $idkecamatan = $this->input->post('id');
        $data = $this->Cellplan2_model->getDataDesa($idkecamatan);
        $output = '<option value">Pilih Desa</ouput>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->desa . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function getMarkerColor()
    {
        $marker_color = $this->input->post('id');
        $data = $this->Cellplan2_model->getWarna($marker_color);
        $output = '<option value">Marker Color</ouput>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->marker_color . '">' . $row->marker_color . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
