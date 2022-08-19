<?php
  ob_start();
  session_start();
  error_reporting();

  include '../assets/database/connection.php';
?>

<html lang="en">
  <head>
    <!-- Copyright @ 2021 Sistem Pakar Pendeteksi Penyakit Menggunakan Metode Forward Chaining -->
    <!-- Meta TAG -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="title" content="Sistem Pakar Pendeteksi Penyakit Menggunakan Metode Forward Chaining" />
    <meta name="description" content="Sistem informasi yang berisi pengetahuan seorang pakar sehingga dapat digunakan untuk konsultasi" />
    <meta name="keywords" content="sistem, pakar, metode, forward, chaining, pendeteksi, penyakit, umum" />
    <!-- Website Title -->
    <title>Lupa Kata Sandi | Sistem Pakar Diagnosa</title>
    <!-- Favicon Website -->
    <link rel="icon" href="../assets/img/icon_website_sistem_pakar-removebg-preview.png" alt="logo" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Sweet Alert 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  </head>
  <body>
<!-- Forgot Start -->
<section class="forgot">
  <div class="content-3-5 d-flex flex-column align-items-center h-110 flex-lg-row">

      <div class="position-relative d-none d-lg-block h-100 width-left">
        <img class="position-absolute img-fluid centered" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png" alt="vector image login" />
      </div>

      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">

        <div class="right mx-lg-0 mx-auto">
            <a href="../index.php">
              <span class="iconify icon mb-4" data-icon="eva:arrow-back-outline" data-width="45"></span>
            </a>
            <div class="align-items-center justify-content-center d-lg-none d-flex">
              <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png" alt="vector image login" />
            </div>
              <h1 class="fw-bold mb-4">Cari</h1>
              <?php
                if (isset ($_GET['message'])) {
                  $message = $_GET['message'];

                  if ($message == 'success') {
                    ?>
                    <script language="Javascript">
                      swal ({
                        title: 'Berhasil Menemukan Akun',
                        text: 'username ditemukan',
                        type: 'success',
                        showConfirmButton: true
                      });
                    </script>
                    <?php
                    $data_user = mysqli_query ($connect, "SELECT * FROM user WHERE username = '$_SESSION[username]'");
                    $user = mysqli_fetch_array ($data_user);
                    echo "<div class='alert alert-success'>
                      <strong>Username : </strong> $user[username]<br>
                      <strong>Password : </strong> $user[password]<br>
                    </div>"; 
                  } else {
                    ?>
                    <script language="Javascript">
                      swal({
                        title: 'Gagal Menemukan Akun',
                        text: 'username tidak ditemukan',
                        type: 'error',
                        showConfirmButton: true
                      });
                    </script>
                    <?php
                  }
                }
              ?>
              <form action="../assets/database/config_forgotPassword.php" method="post">
                <input type="text" class="form-control fs-4 mb-5" placeholder="Username" name="username" autocomplete="off" required />
                <button type="submit" class="btn btn-primary mb-2" value="forgotPassword" style="width: 100%">Cari</button>
                <p>Apakah Anda Ingin Masuk? <a href="./signin.php" style="color: #524EEE">Masuk</a></p>
              </form>

        </div>
      </div>
    </div>

  </section>
  <!-- Forgot End -->

    <!-- Javascript -->
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Icon Iconify -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  </body>
</html>
