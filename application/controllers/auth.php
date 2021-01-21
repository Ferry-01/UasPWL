<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('userName')) {
            redirect('dashboard/menuBiasa');
        }

        $this->form_validation->set_rules('userName', 'username', 'trim|required', [
            'required' => 'The Username field must contain a valid Username'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('userName');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_admin', array('userName' => $username))->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'userName' => $user['userName'],
                    'role_id'   => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin/dashboard');
                } else {
                    redirect('dashboard/menuBiasa');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('userName');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
