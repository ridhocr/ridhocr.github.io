<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
	}

	public function index()
	{
		$panggil['tampil'] = $this->M_transaksi->getTransaksi();
		$this->load->view('template/header');
		$this->load->view('transaksi', $panggil);
		$this->load->view('template/footer');
	}
	
	public function addDataT()
	{
		$nama = $this->input->post('nameB', true);
		$harga = $this->input->post('tTransak', true);
		$jenis = $this->input->post('jumlah', true);
		$jumlah = $this->input->post('kodeB', true);

	$data = array(
		't_namaBarang' => $nama,
		't_transaksi' => $harga,
		'jumlah' => $jenis,
		'kode_barang' => $jumlah, 
		);

		$this->M_transaksi->add($data);
		$this->session->set_flashdata('cek','Berhasil Tambah Data Barang');
			redirect('Transaksi');
	}

	public function editDataT($id)
	{

		$nama = $this->input->post('nameB', true);
		$harga = $this->input->post('tTransaksi', true);
		$jenis = $this->input->post('jenisB', true);
		$jumlah = $this->input->post('kodeB', true);

	$data = array(
		't_namaBarang' => $nama,
		't_transaksi' => $harga,
		'jumlah' => $jenis,
		'kode_barang' => $jumlah, 
		);


		$this->M_transaksi->edit($id, $data);
		$this->session->set_flashdata('edt','Berhasil Edit Data');
			redirect('Transaksi');
	}

	public function deleteT($id)
	{
		$this->M_transaksi->delete($id);
		$this->session->set_flashdata('dlt','Berhasil Delete Data');
			redirect('Transaksi');
	}

	function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->M_transaksi->getNamaBarang($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->nama_barang,
            'kodeB'=>$row->kode_barang,
			'jumlah'=>$row->jumlah_barang
          );
        echo json_encode($result_array);
      }
    }
  }

  public function excel(){
	$panggil['tampil'] = $this->M_transaksi->getTransaksi();

	require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
	require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

	$object = new PHPExcel();

	$object->getProperties()->setCreator("HPAI");
	$object->getProperties()->setLastModifiedBy("HPAI");
	$object->getProperties()->setTitle("Data Transaksi");

	$object->setActiveSheetIndex(0);

	$object->getActiveSheet()->setCellValue('A1', 'No');
	$object->getActiveSheet()->setCellValue('B1', 'Nama Barang');
	$object->getActiveSheet()->setCellValue('C1', 'Tanggal Transaksi');
	$object->getActiveSheet()->setCellValue('D1', 'Jumlah');
	$object->getActiveSheet()->setCellValue('E1', 'Kode Barang');

	$baris = 2;
	$no = 1;

	foreach($panggil['tampil'] as $dta){
		$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
		$object->getActiveSheet()->setCellValue('B'.$baris, $dta->t_namaBarang);
		$object->getActiveSheet()->setCellValue('C'.$baris, $dta->t_transaksi);
		$object->getActiveSheet()->setCellValue('D'.$baris, $dta->jumlah);
		$object->getActiveSheet()->setCellValue('E'.$baris, $dta->kode_barang);

		$baris++;
	}

	$filename="Data Transaksi".'.xlsx';

	$object->getActiveSheet()->setTitle("Data Transaksi");

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreedsheetml.sheet');
	header('Content-Disposition: attachment;filename="'.$filename.'"');
	header(('Cache-Control: max-age=0'));

	$writer=PHPExcel_IOFactory::createWriter($object, 'Excel2007');
	$writer->save('php://output');
  }
}