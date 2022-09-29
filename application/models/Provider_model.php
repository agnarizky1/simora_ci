<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provider_model extends CI_Model
{
    public function hapusDataProvider($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('provider');
    }
    public function getProviderById($id)
    {
        return $this->db->get_where('provider', ['id' => $id])->row_array();
    }
    public function ubahDataProvider()
    {
        $id = $this->input->post('id');

        $data = [
            'id_perusahaan'   => $this->input->post('id_perusahaan'),
            'alamat'            => $this->input->post('alamat'),
            'marker_color'      => $this->input->post('marker_color')
        ];

        $this->db->where('id', $id);
        $this->db->update('provider', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('provider');
    }
    public function getNamaPerusahaan()
    {
        $query = "SELECT `provider`.*, `nama_perusahaan`.`nama_perusahaan`
                        FROM `provider` JOIN `nama_perusahaan` 
                        ON `provider`.`id_perusahaan` = `nama_perusahaan`.`id`  
                    ";

        return $this->db->query($query)->result_array();
    }
}
