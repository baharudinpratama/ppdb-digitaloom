<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rereg extends MY_Controller
{
    public $db, $input, $output, $session, $upload, $Achievement_model, $Parent_model, $Payment_model, $Student_model, $User_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Achievement_model');
        $this->load->model('Parent_model');
        $this->load->model('Payment_model');
        $this->load->model('Student_model');
        $this->load->model('User_model');
    }

    public function upload()
    {
        $student_id = $this->User_model->get_by_id($this->session->userdata('user_id'))->student_id;

        $data_content = [
            'student' => $this->Student_model->get_by_id($student_id),
            'student_uploads' => $this->db->get_where('student_uploads', ['student_id' => $student_id])->result()
        ];

        $data['page_title'] = 'Data Pendaftar';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'upload'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('rereg/upload', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/rereg/upload.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function upload_submit()
    {
        $this->db->trans_start();

        $tags = ['photo', 'nisn', 'birth-cert', 'kk', 'skl'];

        foreach ($tags as $tag) {
            if (! empty($_FILES[$tag]['name'])) {
                $config = [
                    'upload_path'   => "./uploads/$tag/",
                    'allowed_types' => '*',
                    'max_size'      => 2048,
                    'encrypt_name'  => TRUE,
                ];

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload($tag)) {

                    $uploadData = $this->upload->data();

                    $this->db->insert('student_uploads', [
                        'student_id'     => $this->input->post('id'),
                        'type'           => $tag,
                        'filename'       => $uploadData['file_name'],
                        'original_name'  => $uploadData['client_name'],
                        'created_at'     => date('Y-m-d H:i:s')
                    ]);
                } else {
                    $this->db->trans_rollback();

                    $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode([
                            'success' => false,
                            'message' => strip_tags($this->upload->display_errors())
                        ]));
                    return;
                }
            }
        }

        $data = [
            'student_id' => $this->input->post('id'),
            'type' => 'rereg',
            'amount' => 2500000,
            'status' => 'new',
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->Payment_model->insert($data);

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

    public function pay()
    {
        $student_id = $this->User_model->get_by_id($this->session->userdata('user_id'))->student_id;

        $data_content = [
            'student' => $this->Student_model->get_by_id($student_id),
            'student_uploads' => $this->db->get_where('student_uploads', ['student_id' => $student_id])->result(),
            'student_payment' => $this->Payment_model->get_rereg_by_student($student_id)
        ];

        $data['page_title'] = 'Data Pendaftar';
        $data['sidebar'] = $this->load->view('templates/main/sidebar', ['active_menu' => 'pay'], TRUE);
        $data['navbar'] = $this->load->view('templates/main/navbar', [], TRUE);
        $data['content'] = $this->load->view('rereg/pay', $data_content, TRUE);

        $data['script'] = '<script src="' . base_url('/assets/js/rereg/pay.js') . '"></script>';

        $this->load->view('layouts/main', $data);
    }
}
