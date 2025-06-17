<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends MY_Controller
{
    public $db, $input, $output, $session, $Achievement_model, $Parent_model, $Payment_model, $Student_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Achievement_model');
        $this->load->model('Parent_model');
        $this->load->model('Payment_model');
        $this->load->model('Student_model');
    }

    public function index()
    {
        $not_paid = 0;
        $paid = 0;

        $students = $this->Student_model->get_all();
        foreach ($students as &$student) {
            $student->payment = $this->Payment_model->get_test_by_student($student->id);
            $student->payment->status === 'new' ? $not_paid++ : $paid++;
        }

        $data_content = [
            'students' => $students,
            'count_not_paid' => $not_paid,
            'count_paid' => $paid,
            'breadcrumbs' => [
                ['title' => 'Seleksi Calon Siswa', 'last' => false],
                ['title' => 'Data Pembayaran', 'last' => true],
            ]
        ];

        $data['page_title'] = 'Data Pembayaran';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'payment'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('payment/index', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/payment/index.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function show($id)
    {
        $data_content = [
            'student' => $this->Student_model->get_by_id($id),
            'parents' => $this->Parent_model->get_by_student_id($id),
            'achievements' => $this->Achievement_model->get_by_student_id($id),
        ];

        $data['page_title'] = 'Data Pendaftar';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'students'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('student/show', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/student/show.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function confirm()
    {
        $this->Payment_model->update($this->input->post('id'), [
            'status' => 'confirmed',
            'paid_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'message' => 'Update berhasil!!!'
            ]));
        return;
    }
}
