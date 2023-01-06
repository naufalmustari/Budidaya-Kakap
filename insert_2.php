<?php require 'header.php'; ?>
<?php
require 'db.php';

$data = [
  'id' => '',
  'jenis_usaha' => clear($_POST['jenis_usaha']),
  'prov' => clear($_POST['prov']),
  'jenis_ikan' => clear($_POST['jenis_ikan']),
  'tahun' => clear($_POST['tahun']),
  'volume' => clear($_POST['volume']),
  'nilai' => clear($_POST['nilai']),
];

query_insert('produksi_budidaya', $data);
?>

<div class="container-fluid pt-3">
  <div class="alert alert-success">Data Berhasil Ditambah!</div>
</div>

<?php
direct('crud_2.php', 1000);
?>