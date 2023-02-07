<?php
    include "sql.php";

    $nomor = $_GET['nomor'];

    $query = "SELECT * FROM user WHERE nomor='" . $nomor . "'";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);


    $query2 = "DELETE FROM user WHERE nomor='" . $nomor . "'";
    $sql2 = mysqli_query($connect, $query2);

    if($sql2){
        header("location: data_user.php");
    }else{
        echo "Data tidak terbaca, Data akan dihapus secara otomatis. <a href='data_user'>Kembali</a>";
    }

?>