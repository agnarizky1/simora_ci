<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalan_kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jalan_model');
    }
    public function index()
    {
        $data['title'] = 'Data Jalan Kecamatan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/jalan_kecamatan', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Data Jalan Kecamatan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();

        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/jalan_kecamatan', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'kecamatan'   => $this->input->post('kecamatan'),
            ];
            $this->db->insert('kecamatan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('jalan_kecamatan');
        }
    }
    public function hapus($id)
    {
        $this->Jalan_model->hapusDataKecamatan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('jalan_kecamatan');
    }
    public function ubah($id)
    {
        $data['title'] = 'Edit Kecamatan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kecamatan'] = $this->Jalan_model->getKecamatanById($id);

        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/jalanKecamatan_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jalan_model->ubahDataKecamatan();
        }
    }
}
