<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location: login.php");
  die;
}

require 'db.php';

$dataKordinat = query_select('titik_kordinat');
?>
<?php require 'header.php'; ?>
<?php require 'navbar.php'; ?>

<div class="container-fluid mt-4">
  <div class="text-center mb-4">
    <h4>Crud 1 Titik Kordinat Leaflet JS</h4>
  </div>

  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <form action="insert_1.php" method="POST" class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="lat" required placeholder="Latiude">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="long" required placeholder="Longitude">
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-info">Tambah Kordinat</button>


      </form>

      <table class="table table-striped" id="data">
        <thead class="thead-dark">
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Latitude</th>
            <th class="text-center">Longitude</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;  ?>
          <?php foreach ($dataKordinat as $item) : ?>
            <tr>
              <td class="text-center"><?= $i ?><?php $i++ ?></td>
              <td class="text-center"><?= $item['lat'] ?></td>
              <td class="text-center"><?= $item['longi'] ?></td>
              <td class="text-center">
                <a href="edit_1.php?id=<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                <a href="hapus_1.php?id=<?= $item['id'] ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>



<?php require 'footer.php'; ?>