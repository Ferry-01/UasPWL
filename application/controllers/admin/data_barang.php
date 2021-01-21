<?php

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['menub'] = $this->m_menub->tampil_data()->result();
        $this->load->view('templates_admin/header',);
        $this->load->view('templates_admin/side_bar',);
        $this->load->view('templates_admin/top_bar',);
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $jenis          = $this->input->post('jenis');
        $namaProduk     = $this->input->post('namaProduk');
        $hargaProduk    = $this->input->post('hargaProduk');
        $gambarProduk   = $_FILES['gambarProduk']['name'];
        if ($gambarProduk = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambarProduk')) {
                echo "Gambar Gagal di Upload!";
            } else {
                $gambarProduk = $this->upload->data('file_name');
            }
        }

        $data = array(
            'jenis'             => $jenis,
            'namaProduk'        => $namaProduk,
            'hargaProduk'       => $hargaProduk,
            'gambarProduk'      => $gambarProduk
        );

        $this->m_menub->tambah_barang($data, 'tbl_produk');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = array('idProduk' => $id);
        $data['menub'] = $this->m_menub->edit_barang($where, 'tbl_produk')->result();
        $this->load->view('templates_admin/header',);
        $this->load->view('templates_admin/side_bar',);
        $this->load->view('templates_admin/top_bar',);
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $idProduk             = $this->input->post('idProduk');
        $jenis     = $this->input->post('jenis');
        $namaProduk     = $this->input->post('namaProduk');
        $hargaProduk     = $this->input->post('hargaProduk');
        $gambarProduk    = $this->input->post('gambarProduk');

        $data = array(
            'jenis'   => $jenis,
            'namaProduk'   => $namaProduk,
            'hargaProduk'   => $hargaProduk,
            'gambarProduk'  => $gambarProduk
        );

        $where = array(
            'idProduk'  => $idProduk
        );

        $this->m_menub->update_data($where, $data, 'tbl_produk');
        redirect('admin/data_barang/index');
    }

    public function hapus($id)
    {
        $where = array('idProduk' => $id);
        $this->m_menub->hapus_data($where, 'tbl_produk');
        redirect('admin/data_barang/index');
    }
}
