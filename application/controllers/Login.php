<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('/');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_password');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        } else {
            redirect('/');
        }
    }

    function check_password($password) {
        $email = $this->input->post('email');
        $result = $this->user_model->login_result($email, $password);
        if ($result) {
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('user_id', $result->id);
            $this->session->set_userdata('user_email', $result->email);
            $this->session->set_userdata('user_name', $result->name);
            return TRUE;
        } else {
            $this->form_validation->set_message('check_password', 'Invalid username or password.');
            return FALSE;
        }
    }

}

?>