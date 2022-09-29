<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan_model extends CI_Model
{
    public function hapusDataPerusahaan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nama_perusahaan');
    }
    public function getPerusahaanById($id)
    {
        return $this->db->get_where('nama_perusahaan', ['id' => $id])->row_array();
    }
    public function ubahDataPerusahaan()
    {
        $id = $this->input->post('id');

        $data = [
            'nama_perusahaan'   => $this->input->post('nama_perusahaan'),
            'alamat'   => $this->input->post('alamat'),
            'marker_color'   => $this->input->post('marker_color')
        ];

        $this->db->where('id', $id);
        $this->db->update('nama_perusahaan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('daftarnama');
    }
    public function getData($limit, $start)
    {
        return $this->db->get('nama_perusahaan', $limit, $start)->result_array();
    }
    public function countData()
    {
        return $this->db->get('nama_perusahaan')->num_rows();
    }
}
