<br>

<div class="text-end">
  <button type="button" class="button btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" title="Tambah Data"><i class="fas fa-plus-square"></i>
</button>
<button type="button" class="button btn-primary btn-add" data-bs-toggle="tooltip" title="Export Data"><a href="<?= site_url('Transaksi/excel') ?>" style="color: white;" >  <i class="fas fa-print"></i> </a></button>
</div>
<?php 
$data=$this->session->flashdata('cek');
if($data!=""){ ?>
<div class="alert alert-success" role="alert" style="padding-top: 1%; padding-bottom:1%;">Sukses! <?=$data;?></div>
<?php } ?>
<?php 
$data=$this->session->flashdata('dlt');
if($data!=""){ ?>
<div class="alert alert-success" role="alert" style="padding-top: 1%; padding-bottom:1%;">Sukses! <?=$data;?></div>
<?php } ?>
<?php 
$data=$this->session->flashdata('edt');
if($data!=""){ ?>
<div class="alert alert-success" role="alert" style="padding-top: 1%; padding-bottom:1%;">Sukses! <?=$data;?></div>
<?php } ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text-center">
        <h5>Tambah Data Barang</h5>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('Transaksi/addDataT') ?>" method="post">
        <div class="mb-3 row">
          <label for="inputnama" class="col-sm-2 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputnama" name="nameB" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ttransaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="ttransaksi" name="tTransak" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="jumlah" name="jumlah" required readonly>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="kode" name="kodeB" required readonly>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary btn-add">Tambah Data</button>
        </div>
        </form>
    </div>
  </div>
</div>
<br>

    <table class="table table-bordered">
  <thead class="text-center">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <?php $i=0; foreach($tampil as $getData) { 
    $i++;?>
  <tbody class="text-center">
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $getData->t_namaBarang ?></td>
      <td><?php echo $getData->t_transaksi ?></td>
      <td><?php echo $getData->jumlah ?></td>
      <td><?php echo $getData->kode_barang ?></td>
      <td><a style="color: #1d7835;" href="" data-bs-toggle="modal" data-bs-target="#editData<?=$getData->id_transaksi;?>" data-bs-toggle="tooltip" title="Edit Data"><i class="fas fa-edit"></i> </a>&nbsp; 
      <a style="color: crimson;" href="<?= site_url('Transaksi/deleteT/'.$getData->id_transaksi) ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" data-bs-toggle="tooltip" title="Delete Data">
      <i class="fas fa-trash-alt"></i> </a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
  </div>
<?php $i=0; foreach($tampil as $getData):
    $i++;?>
<div class="modal fade" id="editData<?=$getData->id_transaksi;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text-center">
        <h5>Edit Data Barang</h5>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('Transaksi/editDataT/'.$getData->id_transaksi) ?>" method="post">
        <div class="mb-3 row">
          <label for="inputnama" class="col-sm-2 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputnama2" name="nameB" value="<?php echo $getData->t_namaBarang ?>" required readonly>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ttransaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="ttransaksi2" name="tTransaksi" value="<?php echo $getData->t_transaksi ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="jumlah2" name="jenisB" value="<?php echo $getData->jumlah ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kodeB" class="col-sm-2 col-form-label">Kode Barang</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="kodeB2" name="kodeB" value="<?php echo $getData->kode_barang ?>" required readonly>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary btn-add">Edit Data</button>
        </div>
        </form>
    </div>
  </div>
</div>
<?php endforeach; ?>


