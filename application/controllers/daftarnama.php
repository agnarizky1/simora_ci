<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftarnama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perusahaan_model');
    }
    public function index()
    {
        $data['title'] = 'Nama perusahaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //PAGINATION
        $this->load->library('pagination');

        //CONFIG
        $config['base_url'] = 'http://localhost/simora_ci/daftarnama/index';
        $config['total_rows'] = $this->Perusahaan_model->countData();
        $config['per_page'] = 7;

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
        $data['nama_perusahaan'] = $this->Perusahaan_model->getData($config['per_page'], $data['start']);

        // $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();
        // $data['provider'] = $this->db->get('provider')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('daftar/daftarnama', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
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
                'alamat'   => $this->input->post('alamat'),
                'marker_color'   => $this->input->post('marker_color')
            ];
            $this->db->insert('nama_perusahaan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('daftarnama');
        }
    }
    public function hapus($id)
    {
        $this->Perusahaan_model->hapusDataPerusahaan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('daftarnama');
    }
    public function ubah($id)
    {
        $data['title'] = 'Edit Perusahaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->Perusahaan_model->getPerusahaanById($id);

        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('daftar/daftar_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Perusahaan_model->ubahDataPerusahaan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Mengedit data!</div>');
            redirect('daftarnama');
        }
    }
    public function print_daftar()
    {
        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $this->load->view('daftar/print_daftar', $data);
    }
}
