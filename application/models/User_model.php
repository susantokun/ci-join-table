<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_by_role()
    {
        $this->db->select('
          tbl_user.*, tbl_role.id AS id_role, tbl_role.name, tbl_role.description
        ');
        $this->db->join('tbl_role', 'tbl_user.id_role = tbl_role.id');
        $this->db->from('tbl_user');
        $query = $this->db->get();
        return $query->result();
    }
}