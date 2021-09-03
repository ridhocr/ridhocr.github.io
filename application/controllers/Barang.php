<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
	}

	public function index()
	{
		$panggil['tampil'] = $this->M_barang->getBarang();
		$this->load->view('template/header');
		$this->load->view('barang', $panggil);
		$this->load->view('template/footer');
	}

	public function addData()
	{
		$nama = $this->input->post('namaB', true);
		$harga = $this->input->post('hargaB', true);
		$jenis = $this->input->post('jenisB', true);
		$jumlah = $this->input->post('jumlahB', true);

	$data = array(
		'nama_barang' => $nama,
		'harga_barang' => $harga,
		'jenis_barang' => $jenis,
		'jumlah_barang' => $jumlah, 
		);

		$this->M_barang->add($data);
		$this->session->set_flashdata('cek','Berhasil Tambah Data Barang');
			redirect('Barang');
	}

	public function editData($id)
	{

		$nama = $this->input->post('namaB', true);
		$harga = $this->input->post('hargaB', true);
		$jenis = $this->input->post('jenisB', true);
		$jumlah = $this->input->post('jumlahB', true);

	$data = array(
		'nama_barang' => $nama,
		'harga_barang' => $harga,
		'jenis_barang' => $jenis,
		'jumlah_barang' => $jumlah, 
		);


		$this->M_barang->edit($id, $data);
		$this->session->set_flashdata('edt','Berhasil Edit Data');
			redirect('Barang');
	}

	public function delete($id)
	{
		$this->M_barang->delete($id);
		$this->session->set_flashdata('dlt','Berhasil Delete Data');
			redirect('Barang');
	}
}