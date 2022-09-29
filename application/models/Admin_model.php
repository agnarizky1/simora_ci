<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function total_user()
    {
        $query = "SELECT * FROM `user`";

        return $this->db->query($query)->num_rows();
    }
    public function total_provider()
    {
        $query = "SELECT * FROM `nama_perusahaan`";

        return $this->db->query($query)->num_rows();
    }
    public function total_cellplan()
    {
        $query = "SELECT * FROM `cellplan`";

        return $this->db->query($query)->num_rows();
    }
    public function getNamaPerusahaan()
    {
        $query = "SELECT `provider`.*, `nama_perusahaan`.`nama_perusahaan`
                        FROM `provider` JOIN `nama_perusahaan` 
                        ON `provider`.`id_perusahaan` = `nama_perusahaan`.`id`  
                    ";

        return $this->db->query($query)->result_array();
    }
    public function ubahDataRole()
    {
        $id = $this->input->post('id');

        $data = [
            'role'   => $this->input->post('role')
        ];

        $this->db->where('id', $id);
        $this->db->update('user_role', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('admin/role');
    }
    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }
    public function hapusDataRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }
}
