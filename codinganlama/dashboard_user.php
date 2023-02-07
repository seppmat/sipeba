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
    grid-template-columns: 0.5fr 4fr;
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

div.user p.nama{
    color: white;
    font-size: 12px;
    display: flex;
    float: right;
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
    color: gray;
    box-shadow: 0 0.5px 0 gray;
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
    height: 100vh;  
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

div.card{
    background-color: white;
    width: 30%;
    padding: 20px 80px;
    border-left: 5px solid #0580c5;
    box-shadow: 0 3px 3px grey;
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
}

div.card p.value{
    text-align: center;
    font-size: 2em;
}

div.card section{
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

div.card img{   
    width: 30px;
}

div.table{
    display: flex;
    width: 100%;  
    height: auto;
    flex-direction: column;
}

table{
    
}

table tr{
}

table th{
    background-color: #0580c5;
    border-bottom: 2px solid gray;
    padding: 10px; 
    color: ghostwhite;
}

table td{
    border-bottom: 2px solid whitesmoke;
    background-color: white;
    padding: 10px;
    text-align: center;
}

@font-face {
    font-family: louis;
    src: url(asset/inter.ttf);
}     
::-webkit-scrollbar-button{
    display: none;
}
::-webkit-scrollbar-thumb{
    background-color: pink;
}
::-webkit-scrollbar-track{
    background-color: pink;
}
@media screen and (max-width: 650px) {
    div.wrapper h2{
        font-size: 12px;
    }
    div.wrapper a{
        font-size: 10px;
        padding: 10px;
    }
    nav h3{
        font-size: 8px;
        margin-left: 40px;
    }
    nav img.logo{
        margin-left: 25px;
        width: 30px;
    }   
    div.user a{
        font-size: 9px;
        padding: 5px;
    }
    div.content h2{
        font-size: 0.8em;
    }
    div.content h3{
        font-size: 0.6em;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    div.card{
        width: 100%;
        padding: 10px;
        text-align: left;
    }   
    div.card p{
        font-size: 0.7em;
    }
    div.card img{   
        width: 20px;
    }
    div.table{
        overflow-x: scroll;
        overflow-y: hidden;
    }
    table th{
        font-size: 9px;
        font-weight: lighter;
    }
    table td{
        font-size: 8px;
    }
}
    </style>
</head>
<body>

<!-- <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location: index.php?pesan=gagal");
	}
?> -->

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
            <a href="dashboard_user.php" class="now">Beranda</a>
            <a href="formulir.php">Formulir Peminjaman</a>
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
            <div class="table">
                <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>No. Inventaris/Serial</th>
                    <th>Tujuan Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>error404;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>error404;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>error404;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>error404;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>error404;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>error404;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        </div>
    </div>
</body>
</html>