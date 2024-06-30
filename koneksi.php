<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "my_api_android";

$koneksi = mysqli_connect($hostName,$userName,$password,$dbName);

if(!$koneksi){
    echo "Koneksi Gagal";
}


