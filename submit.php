<?php

include "sql.php";

$nama_barang = $_POST ['nama_barang'];
$jenis_barang = $_POST ['jenis_barang'];
$serial_number = $_POST ['serial_number'];
$nomor_handphone = $_POST['nomor_handphone'];
$tujuan_peminjaman = $_POST['tujuan_peminjaman'];
$atasan = $_POST['atasan'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$file = $_POST['file'];
$status = $_POST['status'];

$query = "INSERT INTO formulir VALUES('','". $nama_barang ."','". $jenis_barang ."','". $serial_number ."','". $nomor_handphone ."','". $tujuan_peminjaman ."','". $atasan ."','". $tanggal_pinjam ."','". $tanggal_kembali ."','". $file ."','". $status ."')";
$sql = mysqli_query($connect, $query);


header("location: send.html");

if(isset($_POST["submit"])) {

    $target_dir = "file/";
    $target_file = $_FILES["file"]["name"];
    
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$target_file);
    
    mysqli_query($connect, "INSERT into formulir set file='$target_file'");
    
    }

?>

