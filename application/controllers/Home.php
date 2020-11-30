<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data = [
			'tittle'          => 'Dashboard',

		];
		$this->template->load('template', 'dashboard', $data);
	}
}
