<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cellplan2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cellplan2_model');
    }
    public function index()
    {
        $data['title'] = 'Input Cell Plan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getProvider();
        $data['marker_color'] = $this->cellplan2->getMarkerColor();

        $data['provider'] = $this->db->get('provider')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cellplan2', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Cell Plan 2';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['marker_color'] = $this->cellplan2->getMarkerColor();

        $data['provider'] = $this->db->get('provider')->result_array();

        $this->form_validation->set_rules('id_site', 'id_site', 'required');
        $this->form_validation->set_rules('provider_id', 'provider_id', 'required');
        $this->form_validation->set_rules('detail_pemilik', 'detail_pemilik', 'required');
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
            $this->load->view('data/cellplan2', $data);
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
                'detail_pemilik'        => $this->input->post('detail_pemilik'),
                'latitude'      => $this->input->post('latitude'),
                'longitude'     => $this->input->post('longitude'),
                'radius'        => $this->input->post('radius'),
                'warna'        => $this->input->post('warna'),
                'gambar'        => $gambar
            ];
            $this->db->insert('cellplan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('cellplan2');
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
