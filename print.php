<?php 
$koneksi = mysqli_connect("localhost", "root", "", "booking");

require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$id = $_GET['id'];
$sql_pendaftar = "SELECT * FROM booking WHERE id = '$id'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);
$data_pendaftar = mysqli_fetch_array($result_pendaftar);

$html = '<style>
table, th, td{
    font-size: 12px;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}
</style>

<div style="margin-left: 20px">
    <div style="font-size; 18 px" > KNOW PHOTO STUDIO </div>
</div>

<hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">

<div style="font-size: 12px; margin-left: 10px;">Tanggal Cetak: '. date("d-m-Y") .'</div>

<h3> Data Booking </h3>

<table width="100%">
    <tr>
        <td > Nama </td>
        <td> : </td>
        <td >'.$data_pendaftar['nama'].'</td>
    </tr>
    <tr>
        <td> Email </td>
        <td> : </td>
        <td>'.$data_pendaftar['email'].'</td>
    </tr>
    <tr>
        <td> No Telepon </td>
        <td> : </td>
        <td>'.$data_pendaftar['no'].'</td>
    </tr>
    <tr>
        <td> Tanggal Booking </td>
        <td> : </td>
        <td> '.$data_pendaftar['tanggal'].' </td>
    </tr>
    <tr>
        <td> Pilih Paket </td>
        <td> : </td>
        <td> '.$data_pendaftar['paket'].' </td>
    </tr>
    <tr>
        <td> Jam </td>
        <td> : </td>
        <td> '.$data_pendaftar['jam'].'</td>
    </tr>
</table>

';


$dompdf->loadHTML($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("Data Booking.pdf", array("Attachment"=>0));

?>

