<?php

include "sql.php";


$nomor = $_POST ['nomor'];
$email = $_POST ['email'];
$username = $_POST ['username'];
$npp = $_POST ['npp'];
$bidang = $_POST ['bidang'];

$query = "UPDATE user SET nomor='$nomor', email='$email', username='$username', npp='$npp', bidang='$bidang' where nomor='$nomor'";
mysqli_query($connect, $query);

header ("location: data_user.php");

?>