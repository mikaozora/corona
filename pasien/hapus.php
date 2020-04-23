<?php
include '../koneksi.php';
$id_pasien = $_GET['id_pasien'];
$sql = "DELETE FROM pasien WHERE id_pasien = $id_pasien";
$res = mysqli_query($koneksi, $sql);
$count = mysqli_affected_rows($koneksi);
if($count == 1){
    header("Location: http://localhost/php/corona/pasien/index.php");
}
?>