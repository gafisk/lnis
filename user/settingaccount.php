<?php
include "../function/koneksi.php";
session_start();
if ($_SESSION['level'] != 'user') {
  header("location:login.php");
}

$take_username = $_SESSION['username'];
// $fetch_data = query("SELECT * FROM user WHERE username = '$username'");
$data = take_data("SELECT * FROM user WHERE username = '$take_username'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cssku.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>HALAMAN REGISTER</title>
</head>

<body>
  <section class=" bg-primary">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-3">My Account</h3>              

              <form action="" method="POST" enctype="multipart/form-data">
                <div class="upload">
                  <img class="img-thumbnail" style="height:125px; width:125px;" src="../assets/images/users/<?= $data['gambar'] ?>">
                </div>
              
                <div class="form-outline mb-2">
                  <label class="form-label">Username</label>
                  <label class="form-control form-control-lg"><?= $data['username'] ?></label>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label">Password</label>
                  <label class="form-control form-control-lg"><?= $data['password'] ?></label>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label">Nama Lengkap</label>
                  <label class="form-control form-control-lg"><?= $data['nama'] ?></label>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label">No Telepon</label>
                  <label class="form-control form-control-lg"><?= $data['no_telp'] ?></label>
                </div>

                <a class="btn btn-danger btn-lg btn-block me-3" href="index.php">Kembali</a>
                <a class="btn btn-secondary btn-lg btn-block me-3" href="edit_profil.php">Edit Profil</a>
                <!-- <button class="btn btn-success btn-lg btn-block ms-3" type="update" name="update" id="update">Ubah Informasi</button> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>