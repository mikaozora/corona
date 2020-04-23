<?php
include '../koneksi.php';
$id_pasien = $_GET['id_pasien'];
$tabel = "SELECT * FROM pasien WHERE id_pasien = $id_pasien";
$query = mysqli_query($koneksi, $tabel);
$hasil = mysqli_fetch_assoc($query);
$nama = $hasil['nama'];
if(isset($_POST['submit'])){
    $suhu = $_POST['suhu'];
    $count = mysqli_affected_rows($koneksi);
    if($count > 0){
        $sql2 = mysqli_query($koneksi, "UPDATE pasien SET suhu = $suhu WHERE id_pasien = $id_pasien");
        header("Location: http://localhost/php/corona/pasien/index.php");
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="http://localhost/php/corona/loginp/go/style.css">
        <title>Update Suhu</title>
    </head>
    <body>
    <div class="contai">
        <div class="box">
            <form method="POST">
                <h2>Update Suhu</h2>
                <div class="data">
                    <h5>nama</h5>
                    <input type="text" value="<?= $hasil['nama'] ?>" disabled class="input">
                </div>
                <div class="data">
                    <h5>Suhu</h5>
                    <input type="text" name="suhu" value="<?= $hasil['suhu'] ?>" class="input">
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
    </body>
</html>