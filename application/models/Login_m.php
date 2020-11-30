<?php
class Login_m extends CI_Model
{

    function prosesLogin($username)
    {
        $this->db->where('username', $username);

        return $this->db->get('tbuser')->row();
    }



    function viewDataByID($username)
    {
        $query = $this->db->where('username', $username);
        $q = $this->db->get('tbuser');
        $data = $q->result();

        return $data;
    }

    function checkDataUsrbyID($id, $pass)
    {
        $this->db->where('user_id', $id);
        $this->db->where('user_pass', $pass);

        return $this->db->get('tbuser')->row();
    }

    function changepassUser($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbuser', $data);

        return TRUE;
    }
}