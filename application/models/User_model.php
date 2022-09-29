<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getRole($limit, $start)
    {
        $query = "SELECT  `user`.*, `user_role`.`role`
                        FROM `user` JOIN `user_role` 
                        ON `user`.`role_id` = `user_role`.`id`  
                    ";

        return $this->db->query($query, $limit, $start)->result_array();
    }
    public function getAllUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function ubahDataAllUser()
    {
        $id = $this->input->post('id');

        $data = [
            'name'      => $this->input->post('name'),
            'role_id'   => $this->input->post('role_id'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('user/alluser');
    }
    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function getData($limit, $start)
    {
        return $this->db->get('user', $limit, $start)->result_array();
    }
    public function countData()
    {
        return $this->db->get('user')->num_rows();
    }
}
