<br>

<div class="text-end">
  <button type="button" class="button btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" title="Tambah Data"><i class="fas fa-plus-square"></i>
  </button>
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
        <form action="<?= site_url('Barang/addData') ?>" method="post">
        <div class="mb-3 row">
          <label for="inputnama" class="col-sm-2 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputnama" name="namaB" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputharga" class="col-sm-2 col-form-label">Harga Barang</label>
          <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="number" class="form-control" id="inputharga" name="hargaB" required>
          </div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputjenis" class="col-sm-2 col-form-label">Jenis Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputjenis" name="jenisB" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputjumlah" name="jumlahB" required>
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
      <th scope="col">Harga Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <?php $i=0; foreach($tampil as $getData) { 
    $i++;?>
  <tbody class="text-center">
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $getData->nama_barang ?></td>
      <td><?php echo $getData->harga_barang ?></td>
      <td><?php echo $getData->jenis_barang ?></td>
      <td><?php echo $getData->jumlah_barang ?></td>
      <td><a style="color: #1d7835;" href="" data-bs-toggle="modal" data-bs-target="#editData<?=$getData->kode_barang;?>" data-bs-toggle="tooltip" title="Edit Data"><i class="fas fa-edit"></i> </a>&nbsp; 
      <a style="color: crimson;" href="<?= site_url('Barang/delete/'.$getData->kode_barang) ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" data-bs-toggle="tooltip" title="Delete Data">
      <i class="fas fa-trash-alt"></i> </a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
  </div>
<?php $i=0; foreach($tampil as $getData):
    $i++;?>
<div class="modal fade" id="editData<?=$getData->kode_barang;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text-center">
        <h5>Tambah Data Barang</h5>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('Barang/editData/'.$getData->kode_barang) ?>" method="post">
        <div class="mb-3 row">
          <label for="inputnama" class="col-sm-2 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputnama" name="namaB" value="<?php echo $getData->nama_barang ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputharga" class="col-sm-2 col-form-label">Harga Barang</label>
          <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="number" class="form-control" id="inputharga" name="hargaB" value="<?php echo $getData->harga_barang ?>" required>
          </div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputjenis" class="col-sm-2 col-form-label">Jenis Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputjenis" name="jenisB" value="<?php echo $getData->jenis_barang ?>" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputjumlah" name="jumlahB" value="<?php echo $getData->jumlah_barang ?>" required>
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


