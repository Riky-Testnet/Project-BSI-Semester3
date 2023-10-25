<?php 
date_default_timezone_set("Asia/bangkok");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Know! Photo Studio</title>
    <!-- css booststrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- END BS -->
    <script
      src="https://kit.fontawesome.com/b382de8daf.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">
        <img
            src="Logo.jpg"
            alt="Logo"
            width="40"
            height="30"
            class="d-inline-block align-text-top"
          />
          Know! Photo Studio</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staff">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#booking">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- Home -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Selamat Datang Di Website Kami,<?= $_POST["username"];?>!</h4>
        <h3 class="display-1">Know! Studio Photo</h3>
        <a href="#layanan">
          <button type="button" class="btn btn-danger btn-lg">
            Cek Layanan
          </button>
        </a>
      </div>
    </div>
    <!-- End Home -->

    <!-- Layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Layanan</h2>
        <p>Know! Studio Photo Menyediakan Layanan Sesuai Kebutuhan Anda</p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"
              ><i
                class="fas fa-camera-retro fa-spin fa-2x"
                style="color: #fa00c4"
              ></i
            ></span>

            <h3 class="mt-3">Self Photo (80K)</h3>
            <p>
              1-5 Orang <br />
              15 menit Foto Session <br />15 Foto Terpilih<br />15 Menit Sesi
              Pilih Foto<br />Cetak Ukuran 5R/Orang
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-spa fa-spin fa-2x" style="color: #ff00d0"></i
            ></span>

            <h3 class="mt-3">Prewedding (1500K)</h3>
            <p>
              40 File Photo & Edit <br />
              2 kostum bawa sendiri <br />2 background<br />2 cetak +Frame
              16Rp<br />3 Cetak +Frame 5R<br />Free Makeup Natural
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-ring fa-spin fa-2x" style="color: #ff00dd"></i
            ></span>

            <h3 class="mt-3">Engangement (2500K)</h3>
            <p>
              1 Album Kolase <br />
              1 menit cinematic Video <br />Flashdisk<br />3 Crew<br />
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Layanan -->

    <!-- Portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portofolio">Portofolio</h2>
        <p>Perlengkapan Dan Hasil dari Know! Photo Studio</p>
        <div class="row pt-4 gx-4 gy-4">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="WP STUDIO.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ruangan Know! Photo Studio</h5>
                  <p>
                    Ruangan yang dimiliki Know! Photo Studio Untuk Pemotretan
                    Customer
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="Hasil Prewedding.jpg"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Hasil Prewedding</h5>
                  <p>Beberapa Customer Kami</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Engagment.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Hasil Engagment Package</h5>
                  <p>Pemotretan Salah satu Customer Kita Yang Bernama Oji</p>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- end Portofolio -->

    <!-- Tentang -->
    <div class="container fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="tentang">Tentang</h2>
        <p class="text-center">
          Sejarang Singkat Tentang Perusahaan Know! Photo Studio
        </p>
        <div class="clearfix pt-5">
          <img
            src="Logo.jpg"
            class="col md-4 float-md-end mb-2 crop-img"
            width="300"
            height="300"
          />
          <p>
            <br /><br /><br /><br /><br />Know! Photo Studio Didirikan Oleh 5
            Pemuda Bina Informatika Pada Tahun 2023<br />
            Bisnis Ini Awalnya Hanya Sebuah Tugas Pada Saat Matkul Web
            Programming Tetapi dengan ada Niatan Serius<br />
            dan Ada Basic Etherpheneurship 5 Pemuda ini memberanikan Untuk
            Membuka Usaha Hingga Saat ini
          </p>
        </div>
      </div>
    </div>
    <!-- End Tentang -->

    <!-- Staff -->
    <div class="container fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staff">Tim Kami</h2>
        <p>Crew Know! Photo Studio</p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img src="syahid.jpeg" class="rounded-circle mb-3" />
            <h4>Syahid Muhammad Ummar</h4>
            <p>Backend Developer And Founder Know! Ps</p>
          </div>

          <div class="col-md-4 text-center tim">
            <img src="Riky.jpeg" class="rounded-circle mb-3" />
            <h4>Riky Mochammad Arif</h4>
            <p>FrontEnd Developer And CEO Know! Ps</p>
          </div>

          <div class="col-md-4 text-center tim">
            <img src="Nadita.jpeg" class="rounded-circle mb-3" />
            <h4>Nadita Sekar Ranti Valerina</h4>
            <p>UI/UX Designer And Editor Know! Ps</p>
          </div>

          <div class="col-md-7 text-center tim">
            <img src="Fida.jpeg" class="rounded-circle mb-3" />
            <h4>Fida Nirmala</h4>
            <p>UI/UX Designer And Marketing Know! Ps</p>
          </div>

          <div class="col-md-3 text-center tim">
            <img src="Fadly.jpg" class="rounded-circle mb-3" />
            <h4>Fadly</h4>
            <p>FullStack Developer And Fotografer Know!Ps</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Staff End -->

    <!-- Booking -->
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="booking">Booking</h2>
        <p class="text-center">Silahkan Memilih Paket Anda</p>
        <div class="row pb-3">
          <div class="col-md-3">
            
            <form class="row g-3" action="proses.php" method="post">
              <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="validationDefault01" value="nama" required>
              </div>
              <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="validationDefault02" value="email" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label"> No Telepon </label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">+62</span>
                  <input type="text" name="no" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal" class="form-control" id="validationDefault03" required>
              </div>
              <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Pilih Paket</label>
                <select class="form-select" name="paket" id="validationCustom04" required>
                  <option selected disabled value="">Pilih Paket</option>
                  <option>Self Photo</option>
                  <option>Prewedding</option>
                  <option>Engagment</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Jam</label>
                <input type="time" name="jam" class="form-control" id="validationDefault05" required>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit" value= <?php echo date("h:i:sa"); ?> >Submit form</button>
              </div>
            </form>
            <div></div>

          </div>
        </div>
      </div>
    </div>
    <!-- booking -->

    <div class="container.fluid text-center pt-5 pb-5 footer" >
      
      Website Created By Kelompok 3 &copy; 2023
    
    </div>



    <!-- JS BOOSTRAP -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- END BS -->
  </body>
</html>
