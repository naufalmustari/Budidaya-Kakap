<?php require 'header.php';
?>

<?php
$success = false;
$error = false;

if (isset($_POST['login'])) {
  require 'db.php';
  $username = clear($_POST['username']);
  $password = clear($_POST['password']);

  $cek = query_select('users', "username = '$username' AND password = '$password'");

  if (count($cek) > 0) {
    $success = true;
    session_start();
    $_SESSION['login'] = true;
  } else {
    $error = true;
  }
  // $success = true;
}
?>

<div class="container-fluid mt-5 pt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card border-0 shadow p-4">
        <div class="text-center mb-4">
          <h4>Login Web</h4>
        </div>
        <?php if ($success) : ?>
          <div class="alert alert-success">
            Login berhasil
          </div>
        <?php endif; ?>
        <?php if ($error) : ?>
          <div class="alert alert-danger">
            Login Gagal
          </div>
        <?php endif; ?>
        <form action="" method="POST">
          <input type="text" name="username" class="form-control text-center mb-3" placeholder="Username">
          <input type="password" name="password" class="form-control text-center mb-3" placeholder="Password">
          <button type="submit" name="login" class="btn btn-block btn-info">Login</button>
        </form>

        <div class="text-center mt-3">
          <small>Belum punya akun? <a href="daftar.php" class="text-info">daftar</a></small>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if ($success) : ?>
  <?php
  direct('index.php', 2000);
  ?>
<?php endif; ?>

<?php require 'footer.php'; ?>