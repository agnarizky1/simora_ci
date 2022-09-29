<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Idsite extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Idsite_model');
    }
    public function index()
    {
        $data['title'] = 'Id Site';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getProvider();

        //PAGINATION
        $this->load->library('pagination');

        //CONFIG
        $config['base_url'] = 'http://localhost/simora_ci/idsite/index';
        $config['total_rows'] = $this->Idsite_model->countData();
        $config['per_page'] = 12;

        //STYLING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //INISIALISASI
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['idsite'] = $this->Idsite_model->getData($config['per_page'], $data['start']);

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/idsite', $data);
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
        $this->load->view('data/idsite_filter', $data);
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
        $this->load->view('data/idsite_filter', $data);
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
        $this->load->view('data/idsite_filter', $data);
        $this->load->view('templates/footer');
    }
    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $this->load->model('Cellplan2_model', 'cellplan2');
        $data['cellplan'] = $this->cellplan2->getProvider();

        $this->load->view('data/laporan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_idsite.pdf", array('Attachment' => 0));
    }
    public function print_idsite()
    {
        $data['hasil'] = $this->Idsite_model->join3table();

        $this->load->view('data/print_idsite', $data);
    }
    public function print_filterPerusahaan()
    {
        $provider_id = $this->input->get('provider_id');
        // $warna = $this->input->get('warna');
        $data['hasil'] = $this->Idsite_model->filter_perusahaan($provider_id);

        $this->load->view('data/print_idsite', $data);
    }
    public function print_filterKecamatan()
    {
        $kecamatan = $this->input->get('kecamatan_id');
        // $warna = $this->input->get('warna');
        $data['hasil'] = $this->Idsite_model->filter_kecamatan($kecamatan);

        $this->load->view('data/print_idsite', $data);
    }
    public function print_filterDesa()
    {
        $desa = $this->input->get('desa_id');
        // $warna = $this->input->get('warna');
        $data['hasil'] = $this->Idsite_model->filter_desa($desa);

        $this->load->view('data/print_idsite', $data);
    }
    public function ubah($id)
    {
        $data['title'] = 'Edit Idsite';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['idsite'] = $this->Idsite_model->getIdsiteById($id);

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->form_validation->set_rules('id_site', 'id_site', 'required');
        $this->form_validation->set_rules('provider_id', 'provider_id', 'required');
        $this->form_validation->set_rules('kecamatan_id', 'kecamatan_id', 'required');
        $this->form_validation->set_rules('desa_id', 'desa_id', 'required');
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
        $this->form_validation->set_rules('latitude', 'latitude', 'required');
        $this->form_validation->set_rules('longitude', 'longitude', 'required');
        $this->form_validation->set_rules('radius', 'radius', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/idsite_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Idsite_model->ubahDataIdsite();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
            redirect('idsite');
        }
    }
    public function hapus($id)
    {
        $this->Idsite_model->hapusDataIdsite($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('idsite');
    }
    public function details($id)
    {
        $data['title'] = 'Details Id Site';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        $data['idsite'] = $this->Idsite_model->getIdsiteById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/idsite_details', $data);
        $this->load->view('templates/footer');
    }
    public function barcode($id)
    {
        $data['title'] = 'Generate Barcode';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['cellplan'] = $this->Idsite_model->getIdsiteById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/barcode', $data);
        $this->load->view('templates/footer');
    }
    public function getDesa()
    {
        $idkecamatan = $this->input->post('id');
        $data = $this->Idsite_model->getDataDesa($idkecamatan);
        $output = '<option value">Pilih Desa</ouput>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->desa . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function getMarkerColor()
    {
        $marker_color = $this->input->post('id');
        $data = $this->Idsite_model->getWarna($marker_color);
        $output = '<option value">Marker Color</ouput>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->marker_color . '">' . $row->marker_color . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function print_barcode($id)
    {

        // $warna = $this->input->get('warna');
        $data['cellplan'] = $this->Idsite_model->getIdsiteById($id);

        $this->load->view('data/print_barcode', $data);
    }
}
