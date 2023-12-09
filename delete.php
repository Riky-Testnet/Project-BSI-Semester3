<?php
$id = $_GET['id'];

$koneksi = mysqli_connect("localhost", "root", "", "booking");

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM booking where id = $id");

  return mysqli_affected_rows($koneksi);
}

if ( hapus($id) > 0 ){
  echo
  "<script>
  alert('Data berhasil dihapus');
  document.location.href = 'hasilBooking.php';
  </script>";
}
else{
  echo
  "<script>
  alert('Data gagal dihapus');
  document.location.href = 'hasilBooking.php';
  </script>";
}
?>