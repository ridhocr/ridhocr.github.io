<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function getTransaksi(){
        $this->db->select('*');
        $this->db->from('t_transaksi');
        return $this->db->get()->result();
    }

    public function add($data){
        $this->db->insert('t_transaksi', $data);
    }

    public function edit($id, $data){
        $this->db->where('id_transaksi', $id);
		$this->db->update('t_transaksi', $data);
    }

    public function delete($id){
        $this->db->where('id_transaksi', $id);
        $this->db->delete('t_transaksi');
    }

    public function getNamaBarang($namaBarang)
    {
        $this->db->like('nama_barang', $namaBarang, 'BOTH');
        $this->db->order_by('kode_barang', 'asc');
        $this->db->limit(5);
        return $this->db->get('t_barang')->result();
    }

}