<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function getBarang(){
        $this->db->select('*');
        $this->db->from('t_barang');
        return $this->db->get()->result();
    }

    public function add($data){
        $this->db->insert('t_barang', $data);
    }

    public function edit($id, $data){
        $this->db->where('kode_barang', $id);
		$this->db->update('t_barang', $data);
    }

    public function delete($id){
        $this->db->where('kode_barang', $id);
        $this->db->delete('t_barang');
    }

}