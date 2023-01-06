<?php

$id = $_GET['id'];
require 'db.php';
query_delete('produksi_budidaya', "id = '$id'");
?>
<?php require 'header.php'; ?>

<div class="container-fluid pt-3">
  <div class="alert alert-success">Data Berhasil Dihapus!</div>
</div>

<?php
direct('crud_2.php');
?>