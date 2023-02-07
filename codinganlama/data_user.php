<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
*, html, body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-color: ghostwhite;
}

div.container{
    display: grid;
    grid-template-columns: 0.5fr 3fr;
    grid-template-areas: 
    'navbar navbar navbar'
    'wrapper content content';
    font-family: inter;
}

div.nav{
    grid-area: navbar;  
    background-color: #0580c5;  
}

nav{
    align-items: center;
    display: flex;
    padding: 10px;
    justify-content: space-between;
}

nav h3{
    font-size: 1em; 
    color: white;
    text-transform: uppercase; 
}

nav img.logo{
    width: 50px;
    margin-left: 105px;
}

nav div.user{
    display: flex;
    align-items: center;
}

div.user a{
    color: white;
    font-size: 12px;
    padding: 10px;
    text-decoration: none;
}

div.user a:hover{
    font-weight: bolder;
}

div.user img{
    width: 20px;
}

div.wrapper{
    grid-area: wrapper;

    display: flex;
    flex-direction: column;
    background-color: white;
    box-shadow: 0 0 1px black;
}

div.wrapper h2{
    padding: 100px;
    font-family: inter;
    letter-spacing: 1px;
    font-size: 1.4em;
    padding: 10px;
    color: black;
    text-align: center;
}

div.wrapper a{
    transition: all 1s ease-in-out;
    text-align: center;
    padding: 20px;
    font-size: 12px;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: black;
    box-shadow: 0 0 1px black;
}

div.wrapper a.now{
    background-color: #0580c5;
    color: white;
}

div.wrapper a:hover{
    background-color: #0580c5;
    color: ghostwhite;
    transform: scale(1.01);
}

div.content{
    align-items: center;
    grid-area: content;
    display: flex;
    width: 100%;
    height: 100vh;  
    text-align: center;
    padding: 20px;
}

div.table{
    display: flex;
    width: 100%;  
    height: 90vh;  
    flex-direction: column;
}

table{
    box-shadow: 0 3px 5px gray;
}

table tr{
}

table th{
    background-color: #0580c5;
    border-bottom: 2px solid gray;
    box-shadow: 0 10px 0 gray;
    padding: 10px; 
    color: ghostwhite;
}

table td{
    color: black;
    background-color: white;
    padding: 10px;
    border-bottom: 2px solid gray;
}

table td a{
    text-decoration: none;
    color: black;
}

::placeholder{
    font-family: inter;
}


@font-face {
    font-family: inter;
    src: url(asset/inter.ttf);
}

::-webkit-scrollbar{
    display: none;
}
    </style>
</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location: index.php?pesan=gagal");
	}
 
	?>
    <div class="container">
        <div class="nav">
            <nav>
                <img class="logo" src="asset/sucofindo_white.png" alt="">
                <h3>Aplikasi Web Sistem Informasi Peminjaman Barang Sucofindo Batam</h3>
                <div class="user">
                    <img src="asset/user.png">
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
        </div>
        <div class="wrapper">
            <h2>Dashboard</h2>
            <a href="dashboard_admin.php">Beranda</a>
            <a href="data_peminjaman.php">Data Peminjaman</a>
            <a href="data_user.php" class="now">Data User</a>
        </div>
        <div class="content">
            <div class="table">
                <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>No.</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>NPP</th>
                    <th>Bidang/Divisi</th>
                    <th colspan="2">Action</th>
                </tr>

                <?php

                include "sql.php";

                $query = "SELECT * FROM user";
                $sql = mysqli_query($connect, $query);

                while ($data = mysqli_fetch_array ($sql)){

                    echo "<tr>";
                    echo "<td>" . $data['nomor'] . "</td>";
                    echo "<td>" . $data['email'] . "</td>";
                    echo "<td>" . $data['username'] . "</td>";
                    echo "<td>" . $data['npp'] . "</td>";
                    echo "<td>" . $data['bidang'] . "</td>";

                    echo "<td><a href ='edit_user.php?nomor=" . $data['nomor'] . "'>Edit</a></td>";
                    echo "<td><a href ='delete_user.php?nomor=" . $data['nomor'] . "'>Delete</a></td>";
                    echo "<tr>";
                }
?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>