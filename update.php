<?php 
date_default_timezone_set("Asia/bangkok");
?>
<?php
$koneksi = mysqli_connect("localhost","root","","booking"); 
$id = $_GET['id'];
$data = query("SELECT * FROM booking WHERE id = $id") [0] ;

function query($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }

    return $rows;
}

if (isset($_POST["submit"]) ){
    if (update($_POST) > 0) {
        echo "<script> alert('Data berhasil di ubah'); </script>";
        header('location: hasilBooking.php');
    }
    else{
        echo "<script> alert('Data gagal di ubah'); </script>";
        header('location: hasilBooking.php');
    }
}

function update($sambung){
    global $koneksi;
    $id = $sambung['id'];
    $nama = $sambung['nama'];
    $email = $sambung['email'];
    $no = $sambung['no'];
    $tanggal = $sambung['tanggal'];
    $paket = $sambung['paket'];
    $jam = $sambung['jam'];
    $submit = $sambung['submit'];

    $query = "UPDATE booking SET nama = '$nama', email= '$email', no = '$no', tanggal = '$tanggal', paket = '$paket', jam = '$jam', submit = '$submit' WHERE id = $id";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

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
    </nav>
    <!-- END NAVBAR -->


    <!-- Booking -->
    <br>
    <br>
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="booking">Update Booking</h2>
        <p class="text-center">Silahkan Update Data Diri Anda</p>
        <div class="row pb-3">
          <div class="col-md-3">
            
            <form class="row g-3" action="" method="post">
              <div>
                <input type="hidden" name="id" value="<?php echo $data ["id"]; ?>">
              </div>
              <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="validationDefault01" value="<?php echo $data ["nama"]; ?>" required>
              </div>
              <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="validationDefault02" value="<?php echo $data ["email"]; ?>" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label"> No Telepon </label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">+62</span>
                  <input type="text" name="no" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="<?php echo $data ["no"]; ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal" class="form-control" id="validationDefault03" value="<?php echo $data ["tanggal"]; ?>">
              </div>
              <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Pilih Paket</label>
                <select class="form-select" name="paket" id="validationCustom04"  required>
                  <option selected disabled value="">Pilih Paket</option>
                  <option value="SelfPhoto"<?php if($data ["paket"] ==  'Self Photo') echo 'selected'; ?>>Self Photo</option>
                  <option value="Prewedding"<?php if($data ["paket"] ==  'Prewedding') echo 'selected'; ?>>Prewedding</option>
                  <option value="Engagment"<?php if($data ["paket"] ==  'Engagment') echo 'selected'; ?>>Engagment</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Jam</label>
                <input type="time" name="jam" class="form-control" id="validationDefault05" value="<?php echo $data ["jam"]; ?>" required>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit" value= <?php echo date("h:i:sa"); ?> >Submit form</button>
              </div>
            </form>
            <br>
            <a href="hasilBooking.php" class="btn btn-primary" > Jadwal Booking </a>
            <div></div>

          </div>
        </div>
      </div>
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