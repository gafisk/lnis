<?php
include "../function/koneksi.php";
session_start();
if ($_SESSION['level'] != 'user') {
  header("location:login.php");
}

$take_username = $_SESSION['username'];
// $fetch_data = query("SELECT * FROM user WHERE username = '$username'");
$data = take_data("SELECT * FROM user WHERE username = '$take_username'");
if (isset($_POST['update'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $name = $_POST['nama'];
  $no_telp = $_POST['no_telp'];
  $update = query("UPDATE user SET password='$pass', nama='$name', no_telp='$no_telp' WHERE username='$user'");
  if ($update) {
    header("location:index.php");
  } else {
    echo "Update Data Failed!!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>HALAMAN REGISTER</title>
</head>

<body>
  <section class="vh-100 bg-primary">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-3">Setting Account</h3>

              <form action="" method="POST">
                <div class="form-outline mb-2">
                  <label class="form-label" for="typeEmailX-2">Username</label>
                  <input type="text" value="<?= $data['username'] ?>" name="username" id="username" class="form-control form-control-lg" readonly />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="text" value="<?= $data['password'] ?>" name="password" id="password" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="typePasswordX-2">Nama Lengkap</label>
                  <input type="text" value="<?= $data['nama'] ?>" name="nama" id="nama" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="typePasswordX-2">No Telepon</label>
                  <input type="text" value="<?= $data['no_telp'] ?>" name="no_telp" id="no_telp" class="form-control form-control-lg" />
                </div>

                <a class="btn btn-danger btn-lg btn-block me-3" href="index.php">Kembali</a>
                <button class="btn btn-success btn-lg btn-block ms-3" type="update" name="update" id="update">Ubah Informasi</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>