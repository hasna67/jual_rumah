<?php

class data_rumah extends CI_Controller{
    public function __construct(){
        parent::__construct();
        
        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
          redirect('auth/login');
        }
    }
    public function index()
    {
        $data['rumah'] = $this->model_rumah->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_rumah', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $tipe_rumah     = $this->input->post('tipe_rumah');
        $kategori       = $this->input->post('kategori');
        $keterangan     = $this->input->post('keterangan');
        $harga          = $this->input->post('harga');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar =''){}else{
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload!";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }
        
        $data = array(
            'tipe_rumah'    => $tipe_rumah,
            'kategori'      =>$kategori,
            'keterangan'    => $keterangan,
            'harga'    => $harga,
            'gambar'    => $gambar,
        );

        $this->model_rumah->tambah_data($data, 'tb_rumah');
        redirect('admin/data_rumah/index');
    }
    public function edit($id)
    {
        $where = array('id_rumah' =>$id);
        $data['rumah'] = $this->model_rumah->edit_data($where, 'tb_rumah')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_data', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update(){
        $id_rumah   =$this->input->post('id_rumah');
        $tipe_rumah =$this->input->post('tipe_rumah');
        $kategori   =$this->input->post('kategori');
        $keterangan =$this->input->post('keterangan');
        $harga      =$this->input->post('harga');
    
        $data = array(

            'tipe_rumah'        =>$tipe_rumah,
            'kategori'          =>$kategori,
            'keterangan'        =>$keterangan,
            'harga'        =>$harga,
        );
        $where = array(
            'id_rumah'      => $id_rumah
        );
        $this->model_rumah->update_data($where,$data,'tb_rumah');
        redirect('admin/data_rumah/index');
    }
    public function hapus($id_rumah)
    {
        $where = array('id_rumah' => $id_rumah);
        $this->model_rumah->hapus_data($where, 'tb_rumah');
        redirect('admin/data_rumah/index');
    }
}