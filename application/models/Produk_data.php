<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_data extends CI_Model {
    
    // Tampil Data
    function ShowProduk()
    {
        $id = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('toko', 'barang.toko_id = toko.id_toko');
        $this->db->join('user', 'toko.user_id = user.id_user');
        $this->db->where('email',$id);
        return $this->db->get()->result_array();
    }
    function ShowData()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('toko', 'toko.id_toko = barang.toko_id');
        return $this->db->get()->result_array();
    }
    function ShowDetail($id_barang)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('toko', 'toko.id_toko = barang.toko_id');
        $this->db->where('barang.id_barang', $id_barang);
        return $this->db->get()->row_array();
    }

    // Tambah Data
    function AddData($data)
    {
        $this->db->insert('barang', $data);
    }
    function ShowDataAdd()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('toko', 'toko.id_toko = barang.toko_id');
        return $this->db->get()->row_array();
    }
    function ImageDataAdd($data)
    {
        $this->db->insert('foto_barang', $data);
        $this->db->where('barang_id' == $data['barang_id']);
    }
}