<?php
  ob_start();
  session_start();
  error_reporting();

  include '../assets/database/connection.php';
?>

<?php
  $data_user = mysqli_query ($connect, "SELECT * FROM user WHERE id_user = '$_SESSION[id_user]'");
  $user = mysqli_fetch_array ($data_user);
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
    <meta name="googlebot" content="noindex" />
    <!-- Website Title -->
    <title>Dashboard | Sistem Pakar Diagnosa</title>
    <!-- Favicon Website -->
    <link rel="icon" href="../assets/img/icon_website_sistem_pakar-removebg-preview.png" alt="logo" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Slick JS -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- jQuery idle -->
    <script type="text/javascript" src="../assets/js/jquery.idle.js"></script>
    <script>
    $(document).idle({
        onIdle: function(){
            window.location="../assets/database/config_signout.php";                
        },
        idle: 200000
    });
    </script>
  </head>
  <body>
    <!-- Dashboard Start -->
    <section class="dashboard">
      <!-- Sidebar Start -->
      <div class="sidebar bg-white">
        <div class="container p-3">
        <img style="margin-right:0.75rem" src="../assets/img/logo_website_sistem_pakar-removebg-preview.png" width="170" height="80" alt="Logo Website Sistem Pakar">
          <div class="mb-3">
            <p class="fw-bold fs-5">Sistem</p>
            <a href="../dashboard/dashboard.php" class="active"><span class="iconify icon me-2" data-icon="carbon:dashboard-reference" data-width="45"></span>Dashboard</a>
          </div>
          <div class="mb-3">
            <p class="fw-bold fs-5">Menu</p>
            <a href="../data_penyakit/data_penyakit.php"><span class="iconify icon me-2" data-icon="ic:baseline-psychology-alt" data-width="45"></span> Data Penyakit</a>
            <a href="../data_gejala/data_gejala.php"><span class="iconify icon me-2" data-icon="healthicons:symptom" data-width="45"></span>Data Gejala</a>
            <a href="../basis_pengetahuan/basis_pengetahuan.php"><span class="iconify icon me-2" data-icon="ion:information-circle-outline" data-width="45"></span>Basis Informasi</a>
            <a href="../aturan/aturan.php"><span class="iconify icon me-2" data-icon="carbon:rule-data-quality" data-width="45"></span>Aturan</a>
            <a href="../diagnosa/diagnosa.php"><span class="iconify icon me-2" data-icon="fontisto:doctor" data-width="45" data-height="45"></span>Diagnosa</a>
          </div>
          <div class="mb-3">
            <p class="fw-bold fs-5">Pengaturan</p>
            <a href="profile.php"><span class="iconify icon me-2" data-icon="healthicons:ui-user-profile" data-width="45"></span>Profil</a>
            <a href="../assets/database/config_signout.php"><span class="iconify icon me-2" data-icon="cil:account-logout" data-width="45"></span>Keluar</a>
          </div>
        </div>
      </div>
      <!-- Sidebar End -->
      <!-- Main Start -->
      <main>
        <div class="container ps-4 pe-4 pt-2 pb-2">
          <!-- Navbar Start -->
          <nav class="navbar navbar-light">
            <div class="navbar-brand">
              <img src="../assets/img/icon_website_sistem_pakar-removebg-preview.png" alt="logo_only" loading="lazy" />
            </div>
            <div class="navbar-text fw-bold fs-5">Dashboard</div>
            <div class="navbar-nav ms-auto d-inline">
              <a class="btn btn-primary fw-bold me-2"><?php echo $user['role']; ?></a>
              <div class="dropdown d-inline">
                <a href="#" class="photo-profile" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/img/pp.png" alt="pp" loading="lazy" />
                </a>
                <ul class="dropdown-menu position-absolute" aria-labelledby="dropdownProfile">
                  <li>
                    <a href="../dashboard/profile.php" class="dropdown-item"><span class="iconify icon me-2" data-icon="healthicons:ui-user-profile" data-width="35"></span>Profile</a>
                  </li>
                  <li>
                    <a href="../assets/database/config_signout.php" class="dropdown-item"><span class="iconify icon me-2" data-icon="cil:account-logout" data-width="35"></span>Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Navbar End -->
          <div class="row mt-4">
            <div class="col-sm-8">
              <div class="alert alert-warning p-2"><span class="iconify me-2" data-icon="ri:mental-health-fill" data-width="25"></span>Jaga Kesehatan Tubuh dan Psikologi Anda!</div>
              <div class="diagnosa p-4 text-white">
                <h5>
                  Mulai Diagnosa <br />
                  Jika Anda Memiliki Keluhan
                </h5>
                <a href="../diagnosa/diagnosa.php" class="btn btn-secondary mt-2">Mulai Diagnosa</a>
              </div>
              <div class="mb-3 mt-3">
                <h5 class="fw-bold mb-3">Penyakit</h5>
                <div class="penyakit bg-white p-1">
                    <div class="penyakit bg-white p-1">
                  <?php
                    $query = mysqli_query ($connect, "SELECT * FROM penyakit") or die (mysqli_error ($connect));
                    while ($penyakit = mysqli_fetch_array ($query)) {
                  ?>
                  <div class="m-2">
                    <span class="iconify icon me-2" data-icon="fa-solid:disease" data-width="45"></span> 
                    <h5 class="d-inline text-capitalize"><?php echo $penyakit['nama_penyakit']; ?></h5>
                  </div>
                  <?php } ?>
                </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Selamat Datang!</strong><br /> Halo <?php echo $user['nama']; ?><span class="iconify ms-2" data-icon="mdi:human-greeting-variant" data-width="20"></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <h5 class="fw-bold mb-3">Lainnya</h5>
              <div class="lainnya bg-white p-3 mb-3">
                <a href="../basis_pengetahuan/basis_pengetahuan.php">
                  <span class="iconify icon" data-icon="ion:information-circle-outline" data-width="45"></span>
                  <h5 class="mt-2">Basis Informasi</h5>
                  <p>Hubungan antara penyakit dan gejala</p>
                </a>
              </div>
              <div class="lainnya bg-white p-3">
                <a href="../aturan/aturan.php">
                  <span class="iconify icon" data-icon="carbon:rule-data-quality" data-width="45"></span>
                  <h5 class="mt-2">Aturan</h5>
                  <p>Aturan untuk menentukan diagnosa</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- Main End -->
      <!-- Navigations Start -->
      <div class="navigations text-center">
        <a href="../data_penyakit/data_penyakit.php">
          <span class="iconify icon-nav" data-icon="ic:baseline-psychology-alt" data-width="25"></span>
          <p>Penyakit</p>
        </a>
        <a href="../data_gejala/data_gejala.php">
          <span class="iconify icon-nav" data-icon="healthicons:symptom" data-width="25"></span>
          <p>Gejala</p>
        </a>
        <div class="icon-home p-3 tex-center">
          <a href="../dashboard/dashboard.php">
            <span class="iconify" data-icon="bytesize:home" style="color: white" data-width="30"></span>
          </a>
        </div>
        <a href="../basis_pengetahuan/basis_pengetahuan.php">
          <span class="iconify icon-nav" data-icon="ion:information-circle-outline" data-width="25"></span>
          <p>Informasi</p>
        </a>
        <a href="../aturan/aturan.php">
          <span class="iconify icon-nav" data-icon="carbon:rule-data-quality" data-width="25"></span>
          <p>Aturan</p>
        </a>
      </div>
      <!-- Navigations End -->
    </section>
    <!-- Dashboard End -->

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
