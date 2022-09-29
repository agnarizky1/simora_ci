<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Idsite_model extends CI_Model
{
    public function hapusDataIdsite($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('cellplan');
    }
    public function getIdsiteById($id)
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        $this->db->where('cellplan.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getBarcode($id_site)
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        $this->db->where('cellplan.id_site', $id_site);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function ubahDataIdsite()
    {
        $id = $this->input->post('id');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path']      = './assets/img/idsite';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gagal Upload";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = [
            'id_site'       => $this->input->post('id_site'),
            'provider_id'   => $this->input->post('provider_id'),
            'kecamatan_id'  => $this->input->post('kecamatan_id'),
            'desa_id'       => $this->input->post('desa_id'),
            'lokasi'        => $this->input->post('lokasi'),
            'latitude'      => $this->input->post('latitude'),
            'longitude'     => $this->input->post('longitude'),
            'radius'        => $this->input->post('radius'),
            'warna'         => $this->input->post('warna'),
            'gambar'        => $gambar,
        ];
        $this->db->where('id', $id);
        $this->db->update('cellplan', $data);
    }
    public function join3table()
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        // $this->db->where('cellplan.kecamatan_id', $kecamatan);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function filter_kecamatan($kecamatan)
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        $this->db->where('cellplan.kecamatan_id', $kecamatan);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function filter_perusahaan($nama_perusahaan_id)
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        $this->db->where('cellplan.provider_id', $nama_perusahaan_id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function filter_desa($desa)
    {
        $this->db->select('*');
        $this->db->from('cellplan');
        $this->db->join('nama_perusahaan', 'cellplan.provider_id = nama_perusahaan.id', 'LEFT');
        $this->db->join('kecamatan', 'cellplan.kecamatan_id = kecamatan.id', 'LEFT');
        $this->db->join('desa', 'cellplan.desa_id = desa.id ', 'LEFT');
        $this->db->where('cellplan.desa_id', $desa);
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
    public function getData($limit, $start)
    {
        return $this->db->get('cellplan', $limit, $start)->result_array();
    }
    public function countData()
    {
        return $this->db->get('cellplan')->num_rows();
    }
}
