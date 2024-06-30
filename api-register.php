<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$queryRegister = "SELECT * FROM user WHERE username = '".$username."'";

$msql = mysqli_query($koneksi, $queryRegister);

$result = mysqli_num_rows($msql);

if(!empty($username) && !empty($password) && !empty($email)){
    if($result == 0){
        $regis = "INSERT INTO user (username,password,email)
        VALUES ('$username','$password','$email')";

        $msqlRegis = mysqli_query($koneksi, $regis);

        echo "Daftar Berhasil";
    }
    else{
        echo "Username Sudah Di Gunakan";
    }
}
else{
    echo "Semua Data Harus Di Isi Lengkap";
}



