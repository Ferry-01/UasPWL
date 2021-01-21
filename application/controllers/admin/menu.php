<?php

class Menu extends CI_Controller
{
    public function menuBiasa()
    {
        $data['biasa'] = $this->m_menu->data_biasa()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/side_bar');
        $this->load->view('templates/top_bar');
        $this->load->view('menu/biasa', $data);
        $this->load->view('templates/footer');
    }

    public function menuHotplate()
    {
        $data['hotplate'] = $this->m_menu->data_hotplate()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/side_bar');
        $this->load->view('templates/top_bar');
        $this->load->view('menu/hotplate', $data);
        $this->load->view('templates/footer');
    }

    public function minumanPanas()
    {
        $data['panas'] = $this->m_menu->data_panas()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/side_bar');
        $this->load->view('templates/top_bar');
        $this->load->view('menu/panas', $data);
        $this->load->view('templates/footer');
    }

    public function minumanDingin()
    {
        $data['dingin'] = $this->m_menu->data_dingin()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/side_bar');
        $this->load->view('templates/top_bar');
        $this->load->view('menu/dingin', $data);
        $this->load->view('templates/footer');
    }
}
