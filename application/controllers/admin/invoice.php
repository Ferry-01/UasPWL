<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->m_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/side_bar');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->m_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->m_invoice->ambil_id_pesanan($id_invoice);
        $data['invoice'] = $this->m_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/side_bar');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates_admin/footer');
    }
}
