<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_m extends CI_Model
{

    public function add($data)
    {
        # code...
        $this->db->insert('tb_pesan', $data);
        return TRUE;
    }
}

/* End of file ModelName.php */
