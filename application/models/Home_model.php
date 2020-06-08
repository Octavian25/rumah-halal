<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    private $_table = "project";


    public function getAll()
    {
        $this->db->order_by('ID_project', 'DESC');
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    function simpanDataPelanggan($data, $result)
    {
        $this->db->insert('customer', $data);
        $this->db->insert_batch('angsuran_lain', $result);
    }
    function tampildataunit($id)
    {
        $query = $this->db->query("SELECT project.nama, unit.ID_unit, unit.ID_project,  unit.nomor, unit.type, unit.ref_dp, unit.ref_harga, unit.luas_bangunan, unit.luas_tanah FROM unit JOIN project ON unit.ID_project = project.ID_project WHERE project.ID_project = '$id'");
        return $query;
    }
    function get_harga($id_project)
    {
        $result = $this->db->query("SELECT * FROM unit WHERE id_unit = '$id_project' ")->result();
        return $result;
    }
}
