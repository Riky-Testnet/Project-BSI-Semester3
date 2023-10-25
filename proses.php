<?php
$koneksi =  mysqli_connect("localhost", "root", "", "booking");

$nama = $_POST['nama'];
$email = $_POST['email'];
$no = $_POST['no'];
$tanggal = $_POST['tanggal'];
$paket = $_POST['paket'];
$jam = $_POST['jam'];
$submit = $_POST['submit'];


$query = "INSERT INTO booking VALUES('$nama','$email','$no','$tanggal','$paket','$jam','$submit')";

mysqli_query($koneksi, $query)
?>