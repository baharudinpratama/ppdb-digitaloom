<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public $db, $input, $output, $session, $Student_model, $User_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Student_model');
    }

    public function login()
    {
        if ($this->input->method() === 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User_model->get_by_username($username);
            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('role', $user->student_id === null ? 'admin' : 'student');

                if ($user->student_id !== null) {
                    $student = $this->Student_model->get_by_id($user->student_id);
                    $this->session->set_userdata('nisn', $student->nisn);
                    $this->session->set_userdata('name', $student->name);
                }

                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'success' => true,
                        'message' => 'Login berhasil!!!',
                        'data' => $user
                    ]));
                return;
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'success' => false,
                        'message' => 'Username atau password salah.',
                        'data' => ''
                    ]));
                return;
            }
        }

        $admin = $this->User_model->get_by_username('admin');

        if (!$admin) {
            $data = [
                'username' => 'admin',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->User_model->insert($data);
        }

        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('login');
    }
}
