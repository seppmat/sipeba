<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashb.css">
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
    font-family: louis;
}

div.nav{
    width: 100%;
    height: auto;
    grid-area: navbar;  
    background-color: #0580c5;  
}

nav{
    width: 100%;
    align-items: center;
    display: flex;
    padding: 10px;
    justify-content: space-between;
}

nav h3{
    font-size: 1em; 
    text-transform: uppercase;
    color: white;
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
    height: 100vh;
    display: flex;
    flex-direction: column;
    background-color: white;
    box-shadow: 0 0 1px black;
}

div.wrapper h2{
    padding: 100px;
    font-family: louis;
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
    color: gray;
    grid-area: content;
    display: flex;
    width: 100%;
    padding: 40px;
    flex-direction: column;
}

div.content h3{
    margin-bottom: 40px;
    margin-top: 40px;
}

div.content h2{
    color: black;
    font-size: 2em;
    text-transform: uppercase;
}

div.card,
div.card1,
div.card2{
    background-color: white;
    width: 30%;
    text-transform: uppercase;
    padding: 20px 80px;
    border-left: 5px solid #0580c5;
    box-shadow: 0 3px 3px grey;
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
    margin: 10px;
}

div.card p.value{
    text-align: center;
    font-size: 2em;
}

div.card section,
div.card1 section,
div.card2 section{
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

div.card1{
    border-left: 5px solid orange;
    margin: 10px;
}

div.card2{
    border-left: 5px solid darkred;
    margin: 10px;
}

div.card img,
div.card1 img,
div.card2 img{
    width: 30px;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
}

div#status{
    display: flex;
}

@font-face {
    font-family: louis;
    src: url(asset/inter.ttf);
}
    

::-webkit-scrollbar{
    /* display: none; */
}

@media screen and (max-width: 650px) {
    nav h3{
        font-size: 8px;
    }
    nav img.logo{
        margin-left: 40px;
    }
    div.wrapper h2{
        font-size: 1em;
    }
    div.content h2{
        font-size: 1em;
    }
    div.content h3{
        font-size: 1em;
    }
    div.card p,
    div.card1 p,
    div.card2 p{
        font-size: 5px;
    }
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
            <a href="dashboard_admin.php" class="now">Beranda</a>
            <a href="data_peminjaman.php">Data Peminjaman</a>
            <a href="data_user.php">Data User</a>
        </div>
        <div class="content">
            <h2>Dashboard</h2>
            <h3>Data Peminjaman Barang</h3>
            <div class="card">
                <p>Total Peminjaman</p><br>
                <!-- <p class="value">160</p> -->
                <section>
                <img src="asset/write.png"></section>
                <br><br>                
        </div>
            <h3>Status Peminjaman Barang</h3>
            <div id="status">
                <div class="card1">
                    <p>Total Dikembalikan</p><br>
                    <section>
                    <!-- <p class="value">160</p> -->
                    <img src="asset/check.png"></section>
                    <br><br>
                </div>  
                <div class="card">
                    <p>Total Progress</p><br>
                    <!-- <p class="value">160</p> -->
                    <section>
                    <img src="asset/write.png"></section>
                    <br><br>
                </div>
                <div class="card2">
                    <p>Total Expired</p><br></section>
                    <section>
                    <!-- <p class="value">160</p> -->
                    <img src="asset/close.png">
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>