<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['tbl_admin'] = $this->db->get_where('tbl_admin', ['userName' => $this->session->userdata('userName')])->row_array();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/side_bar');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('admin/index');
        $this->load->view('templates_admin/footer');
    }
}
