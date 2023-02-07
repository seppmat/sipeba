<?php

include "sql.php";

$level = $_POST ['level'];
$email = $_POST ['email'];
$username = $_POST ['username'];
$npp = $_POST ['npp'];
$password = $_POST ['password'];
$bidang = $_POST ['bidang'];

$query = "INSERT INTO user VALUES('','". $level ."','". $email ."','". $username ."','". $npp ."','','". $password ."','". $bidang ."')";
$sql = mysqli_query($connect, $query);


header("location: index.php");

?>