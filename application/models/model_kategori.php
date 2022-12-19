<?php

class model_kategori extends CI_Model{
    public function data_modern()
    {
        return $this->db->get_where("tb_rumah", array('kategori' => 'modern'));
    }
    public function data_classic()
    {
        return $this->db->get_where("tb_rumah", array('kategori' => 'classic'));
    }
    public function data_minimalis()
    {
        return $this->db->get_where("tb_rumah", array('kategori' => 'minimalis'));
    }
}