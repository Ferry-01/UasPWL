<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side_bar', $data);
        $this->load->view('templates/top_bar', $data);
        $this->load->view('menuBiasa/index', $data);
        $this->load->view('templates/footer');
    }

    public function menuBiasa()
    {
        $this->load->model('produk/m_menub');
        $data['menub'] = $this->m_menub->tampil_data()->result();
        $this->load->view('templates/header',);
        $this->load->view('templates/side_bar',);
        $this->load->view('templates/top_bar',);
        $this->load->view('menuBiasa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->m_menub->find($id);

        $data = array(
            'id'        => $barang->idProduk,
            'qty'        => 1,
            'price'        => $barang->hargaProduk,
            'name'        => $barang->namaProduk
        );

        $this->cart->insert($data);
        redirect('dashboard/menuBiasa');
    }


    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/side_bar');
        $this->load->view('templates/top_bar');
        $this->load->view('topbar/keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/menuBiasa');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/side_bar');
        $this->load->view('templates/top_bar');
        $this->load->view('sidebar/pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->m_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/side_bar');
            $this->load->view('templates/top_bar');
            $this->load->view('sidebar/proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }
}
