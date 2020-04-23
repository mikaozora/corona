<?php
include '../../koneksi.php';
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO petugas (nama_petugas, alamat_petugas, usia_petugas, username_p, password_p)
            VALUES ('$nama', '$alamat', '$usia', '$username', '$password')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);
    if($count == 1){
        header("Location: http://localhost/php/corona/loginp/index.php");
    }else{
        echo 'error';
    }
}
?>