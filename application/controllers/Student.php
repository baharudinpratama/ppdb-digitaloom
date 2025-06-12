<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends MY_Controller
{
    public $db, $input, $output, $session, $Student_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data_content = [
            'students' => $this->Student_model->get_all()
        ];

        $data['page_title'] = 'Data Pendaftar';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'students'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('student/index', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/student/index.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }
}
