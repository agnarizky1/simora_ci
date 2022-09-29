<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalan_desa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jalan_model');
    }
    public function index()
    {
        $data['title'] = 'Data Jalan Desa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->Jalan_model->getKecamatan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/jalan_desa', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Data Jalan Kecamatan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->db->get('desa')->result_array();

        $this->form_validation->set_rules('kecamatan_id', 'kecamatan_id', 'required');
        $this->form_validation->set_rules('desa', 'desa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/jalan_desa', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'kecamatan_id'   => $this->input->post('kecamatan_id'),
                'desa'   => $this->input->post('desa'),
            ];
            $this->db->insert('desa', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('jalan_desa');
        }
    }
    public function hapus($id)
    {
        $this->Jalan_model->hapusDataDesa($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('jalan_desa');
    }
    public function ubah($id)
    {
        $data['title'] = 'Edit Desa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->Jalan_model->getDesaById($id);

        $this->form_validation->set_rules('kecamatan_id', 'kecamatan_id', 'required');
        $this->form_validation->set_rules('desa', 'desa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/jalanDesa_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jalan_model->ubahDataDesa();
        }
    }
}
