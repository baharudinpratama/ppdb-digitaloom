<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        } else if ($this->session->userdata('role') === 'admin') {
			redirect('dashboard/admin');
		} else {
			redirect('rereg/upload');
		}
	}

	public function admin()
	{
		$data['page_title'] = 'Dashboard';
		$data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'dashboard'], TRUE);
		$data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
		$data['content'] = $this->load->view('dashboard/admin', [], TRUE);

		// $data['script'] = '<script src="' . base_url('/assets/js/dashboard/admin-form.js') . '"></script>';

		$this->load->view('layouts/main', $data);
	}
}
