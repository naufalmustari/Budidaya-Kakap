<?php
require 'db.php';
$id = clear($_GET['id']);
$success = false;

if (isset($_POST['save'])) {
  $jenisUsaha = clear($_POST['jenis_usaha']);
  $prov = clear($_POST['prov']);
  $jenis_ikan = clear($_POST['jenis_ikan']);
  $tahun = clear($_POST['tahun']);
  $volume = clear($_POST['volume']);
  $nilai = clear($_POST['nilai']);

  $sql = "UPDATE produksi_budidaya SET jenis_usaha = '$jenisUsaha', provinsi = '$prov', jenis_ikan = '$jenis_ikan', tahun = '$tahun', volume = '$volume', nilai = '$nilai' WHERE id = '$id'";

  $conn->query($sql);

  $success = true;
}

$produkBudidaya = query_select('produksi_budidaya', "id = '$id'")[0];
?>
<?php require 'header.php'; ?>
<?php require 'navbar.php'; ?>

<div class="container-fluid mt-4">
  <div class="text-center mb-4">
    <h4>Edit Produksi Budidaya</h4>
  </div>

  <div class="card border-0 shadow-sm">
    <div class="card-body">

      <?php if ($success) : ?>
        <div class="alert alert-success">
          Berhasil diubah!
        </div>
      <?php endif; ?>

      <form action="" method="POST" class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="jenis_usaha" required placeholder="Jenis Usaha" value="<?= $produkBudidaya['jenis_usaha'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="prov" required placeholder="Provinsi" value="<?= $produkBudidaya['provinsi'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="jenis_ikan" required placeholder="Jenis Ikan" value="<?= $produkBudidaya['jenis_ikan'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <input type="number" class="form-control" name="tahun" required placeholder="Tahun" value="<?= $produkBudidaya['tahun'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="volume" required placeholder="Volume Produksi" value="<?= $produkBudidaya['volume'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="nilai" required placeholder="Nilai Produksi" value="<?= $produkBudidaya['nilai'] ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-info" name="save">Simpan</button>


      </form>

    </div>
  </div>

</div>

<?php
if ($success) {
  direct('crud_2.php');
}
?>



<?php require 'footer.php'; ?>