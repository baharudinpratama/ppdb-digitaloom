<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends MY_Controller
{
    public $db, $input, $output, $session, $Achievement_model, $Parent_model, $Student_model, $User_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Achievement_model');
        $this->load->model('Parent_model');
        $this->load->model('Student_model');
        $this->load->model('User_model');
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

    public function approve()
    {
        $this->Student_model->update($this->input->post('id'), [
            'reg_status' => 'approved'
        ]);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'message' => 'Update berhasil!!!'
            ]));
        return;
    }

    public function reject()
    {
        $this->Student_model->update($this->input->post('id'), [
            'reg_status' => 'rejected'
        ]);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'message' => 'Update berhasil!!!'
            ]));
        return;
    }

    public function user()
    {
        $students = $this->Student_model->get_all();
        foreach ($students as &$student) {
            $student->user = $this->User_model->get_by_student_id($student->id);
        }

        $data_content = [
            'students' => $students
        ];

        $data['page_title'] = 'Daftar Akun';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'user'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('user/index', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/user/index.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function user_show($id)
    {
        $data_content = [
            'student' => $this->Student_model->get_by_id($id),
            'user' => $this->User_model->get_by_student_id($id)
        ];

        $data['page_title'] = 'Form Akun';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'user'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('user/show', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/user/show.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function user_store()
    {
        $data = [
            'student_id' => $this->input->post('student_id'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->User_model->insert($data);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'message' => 'Update berhasil!!!'
            ]));
        return;
    }
}
