<?php

class dashboard extends CI_Controller{
    
    public function index()
    {
        $data['rumah'] = $this->model_rumah->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function __construct(){
        parent::__construct();
        
        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
          redirect('auth/login');
        }
    }
    public function buy_now($id_rumah)
    {
        $rumah = $this->model_rumah->find($id_rumah);

        $data = array(
            'id'      => $rumah->id_rumah,
            'qty'     => 1,
            'price'   => $rumah->harga,
            'name'    => $rumah->tipe_rumah,
            'bukti_transfer' => ''
            
    );
    
    $this->cart->insert($data);
    redirect('dashboard');
    }
    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }
    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }
    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else{
            echo "Maaf, Pesanan Anda Gagal Diproses";
        }
        
    }
    public function detail($id_rumah)
    {
        $data['rumah'] = $this->model_rumah->detail_rumah($id_rumah);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_rumah', $data);
        $this->load->view('templates/footer');
    }
}