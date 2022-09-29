<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['totaluser'] = $this->Admin_model->total_user();
        $data['totalprovider'] = $this->Admin_model->total_provider();
        $data['totalcellplan'] = $this->Admin_model->total_cellplan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'role'   => $this->input->post('role')
            ];
            $this->db->insert('user_role', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil menambahkan data!</div>');
            redirect('admin/role');
        }
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed</div>');
    }
    public function edit_role($id)
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->Admin_model->getRoleById($id);

        $this->form_validation->set_rules('role', 'role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->ubahDataRole();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Mengedit data!</div>');
            redirect('admin/role');
        }
    }
    public function hapusRole($id)
    {
        $this->Admin_model->hapusDataRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('admin/role');
    }
}
