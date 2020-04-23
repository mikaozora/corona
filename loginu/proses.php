<?php
session_start();
include '../koneksi.php';
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id_pasien, nama FROM pasien WHERE username='$username' AND password='$password'";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);
    if($count == 1){
        header("Location: http://localhost/php/corona/web/index.php");
    }else{
        header("Location: http://localhost/php/corona/loginu/index.php");
    }
}
?>
