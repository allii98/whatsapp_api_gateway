<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->library('bcrypt');
    }
    public function index()
    {
        $data = [
            'tittle'          => 'Data User',
            'user'              => $this->User_m->get_user()
        ];
        $this->template->load('template', 'user/v_user', $data);
    }

    public function tambah()
    {
        # code...
        $nama = $this->input->post('nama');
        $username = $this->input->post('usr');
        $pass = $this->input->post('pw');
        $hash = $this->bcrypt->hash_password($pass);


        $data = array(
            'user_nama' => $nama,
            'username' => $username,
            'user_pass' => $hash

        );
        $this->User_m->add_user($data);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Data Admin Berhasil Disimpan
                    </div>
                </div>");

        redirect(base_url('User'));




        $this->template->load('template', 'user/v_user', $data);
    }



    public function edit($id = null)
    {
        $data = [
            'tittle'          => 'Edit Data User',
            'user'              => $this->User_m->get_id($id)
        ];
        $this->template->load('template', 'user/v_edit', $data);
    }

    public function edit_post()
    {
        # code...
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('usr');

        $data = array(
            'user_id' => $id,
            'user_nama' => $nama,
            'username' => $username
        );
        $this->User_m->update_user($id, $data);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Data Admin Berhasil Disimpan
                    </div>
                </div>");

        redirect(base_url('User'));
    }

    public function delete($id)
    {
        $data = array('user_id' => $id);
        $this->User_m->delete($data);
        $this->session->set_flashdata("pesan", "<div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\" id=\"alert\">
			<span class=\"badge badge-pill badge-success\"></span>
			Data Berhasil Dihapus
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
				<span aria-hidden=\"true\">×</span>
			</button></div>");
        redirect(base_url('User'));
        # code...
    }
}
