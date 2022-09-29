<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalan_model extends CI_Model
{
    public function getKecamatan()
    {
        $query = "SELECT `desa`.*, `kecamatan`.`kecamatan`
                        FROM `desa` JOIN `kecamatan` 
                        ON `desa`.`kecamatan_id` = `kecamatan`.`id`  
                    ";

        return $this->db->query($query)->result_array();
    }
    public function hapusDataDesa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('desa');
    }
    public function getDesaById($id)
    {
        return $this->db->get_where('desa', ['id' => $id])->row_array();
    }
    public function ubahDataDesa()
    {
        $id = $this->input->post('id');

        $data = [
            'kecamatan_id'   => $this->input->post('kecamatan_id'),
            'desa'            => $this->input->post('desa')
        ];

        $this->db->where('id', $id);
        $this->db->update('desa', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('jalan_desa');
    }

    public function hapusDataKecamatan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kecamatan');
    }
    public function getKecamatanById($id)
    {
        return $this->db->get_where('kecamatan', ['id' => $id])->row_array();
    }
    public function ubahDataKecamatan()
    {
        $id = $this->input->post('id');

        $data = [
            'kecamatan'   => $this->input->post('kecamatan')
        ];

        $this->db->where('id', $id);
        $this->db->update('kecamatan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('jalan_kecamatan');
    }
}
