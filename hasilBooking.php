<?php
$koneksi = mysqli_connect("localhost", "root", "", "booking");
$statistik = query("SELECT * FROM booking");

function query($data)
{
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }

    return $rows;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal Booking</title>

    <!-- Css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!-- Css End -->
  </head>

  <body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="Logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Know! Photo Studio
    </a>
  </div>
  </nav>

  <br>
  
  <h3 class="text-center">Jadwal Booking</h3>

  <div class="table-responsive">
    <table class="table table-dark">
      <thead>
        <tr>
          <th> No</th>
          <th> Nama </th>
          <th> E-mail</th>
          <th> No </th>
          <th> Tanggal </th>
          <th> Paket </th>
          <th> Jam </th>
          <th colspan= 2>Tindakan</th>
        </tr>
      </thead>
  
     <tbody>
      <?php  $y = 1; ?>
      <?php  foreach ($statistik as $data) :?>
        <tr>
          <td><?php echo $y; ?></td>
          <td><?php echo $data ["nama"]; ?></td>
          <td><?php echo $data ["email"]; ?></td>
          <td><?php echo $data ["no"]; ?></td>
          <td><?php echo $data ["tanggal"]; ?></td>
          <td><?php echo $data ["paket"]; ?></td>
          <td><?php echo $data ["jam"]; ?></td>
          <td class="btn btn-primary"> <a href="update.php?id=<?php echo $data["id"]; ?>" style="text-decoration: none;" > Update </a> </td>
          <td class="btn btn-primary"> <a href="delete.php?id=<?php echo $data["id"]; ?>" style="text-decoration: none;" > Hapus </a>  </td>
          <td class="btn btn-primary"> <a href="print.php?id=<?php echo $data["id"]; ?>" style="text-decoration: none;"> Print </a> </td>
        </tr>
      <?php $y++; ?>
      <?php endforeach; ?>
      </tbody>
    </table>
    
    <ul>
      <a href="index.php" class="btn btn-primary"> Input Kembali </a>
    </ul>

    
  </div>

  <!-- JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  <!-- Js End -->
  </body>
</html>
