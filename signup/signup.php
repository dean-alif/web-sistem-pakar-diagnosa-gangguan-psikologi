<?php
  ob_start();
  session_start();
  error_reporting();

  include '../assets/database/connection.php';
?>

<html lang="en">
  <head>
    <!-- Meta TAG -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="title" content="Sistem Pakar Pendeteksi Penyakit Menggunakan Metode Forward Chaining" />
    <meta name="description" content="Sistem informasi yang berisi pengetahuan seorang pakar sehingga dapat digunakan untuk konsultasi" />
    <meta name="keywords" content="sistem, pakar, metode, forward, chaining, pendeteksi, penyakit, umum" />
    <!-- Website Title -->
    <title>Daftar | Sistem Pakar Diagnosa</title>
    <!-- Favicon Website -->
    <link rel="icon" href="../assets/img/icon_website_sistem_pakar-removebg-preview.png" alt="logo" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <meta name="googlebot" content="noindex" />
    <!-- Sweet Alert 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  </head>
  <body>
    <?php
      if (isset ($_GET['message'])) {
        $message = $_GET['message'];
        if ($message == 'success') {
          ?>
          <script language="Javascript">
              swal({
                title: 'Berhasil',
                text: 'Akun anda berhasil dibuat!',
                type: 'success',
                showConfirmButton: true
              }).then(function() {
                window.location = "../signin/signin.php";
              });
          </script>
          <?php
        } else {
          ?>
          <script language="Javascript">
              swal({
                title: 'Gagal',
                text: 'Coba lagi dalam beberapa saat',
                type: 'error',
                showConfirmButton: true
              }).then(function() {
                window.location = "../signup/signup.php";
              });
          </script>
          <?php
        }
      }
    ?>

    <!-- Signup Start -->
    <section class="signup">
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
              <h1 class="fw-bold mb-4">Daftar</h1>
              <form action="../assets/database/config_signup.php" method="post">
                <?php
                  $query = mysqli_query ($connect, "SELECT max(id_user) AS maxId FROM user");
                  $data = mysqli_fetch_array ($query);
                  $idUser = $data['maxId'];

                  $no = (int) substr ($idUser, 3, 3);
                  $no++;
                  $code = "SPK";

                  $idUser = $code . sprintf ("%03s", $no)
                ?>
                <div class="line">
                  <span class="badge ms-3">Profil</span>
                  <input type="hidden" name="id_user" value="<?php echo $idUser; ?>">
                  <input type="text" class="form-control fs-4 mb-3 mt-4" placeholder="Nama" name="nama" autocomplete="off" required style="text-transform: capitalize;" />
                  <input type="text" class="form-control fs-4 mb-3" placeholder="Alamat" name="alamat" autocomplete="off" required />
                  <input type="number" class="form-control fs-4 mb-4" placeholder="No Telepon" name="no_telepon" autocomplete="off" required />
                </div>
                <div class="line">
                  <span class="badge ms-3">Akun</span>
                  <div class="row mb-3">
                    <div class="col">
                      <input type="text" class="form-control fs-4 mt-4" placeholder="<?php echo $idUser; ?>" disabled />
                    </div>
                    <div class="col">
                      <select class="form-select fs-4 mt-4" name="role">
                        <option value="user" selected>User</option>
                      </select>
                    </div>
                  </div>
                  <input type="text" class="form-control fs-4 mb-3" placeholder="Username" name="username" autocomplete="off" required />
                  <div class="input-group mb-5">
                    <input type="password" class="form-control fs-4 border-end-0" placeholder="Password" name="password" id="myPassword" autocomplete="off" required />
                    <div class="input-group-text border-start-0 bg-transparent" onclick="showPassword()">
                      <span class="iconify" data-icon="akar-icons:eye-closed" data-width="25"></span>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2" style="width: 100%" value="signup">Daftar</button>
                  <p>Sudah Punya Akun? <a href="../signin/signin.php" style="color: #524EEE">Masuk</a></p>
                </div>
              </form>

          </div>
        </div>
      </div>
    </section>
    <!-- Signup End -->

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
