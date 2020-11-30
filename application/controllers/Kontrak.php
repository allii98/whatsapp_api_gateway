<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{

    public function index()
    {
        $data = [
            'tittle'          => 'Data Kontrak'

        ];
        $this->template->load('template', 'kontrak/v_kontrak', $data);
    }
}

/* End of file Kontrak.php */
