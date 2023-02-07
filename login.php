<?php

session_start();
include "sql.php";

$email = $_POST['email'];
$password = $_POST['password'];


$query = mysqli_query($connect, "SELECT * FROM user WHERE email='$email' AND password='$password'");
$jml = mysqli_num_rows($query);

if($jml > 0 ){

    $data = mysqli_fetch_assoc($query);

// cek jika user login sebagai admin
if($data['level']=="Admin"){
	// buat session login dan username
	$_SESSION['email'] = $email;
	$_SESSION['level'] = "Admin";
	// alihkan ke halaman dashboard admin
	header("location: dashboard_admin.php");
 
// cek jika user login sebagai pegawai
}else if($data['level']=="User"){
	// buat session login dan username
	$_SESSION['email'] = $email;	
	$_SESSION['level'] = "User";
	// alihkan ke halaman dashboard pegawai
	include(__DIR__ .'/dashboard_user.php');
	// header("location: dashboard_user.php");
}else{
	// alihkan ke halaman login kembali
	header("location:index.php?pesan=gagal");
}	
}else{
	echo '<script language="javascript">';
        echo 'alert("CHECK EMAIL OR PASSWORD");';
        echo 'window.location = "index.php"';
        echo '</script>';

}
?>