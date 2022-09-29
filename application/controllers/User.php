<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }


    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!</div>');
            redirect('user');
        }
    }
    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules(
            'current_password',
            'Current Password',
            'required|trim'
        );
        $this->form_validation->set_rules(
            'new_password1',
            'New Password',
            'required|trim|min_length[5]|matches[new_password2]'
        );
        $this->form_validation->set_rules(
            'new_password2',
            'Confirm New Password Password',
            'required|trim|min_length[5]|matches[new_password1]'
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
    public function alluser()
    {
        $data['title'] = 'All User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //PAGINATION
        $this->load->library('pagination');

        //CONFIG
        $config['base_url'] = 'http://localhost/simora_ci/user/alluser';
        $config['total_rows'] = $this->User_model->countData();
        $config['per_page'] = 5;

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

        $this->load->model('User_model', 'user');
        $data['alluser'] = $this->user->getData($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/alluser', $data);
        $this->load->view('templates/footer');
    }
    public function allUserEdit($id)
    {
        $data['title'] = 'Edit All User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['alluser'] = $this->User_model->getAllUserById($id);
        $data['user_role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('role_id', 'role_id', 'required');
        $this->form_validation->set_rules('is_active', 'is_active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/alluser_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->ubahDataAllUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Mengedit data!</div>');
            redirect('user/alluser');
        }
    }
    public function allUserHapus($id)
    {
        $this->User_model->hapusDataUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data telah Dihapus!</div>');
        redirect('user/alluser');
    }
}
