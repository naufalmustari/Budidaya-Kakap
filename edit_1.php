<?php
require 'db.php';
$id = clear($_GET['id']);
$success = false;

if (isset($_POST['save'])) {
  $lat = clear($_POST['lat']);
  $long = clear($_POST['long']);

  $sql = "UPDATE titik_kordinat SET lat = '$lat', longi = '$long' WHERE id = '$id'";

  $conn->query($sql);

  $success = true;
}

$kordinat = query_select('titik_kordinat', "id = '$id'")[0];
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
            <input type="text" class="form-control" name="lat" required placeholder="Latitude" value="<?= $kordinat['lat'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="long" required placeholder="Longitude" value="<?= $kordinat['longi'] ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-info" name="save">Simpan</button>


      </form>

    </div>
  </div>

</div>

<?php
if ($success) {
  direct('crud_1.php', 1000);
}
?>



<?php require 'footer.php'; ?>