<?php

class M_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama   = $this->input->post('nama');

        $invoice = array(
            'nama'          => $nama,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d H:i:s', mktime(date('H'), date('i') + 10, date('s'), date('m'), date('d'), date('Y'))),
        );

        $this->db->insert('tbl_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoice'        => $id_invoice,
                'idProduk'          => $item['id'],
                'namaProduk'        => $item['name'],
                'jumlah'            => $item['qty'],
                'hargaProduk'       => $item['price'],
            );
            $this->db->insert('tbl_pesanan', $data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
        $result = $this->db->get('tbl_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tbl_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tbl_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
