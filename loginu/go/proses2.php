<?php
include '../../koneksi.php';
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = "";
    if($_POST['rdb1'] == "ya" && $_POST['rdb2'] == "ya" && $_POST['rdb3'] == "ya" && $_POST['rdb4'] == "ya" && $_POST['rdb5'] == "ya"){
        $status = 1;
    }else{
        $status = 2;  
    }
    $sql = "INSERT INTO pasien (nama, alamat, usia, id_status, username, password)
            VALUES ('$nama', '$alamat', '$usia', '$status', '$username', '$password')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);
    if($count == 1){
        header("Location: http://localhost/php/corona/loginu/index.php");
    }else{
        echo 'error';
    }
}
?>