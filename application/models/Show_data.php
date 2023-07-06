<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_data extends CI_Model {
    
    // Show
    function Show()
    {
        $id = $this->session->userdata('email');
        $this->db->where('email',$id);
        return $this->db->get('user')->row_array();
    }

    function ShowToko()
    {
        $id = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('toko');
        $this->db->join('user', 'toko.user_id = user.id_user');
        $this->db->where('email',$id);
        return $this->db->get()->row_array();
    }
    //
}