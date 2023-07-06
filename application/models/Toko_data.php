<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_data extends CI_Model {
    
    // Tampil Data
    function ShowToko()
    {
        $id = $this->session->userdata('email');
        $this->db->where('user_id',$id);
        return $this->db->get('toko')->result_array();
    }

    // Tambah Data
    function AddData($data)
    {
        $this->db->insert('toko', $data);
    }  
}