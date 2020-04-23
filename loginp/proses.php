<?php
session_start();
include '../koneksi.php';
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id_petugas, nama_petugas FROM petugas WHERE username_p='$username' AND password_p='$password'";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);
    if($count == 1){
        header("Location: http://localhost/php/corona/pasien/index.php");
    }else{
        echo 'error';
    }
}
?>
