<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Provider_model');
    }
    public function index()
    {
        $data['title'] = 'Provider';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama_perusahaan'] = $this->db->get('nama_perusahaan')->result_array();

        $data['provider'] = $this->Provider_model->getNamaPerusahaan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/provider', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
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
            $this->load->view('data/provider', $data);
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
            redirect('provider');
        }
    }
    public function hapus($id)
    {
        $this->Provider_model->hapusDataProvider($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('provider');
    }
    public function ubah($id)
    {
        $data['title'] = 'Provider';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['provider'] = $this->Provider_model->getProviderById($id);

        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('marker_color', 'marker_color', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/provider_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Provider_model->ubahDataProvider();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Mengedit data!</div>');
            redirect('provider');
        }
    }
    public function filter($id)
    {
        $data['title'] = 'Provider Filter';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        if ($id == 0) {
            $data = $this->db->get('provider')->result_array();
        } else {
            $data = $this->db->get('provider', ['id_perusahaan' => $id])->result_array();
        }
        $data['filter'] = $data;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/result', $data);
        $this->load->view('templates/footer');
    }
    public function print_provider()
    {
        $data['provider'] = $this->Provider_model->getNamaPerusahaan();

        $this->load->view('data/print_provider', $data);
    }
}
