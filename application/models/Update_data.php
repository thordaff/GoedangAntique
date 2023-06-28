<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_data extends CI_Model {
    
    // Role
    function UpdateRole($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('user', ['role_id' => $data['role_id']]);
    }
    

}