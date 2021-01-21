<?php

class M_menu extends CI_Model
{
    public function data_biasa()
    {
        return $this->db->get_where("tbl_produk", array('jenis' => 'Menu Biasa'));
    }

    public function data_hotplate()
    {
        return $this->db->get_where("tbl_produk", array('jenis' => 'Menu Hotplate'));
    }

    public function data_panas()
    {
        return $this->db->get_where("tbl_produk", array('jenis' => 'Menu Panas'));
    }

    public function data_dingin()
    {
        return $this->db->get_where("tbl_produk", array('jenis' => 'Menu Dingin'));
    }
}
