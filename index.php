<?php
  ob_start();
  session_start();
  error_reporting();

  include './assets/database/connection.php';
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
    <title>Sistem Pakar Diagnosa</title>
    <!-- Favicon Website -->
    <link rel="icon" href="./assets/img/icon_website_sistem_pakar-removebg-preview.png" alt="logo" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
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
                title: 'Berhasil!',
                text: 'Pesan anda berhasil dikirim',
                type: 'success',
                showConfirmButton: true
              }).then(function() {
                window.location = "index.php";
              });
          </script>

          <?php
        } else {
          ?>
          <script language="Javascript">
              swal({
                title: 'Gagal!',
                text: 'Coba ulangi beberapa saat lagi',
                type: 'error',
                showConfirmButton: true
              }).then(function() {
                window.location = "index.php";
              });
          </script>
          <?php
        }
      }
    ?>

<section class="h-100 w-100" id="header" style="box-sizing: border-box; background-color: #78A6C8">

<!-- Navigation Bar -->
<div class="container-xxl mx-auto p-0  position-relative header-2-3">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="">
            <img style="margin-right:0.75rem" src="./assets/img/logo_website_sistem_pakar-removebg-preview.png" width="170" height="80" alt="Logo Website Sistem Pakar">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content border-0" style="background-color: #326789;">
                    <div class="modal-header border-0" style="padding:	2rem; padding-bottom: 0;">
                        <a class="modal-title" id="targetModalLabel">
                            <img style="margin-top:0.5rem" src="./assets/img/logo_website_sistem_pakar-removebg-preview.png" width="140" height="70" alt="Logo Website Sistem Pakar">
                        </a>
                        <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                        <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style="color: #232324;">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#contact">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="panduan.php">Panduan</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="modal-footer border-0 gap-3" style="padding:	2rem; padding-top: 0.75rem">
                    <a href="./signup/signup.php" class="btn btn-fill border-0 text-dark">Daftar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #E7E7E8;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panduan.php">Panduan</a>
                </li>
            </ul>

            <div class="gap-3">
            <a href="./signup/signup.php" class="btn btn-fill text-white border-0">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Left Column -->
            <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                <h1 class="title-text-big">Diagnosakan<br class=" d-lg-block d-none"> keluhan yang anda alami pada kami</h1>
            </div>

        <!-- Right Column -->
            <div class="right-column text-center d-flex justify-content-center pe-0">
                <img id="img-fluid" class="h-auto mw-100" src="./assets/img/vector-image-doctor.png" alt="vector image doctor">
            </div>
        </div>
    </div>
</div>

</section>

<section class="h-150 w-100" id="about" style="box-sizing: border-box; background-color: #ffffff; ">
    
    <div class="content-2-3 container-xxl mx-auto p-0  position-relative">
        <div class="text-center title-text">
            <h1 class="text-title text-dark">Cari Tahu Gangguan Psikologi Berdasarkan Gejalamu</h1>
            <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">Anda dapat dengan mudah mengetahui gangguan psikologi dari keluhan yang anda alami</p>
        </div>

        <div class="grid-padding text-center">
            <div class="row">
                <div class="col-lg-4 column">
                    <span class="iconify icon mb-2" data-icon="line-md:account-add" data-width="45"></span>
                    <h4 class="fw-bold text-dark">Daftar Akun</h4>
                    <p>Klik tombol daftar, kemudian <br/> isi biodata anda dengan lengkap dan benar</p>
                </div>

                <div class="col-lg-4 column">
                    <span class="iconify icon mb-2" data-icon="akar-icons:chat-question" data-width="45"></span>
                    <h4 class="fw-bold text-dark">Mulai Diagnosa</h3>
                    <p>Mulai diagnosa dengan menjawab pertanyaan <br/> terkait gejala sesuai keluhan yang anda alami</p> 
                </div>

                <div class="col-lg-4 column">
                    <span class="iconify icon mb-2" data-icon="carbon:report" data-width="45"></span>
                    <h4 class="fw-bold text-dark">Hasil Diagnosa</h4>
                    <p>Hasil dan solusi dari diagnosa akan <br/> tampil sesuai pertanyaan yang anda jawab</p>
                </div>

            </div>
        </div>
    </div>

    <section class="famouly-brands-darken" style="background-color: #ffffff;">
    
    <div class="container">
        <div class="row brand d-flex flex-lg-row flex-column align-items-center">
            <div class="col-md-3 col-6 text-center my-md-auto">
              <img src="./assets/img/logo php.png" alt="PHP Logo" class="img-fluid">
            </div>

            <div class="col-md-3 col-6 text-center my-md-auto">
                <img src="./assets/img/logo mysql.png" alt="MySql Logo" class="img-fluid">
            </div>

            <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
                <img src="./assets/img/logo bootstrap.png" alt="Bootstrap Logo" class="img-fluid">
            </div>

            <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
                <img src="./assets/img/logo Alodokter.png" alt="Alodokter Logo" class="img-fluid">
            </div>
        </div>
    </div>

</section>
    
</section>

<!-- Try Start -->
<section class="try">
      <div class="container pt-5 pb-5">
        <div class="box col-12 p-5">
          <h1>
          Untuk Mencoba Diagnosa <br />
          Silahkan Masuk
          </h1>
          <a href="./signin/signin.php" class="btn btn-secondary mt-3">Masuk</a>
        </div>
      </div>
    </section>
    <!-- Try End -->

    <!-- Footer Start -->
    <footer class="footer">
      
    <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-sm-4">
            <a href="https://www.google.com/maps/@-6.914048,107.6232192,11z" target="_blank">
              <img class="maps" src="./assets/img/maps.png" alt="maps" loading="lazy" />
            </a>
            <div class="social-media mt-4 mb-3 mb-lg-0">
            <a  href="https://www.linkedin.com/in/dean-alif-ahmad-bb6a9a1aa/"><span class="iconify me-2" data-icon="akar-icons:linkedin-fill" data-width="30"></span></a>
              <a  href="https://www.instagram.com/deanalifahmad/?hl=en"><span class="iconify me-2" data-icon="ant-design:instagram-filled" data-width="30"></span></a>
              <a  href="https://github.com/deanalifahmad"><span class="iconify" data-icon="akar-icons:github-fill" data-width="30"></span></a>
            </div>
          </div>

          <div class="col-sm-4">
            <h5>Sumber Data dan Informasi</h5>
            <ul>
              <li><a href="https://www.alodokter.com/">Alodokter</a></li>
            </ul>
          </div>

          <div class="col-sm-4" id="contact">
            <h5>Hubungi Kami</h5>
            <form action="./assets/database/config_addKontak.php" method="post">
              <?php
                $query = mysqli_query ($connect, "SELECT max(kode_kontak) AS maxId FROM kontak");
                $data = mysqli_fetch_array ($query);
                $kodeKontak = $data['maxId'];

                $no = (int) substr ($kodeKontak, 1, 3);
                $no++;
                $code = "K";

                $kodeKontak = $code . sprintf ("%03s", $no);
              ?>
              <input type="hidden" value="<?php echo $kodeKontak; ?>" name="kode_kontak">
              <input type="text" class="form-control mb-2 mt-4" placeholder="Nama..." name="nama" autocomplete="off" required />
              <input type="email" class="form-control mb-2" placeholder="Email..." name="email" autocomplete="off" required />
              <textarea type="text" class="form-control mb-4" placeholder="Tulis Pesan..." name="subject" autocomplete="off" required></textarea>
              <button type="submit" class="btn btn-primary float-end" value="add">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <p class="p-2 text-center">Copyright <span class="iconify-inline" data-icon="ant-design:copyright-circle-outlined" data-width="15"></span> 2022 Sistem Pakar Diagnosa</p>

    </footer>
    <!-- Footer End -->

    <!-- Javascript -->
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Icon Iconify -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  </body>
</html>
