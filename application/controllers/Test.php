<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends MY_Controller
{
    public $db, $input, $output, $session, $Achievement_model, $Parent_model, $Payment_model, $Student_model, $Test_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Achievement_model');
        $this->load->model('Parent_model');
        $this->load->model('Payment_model');
        $this->load->model('Student_model');
        $this->load->model('Test_model');
    }

    public function index()
    {
        $new = 0;
        $passed = 0;
        $failed = 0;

        $students = $this->Student_model->get_all();
        foreach ($students as &$student) {
            $student->test = $this->Test_model->get_by_student($student->id);
            if ($student->test->status === 'new') {
                $new++;
            }
            if ($student->test->status === 'passed') {
                $passed++;
            }
            if ($student->test->status === 'failed') {
                $failed++;
            }
        }

        $data_content = [
            'students' => $students,
            'count_new' => $new,
            'count_passed' => $passed,
            'count_failed' => $failed,
            'breadcrumbs' => [
                ['title' => 'Seleksi Calon Siswa', 'last' => false],
                ['title' => 'Data Tes', 'last' => true],
            ]
        ];

        $data['page_title'] = 'Data Tes';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'test'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('test/index', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/test/index.js') . '"></script>';

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
        $this->Test_model->update($this->input->post('id'), [
            'status' => $this->input->post('status'),
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
