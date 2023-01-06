<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location: login.php");
  die;
}

require 'db.php';

$produkBudidaya = query_select('produksi_budidaya');
?>
<?php require 'header.php'; ?>
<?php require 'navbar.php'; ?>

<div class="container-fluid mt-4">
  <div class="text-center mb-4">
    <h4>Crud 2 Produksi Budidaya</h4>
  </div>

  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <form action="insert_2.php" method="POST" class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="jenis_usaha" required placeholder="Jenis Usaha">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="prov" required placeholder="Provinsi">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="jenis_ikan" required placeholder="Jenis Ikan">
          </div>
          <div class="col-md-6 mb-3">
            <input type="number" class="form-control" name="tahun" required placeholder="Tahun">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="volume" required placeholder="Volume Produksi">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="nilai" required placeholder="Nilai Produksi">
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-info">Tambah</button>


      </form>

      <table class="table table-striped" id="data">
        <thead class="thead-dark">
          <tr>
            <th class="text-center">No</th>
            <th>Jenis Usaha</th>
            <th class="text-center">Provinsi</th>
            <th class="text-center">Jenis Ikan</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Volume Produksi</th>
            <th class="text-center">Nilai Produksi</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;  ?>
          <?php foreach ($produkBudidaya as $item) : ?>
            <tr>
              <td class="text-center"><?= $i ?><?php $i++ ?></td>
              <td><?= $item['jenis_usaha'] ?></td>
              <td class="text-center"><?= $item['provinsi'] ?></td>
              <td class="text-center"><?= $item['jenis_ikan'] ?></td>
              <td class="text-center"><?= $item['tahun'] ?></td>
              <td class="text-center"><?= $item['volume'] ?></td>
              <td class="text-center"><?= $item['nilai'] ?></td>
              <td class="text-center">
                <a href="edit_2.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                <a href="hapus_2.php?id=<?= $item['id'] ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>



<?php require 'footer.php'; ?>