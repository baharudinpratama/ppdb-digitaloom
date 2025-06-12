<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $session;

    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('user_id')) {
        //     redirect('auth/login');
        // }
    }
}
