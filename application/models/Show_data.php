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
}