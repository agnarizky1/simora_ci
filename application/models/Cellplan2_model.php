<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cellplan2_model extends CI_Model
{
    public function getProvider()
    {
        $query = "SELECT `cellplan`.*, `nama_perusahaan`.`nama_perusahaan`
                        FROM `cellplan` JOIN `nama_perusahaan` 
                        ON `cellplan`.`provider_id` = `nama_perusahaan`.`id`  
                    ";
        return $this->db->query($query)->result_array();
    }
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->row_array();
    }
    public function getMarkerColor()
    {
        $query = "SELECT `cellplan`.*, `provider`.`marker_color`
                        FROM `cellplan` JOIN `provider` 
                        ON `cellplan`.`warna` = `provider`.`id`  
                    ";
        return $this->db->query($query)->result_array();
    }
    public function hapusDataIdsite($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('cellplan');
    }
    public function getIdsiteById($id)
    {
        return $this->db->get_where('cellplan', ['id' => $id])->row_array();
    }
    public function ubahDataIdsite()
    {
        $id = $this->input->post('id');

        $data = [
            'id_site'       => $this->input->post('id_site'),
            'provider_id'   => $this->input->post('provider_id'),
            'lokasi'        => $this->input->post('lokasi'),
            'latitude'      => $this->input->post('latitude'),
            'longitude'     => $this->input->post('longitude'),
            'radius'        => $this->input->post('radius'),
            'warna'         => $this->input->post('warna')
        ];

        $this->db->where('id', $id);
        $this->db->update('cellplan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit data!</div>');
        redirect('idsite');
    }
    public function join3table($id)
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        $this->db->where('cellplan.id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    function getDataDesa($idkecamatan)
    {
        return $this->db->get_where('desa', ['kecamatan_id' => $idkecamatan])->result();
    }
    function getWarna($marker_color)
    {
        return $this->db->get_where('nama_perusahaan', ['id' => $marker_color])->result();
    }
}
