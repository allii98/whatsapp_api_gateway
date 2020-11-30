<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    function get_user()
    {
        $this->db->select('*');
        $this->db->from('tbuser');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function add_user($data)
    {
        $this->db->insert('tbuser', $data);
        return TRUE;
    }

    function get_id($id)
    {
        $query = $this->db->where('user_id', $id);
        $q = $this->db->get('tbuser');
        $data = $q->result();

        return $data;
    }

    function update_user($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbuser', $data);

        return TRUE;
    }

    function delete($data)
    {
        $this->db->where($data);
        $this->db->delete('tbuser');
        return TRUE;
    }
}