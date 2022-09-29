<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT  `user_sub_menu`.*, `user_menu`.`menu`
                        FROM `user_sub_menu` JOIN `user_menu` 
                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`  
                    ";

        return $this->db->query($query)->result_array();
    }
    public function hapusDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }
    public function ubahDataMenu()
    {
        $id = $this->input->post('id');

        $data = [
            'menu'   => $this->input->post('menu')
        ];

        $this->db->where('id', $id);
        $this->db->update('user_menu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('menu');
    }
    public function hapusDataSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }
    public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
    public function ubahDataSubMenu()
    {
        $id = $this->input->post('id');

        $data = [
            'menu_id'   => $this->input->post('menu_id'),
            'title'   => $this->input->post('title'),
            'url'   => $this->input->post('url'),
            'icon'   => $this->input->post('icon'),
            'is_active'   => $this->input->post('is_active')
        ];

        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('menu/submenu');
    }
}
