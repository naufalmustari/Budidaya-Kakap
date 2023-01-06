<?php require 'header.php';
?>

<?php
$success = false;

if (isset($_POST['daftar'])) {
  require 'db.php';
  $username = clear($_POST['username']);
  $password = clear($_POST['password']);

  query_insert('users', ['id' => '', 'username' => $username, 'password' => $password]);
  $success = true;
}
?>

<div class="container-fluid mt-5 pt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card border-0 shadow p-4">
        <div class="text-center mb-4">
          <h4>Daftar Akun</h4>
        </div>
        <?php if ($success) : ?>
          <div class="alert alert-success">
            Daftar berhasil
          </div>
        <?php endif; ?>
        <form action="" method="POST">
          <input type="text" name="username" class="form-control text-center mb-3" placeholder="Username">
          <input type="password" name="password" class="form-control text-center mb-3" placeholder="Password">
          <button type="submit" name="daftar" class="btn btn-block btn-info">Daftar</button>
        </form>

        <div class="text-center mt-3">
          <small>Sudah punya akun? <a href="login.php" class="text-info">login</a></small>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if ($success) : ?>
  <?php
  direct('login.php', 2000);
  ?>
<?php endif; ?>

<?php require 'footer.php'; ?>