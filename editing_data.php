<?php

include "sql.php";

$nomor = $_POST ['nomor'];
$nama_barang = $_POST ['nama_barang'];
$jenis_barang = $_POST ['jenis_barang'];
$serial_number = $_POST ['serial_number'];
$nomor_handphone = $_POST['nomor_handphone'];
$tujuan_peminjaman = $_POST['tujuan_peminjaman'];
$atasan = $_POST['atasan'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$status = $_POST['status'];

$query = "UPDATE formulir SET nomor='$nomor', nama_barang='$nama_barang', jenis_barang='$jenis_barang', serial_number='$serial_number', nomor_handphone='$nomor_handphone', tujuan_peminjaman='$tujuan_peminjaman', atasan='$atasan', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali', status='$status' where nomor='$nomor'";
mysqli_query($connect, $query);

header ("location: data_peminjaman.php");

?>