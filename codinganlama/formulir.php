<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang</title>
    <style>
*, html, body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    outline: 0;
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
    box-shadow: 0 -0.5px 0 gray;
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
    grid-area: content;
    padding: 10px; 
}

div.form{
    display: flex;
    flex-direction: column;
    border: 1px solid ghostwhite;
    
}

div.form h3{
    font-family: louis;
    font-size: 1em; 
    color: ghostwhite; 
    background-color: #0580c5;
    padding: 15px;
    border-radius: 10px 10px 0 0;
}

form{
    display: flex;
    flex-direction: column;
}

fieldset{
    color: gray;
    background-color: white;
    border: none;
    border-radius: 10px;
    padding: 20px;
    flex-direction: row;
    justify-content: space-between;
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}

fieldset div{
    width: 45%;
    margin: 30px;
}

fieldset div input,
select{
    margin-top: 10px;
}

div.jenis_barang{
    display: flex;
    flex-direction: column;
}

div.atasan{
    display: flex;
    flex-direction: column;
}

select{
    color: gray;
    border: 1px solid darkgray;
    background-color: ghostwhite;
    border-radius: 10px;
    padding: 10px;
    width: 100%;
}

input{
    border: 1px solid darkgray;
    background-color: ghostwhite;
    border-radius: 10px;
    padding: 10px;
    width: 100%;
}

input[type="date"]::-webkit-calendar-picker-indicator{
    color: gray;
}

div.button{
    display: flex;
}

.submit,
.cancel{
    cursor: grab;
    box-shadow: none;
    background-color: #0580c5;
    color: ghostwhite;
    width: 200px;
    padding: 15px;
    border-radius: 10px;
    transition: 0.5s ease-in-out;
    font-family: louis;
    font-weight: bold;
    margin-top: 10px;
    text-align: center;
}

.cancel{
    margin-left: 10px;
}

section{
    display: flex;
    width: 100%;
}

::placeholder{
    font-family: louis;
}

@font-face {
    font-family: louis;
    src: url(asset/inter.ttf);
}

::-webkit-scrollbar{
    display: none;
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
    fieldset div,
    select{
        width: 100%;
        margin: 0;
    }  
    label{
        font-size: 12px;
    }
    input,
    select{
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
        padding: 5px;
    }
    section{
        flex-direction: column;
    }
    .submit,
    .cancel{
        font-size: 12px;
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
            <a href="dashboard_user.php">Beranda</a>
            <a href="formulir.php" class="now">Formulir Peminjaman</a>
        </div>
        <div class="content">
            <div class="form">
                <h3>Formulir Peminjaman</h3>
                <form action="submit.php" method="POST" name="register">
                    <fieldset>
                        <div class="nama_barang">
                        <label>Masukkan Nama Barang</label></br>
                        <input name="nama_barang" type="text" required></div>
                        <div class="jenis_barang">
                        <label>Pilih Jenis Barang</label>
                        <select name="jenis_barang" required>
                            <option>Peralatan Sistem Informasi</option>
                            <option>Peralatan Operasional</option>
                        </select></div>
                        <div class="serial_number">
                        <label>Nomor Inventaris/Serial</label>
                        <input name="serial_number" type="text" required></div>
                        <div class="nomor_handphone">
                        <label>Nomor Handphone</label>
                        <input name="nomor_handphone" type="number" required></div>
                        <div class="tujuan_peminjaman">
                            <label>Tujuan/Keperluan Peminjaman</label>
                            <input name="tujuan_peminjaman" type="text" required></div>
                            <div class="atasan">
                                <label>Atasan Yang Mengetahui</label>
                                <select name="atasan" required>
                                    <option>TRI HARYADI</option>
                                    <option>ZUBER KERTAPATI</option>
                                    <option>ESNI FRIDAWATI</option>
                                    <option>RUSMAN AYADI</option>
                                    <option>MUHAMMAD NAZLI</option>
                                    <option>IDRIS</option>
                                    <option>MUHAMMAD PANJI</option>
                                </select></div> 
                                <section>
                                <div class="tanggal_pinjam">
                                <label>Tanggal Peminjaman Barang</label>
                                <input name="tanggal_pinjam" type="date" required></div>
                                <div class="tanggal_kembali">
                                <label>Tanggal Pengembalian Barang</label>
                                <input name="tanggal_kembali" type="date" required></div>  
                                <!-- <div class="file">
                                <label for="">Upload Bukti Keperluan</label>
                                <input name="file" type="file"></div>  -->
                                </section>    
                    </fieldset>
                    <div class="button">
                    <input class="submit" type="submit" value="Send Data">   
                    <input class="cancel" type="reset" value="Cancel">   
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>