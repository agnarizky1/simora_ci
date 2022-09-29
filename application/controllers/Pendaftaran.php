<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/pendaftaran', $data);
        $this->load->view('templates/footer');
    }
    public function daftar()
    {
        $data['title'] = 'Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_pendaftaran', 'id_pendaftaran', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('berat_badan', 'berat_badan', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nama_wali', 'nama_wali', 'required');
        $this->form_validation->set_rules('no_telepon', 'no_telepon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/pendaftaran', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'id_pendaftaran'   => $this->input->post('id_pendaftaran'),
                'email'   => $this->input->post('email'),
                'nama_lengkap'   => $this->input->post('nama_lengkap'),
                'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                'berat_badan'   => $this->input->post('berat_badan'),
                'tinggi_badan'   => $this->input->post('tinggi_badan'),
                'alamat'   => $this->input->post('alamat'),
                'nama_wali'   => $this->input->post('nama_wali'),
                'no_telepon'   => $this->input->post('no_telepon')
            ];
            $this->db->insert('pendaftaran', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('pendaftaran');
        }
    }
    public function list_daftar()
    {
        $data['title'] = 'Pendaftar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pendaftaran'] = $this->db->get('pendaftaran')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/list_pendaftar', $data);
        $this->load->view('templates/footer');
    }
}
