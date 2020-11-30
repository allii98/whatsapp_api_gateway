<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Pesan_m');
    }



    public function index()
    {
        $data = [
            'tittle'          => 'Send Whatsapp'

        ];
        $this->template->load('template', 'invoice/v_invoice', $data);
    }

    public function kirim()
    {
        # code...
        $nomer = $this->input->post('no');
        $pesan = $this->input->post('pesan');


        sendWA($nomer, $pesan);
        $data = array(
            'no_wa' => $nomer,
            'pesan' => $pesan
        );
        $this->Pesan_m->add($data);
        # code...
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Pesan Telah Dikirim.
                    </div>
                </div>");

        redirect(base_url('Invoice'));
    }
}

/* End of file Invoice.php */
