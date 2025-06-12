<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{
    public $db, $input, $output, $upload;

    public function student()
    {
        $data['sidebar'] = $this->load->view('templates/register/sidebar', ['active_menu' => 'student', 'step' => 1], TRUE);
        $data['navbar'] = $this->load->view('templates/register/navbar', [], TRUE);
        $data['content'] = $this->load->view('register/student', [], TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/register/student-form.js') . '"></script>';

        $this->load->view('layouts/register', $data);
    }

    public function parent()
    {
        $data['sidebar'] = $this->load->view('templates/register/sidebar', ['active_menu' => 'parent', 'step' => 2], TRUE);
        $data['navbar'] = $this->load->view('templates/register/navbar', [], TRUE);
        $data['content'] = $this->load->view('register/parent', [], TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/register/parent-form.js') . '"></script>';

        $this->load->view('layouts/register', $data);
    }

    public function grade()
    {
        $data['sidebar'] = $this->load->view('templates/register/sidebar', ['active_menu' => 'grade', 'step' => 3], TRUE);
        $data['navbar'] = $this->load->view('templates/register/navbar', [], TRUE);
        $data['content'] = $this->load->view('register/grade', [], TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/register/grade-form.js') . '"></script>';

        $this->load->view('layouts/register', $data);
    }

    public function achievement()
    {
        $data['sidebar'] = $this->load->view('templates/register/sidebar', ['active_menu' => 'achievement', 'step' => 4], TRUE);
        $data['navbar'] = $this->load->view('templates/register/navbar', [], TRUE);
        $data['content'] = $this->load->view('register/achievement', [], TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/register/achievement-form.js') . '"></script>';

        $this->load->view('layouts/register', $data);
    }

    public function confirmation()
    {
        $data['sidebar'] = $this->load->view('templates/register/sidebar', ['active_menu' => 'confirmation', 'step' => 5], TRUE);
        $data['navbar'] = $this->load->view('templates/register/navbar', [], TRUE);
        $data['content'] = $this->load->view('register/confirmation', [], TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/register/confirmation-form.js') . '"></script>';

        $this->load->view('layouts/register', $data);
    }

    public function submit()
    {
        $this->db->trans_start();

        $data = [
            'nik' => $this->input->post('nik'),
            'nisn' => $this->input->post('nisn'),
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'birth_place' => $this->input->post('birth_place'),
            'birth_date' => $this->input->post('birth_date'),
            'nationality' => $this->input->post('nationality'),
            'address' => $this->input->post('address'),
            'language' => $this->input->post('language'),
            'blood_type' => $this->input->post('blood_type'),
            'medical_history' => $this->input->post('medical_history'),
            'prev_school_name' => $this->input->post('prev_school_name'),
            'prev_school_npsn' => $this->input->post('prev_school_npsn'),
            'prev_school_acc' => $this->input->post('prev_school_acc'),
            'prev_school_anbk' => $this->input->post('prev_school_anbk'),
            'prev_school_address' => $this->input->post('prev_school_address'),
            'diploma_number' => $this->input->post('diploma_number'),
            'diploma_year' => $this->input->post('diploma_year'),
            'class_program' => $this->input->post('class_program'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('students', $data);

        $student_id = $this->db->insert_id();

        if ($this->input->post('father_name') !== "") {
            $data = [
                'student_id' => $student_id,
                'type' => 'ayah',
                'name' => $this->input->post('father_name'),
                'phone' => $this->input->post('father_phone'),
                'birth_place' => $this->input->post('father_birth_place'),
                'birth_date' => $this->input->post('father_birth_date'),
                'education' => $this->input->post('father_education'),
                'job' => $this->input->post('father_job'),
                'income' => $this->input->post('father_income'),
                'address' => $this->input->post('parent_address'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('parents', $data);
        }

        if ($this->input->post('mother_name') !== "") {
            $data = [
                'student_id' => $student_id,
                'type' => 'ibu',
                'name' => $this->input->post('mother_name'),
                'phone' => $this->input->post('mother_phone'),
                'birth_place' => $this->input->post('mother_birth_place'),
                'birth_date' => $this->input->post('mother_birth_date'),
                'education' => $this->input->post('mother_education'),
                'job' => $this->input->post('mother_job'),
                'income' => $this->input->post('mother_income'),
                'address' => $this->input->post('parent_address'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('parents', $data);
        }

        if ($this->input->post('caretaker_name') !== "") {
            $data = [
                'student_id' => $student_id,
                'type' => 'wali',
                'name' => $this->input->post('caretaker_name'),
                'phone' => $this->input->post('caretaker_phone'),
                'birth_place' => $this->input->post('caretaker_birth_place'),
                'birth_date' => $this->input->post('caretaker_birth_date'),
                'education' => $this->input->post('caretaker_education'),
                'job' => $this->input->post('caretaker_job'),
                'income' => $this->input->post('caretaker_income'),
                'address' => $this->input->post('parent_address'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('parents', $data);
        }

        if (!empty($_FILES['achievementFiles']['name'][0])) {
            $files = $_FILES;
            $fileCount = count($files['achievementFiles']['name']);

            for ($i = 0; $i < $fileCount; $i++) {
                $_FILES['file']['name']     = $files['achievementFiles']['name'][$i];
                $_FILES['file']['type']     = $files['achievementFiles']['type'][$i];
                $_FILES['file']['tmp_name'] = $files['achievementFiles']['tmp_name'][$i];
                $_FILES['file']['error']    = $files['achievementFiles']['error'][$i];
                $_FILES['file']['size']     = $files['achievementFiles']['size'][$i];

                $config = [
                    'upload_path'   => './uploads/achievements/',
                    'allowed_types' => '*',
                    'max_size'      => 2048,
                    'encrypt_name'  => TRUE,
                ];

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();

                    $this->db->insert('student_achievements', [
                        'student_id' => $student_id,
                        'filename' => $uploadData['file_name'],
                        'original_name' => $uploadData['client_name'],
                        'created_at' => date('Y-m-d H:i:s')
                    ]);
                } else {
                    $this->db->trans_rollback();
                    $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode([
                            'success' => false,
                            'message' => $this->upload->display_errors()
                        ]));
                    return;
                }
            }
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => false,
                    'message' => 'Terjadi kesalahan.'
                ]));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => true,
                    'message' => 'Submit berhasil.'
                ]));
        }
    }
}
