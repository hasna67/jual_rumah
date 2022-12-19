<?php

class model_rumah extends CI_Model{
    public function tampil_data(){
       return $this->db->get('tb_rumah');
    }
    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }
    public function edit_data($where,$table){
       return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id_rumah)
    {
        $result = $this->db->where('id_rumah', $id_rumah)->limit(1)->get('tb_rumah');
        if($result->num_rows() > 0 ){
            return $result->row();
        }else{
            return array();
        }
    }
    public function detail_rumah($id_rumah)
    {
        $result = $this->db->where('id_rumah', $id_rumah)->get('tb_rumah');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

}