<?php

class kategori extends CI_Controller{
    public function modern()
    
    {
        $data['modern'] = $this->model_kategori->data_modern()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('modern', $data);
        $this->load->view('templates/footer');
    
    }
    public function classic()
    
    {
        $data['classic'] = $this->model_kategori->data_classic()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('classic', $data);
        $this->load->view('templates/footer');
    
    }
    public function minimalis()
    
    {
        $data['minimalis'] = $this->model_kategori->data_minimalis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minimalis', $data);
        $this->load->view('templates/footer');
    
    }
}