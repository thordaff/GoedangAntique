<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_data extends CI_Model {
    
    // Tampil Data
    function ShowKomentar($id_barang)
    {
        $this->db->where('barang_id', $id_barang);
        return $this->db->get('komentar')->result_array();
    }

    // Tambah Data
    function AddData($data)
    {
        $this->db->insert('komentar', $data);
    }  
}