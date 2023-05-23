<?php

$server = "localhost";
$user   = "root";
$password = "";
$database = "siswa";
$con = mysqli_connect($server,$user,$password,$database) ;

if (mysqli_connect_errno()) {
    echo "gagal terhubung MySQL:" . mysqli_connect_error();
}
?>