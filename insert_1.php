<?php require 'header.php'; ?>
<?php
require 'db.php';

$data = [
  'id' => '',
  'lat' => clear($_POST['lat']),
  'long' => clear($_POST['long']),
];

query_insert('titik_kordinat', $data);
?>

<div class="container-fluid pt-3">
  <div class="alert alert-success">Data Berhasil Ditambah!</div>
</div>

<?php
direct('crud_1.php', 1000);
?>