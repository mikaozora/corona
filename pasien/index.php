<?php
include '../koneksi.php';
$sql = "SELECT * FROM pasien INNER JOIN status ON pasien.id_status = status.id_status ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $detail[] = $data;
}
?>
<?php
include '../header/header.php';
?>
<html>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md"></div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="atas">
                    <p><i class="fas fa-user-injured"></i> Pasien </p>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="row">No</th>
                            <th scope="row">Nama</th>
                            <th scope="row">Usia</th>
                            <th scope="row">Status</th>
                            <th scope="row">Suhu</th>
                            <th scope="row">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($detail as $p) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['usia'] ?></td>
                            <td><?php if ($p['status'] == "positif") {
                                    echo '<h5><span class="badge badge-danger">Positif</span></h5>';
                                } else {
                                    echo '<h5><span class="badge badge-success">Negatif</span></h5>';
                                } ?>
                            </td>
                            <td><?= $p['suhu'] ?><?php echo '°C' ?></td>
                            <td>
                                <h5><a href="hapus.php?id_pasien=<?= $p['id_pasien'] ?>"><i class="fas fa-trash-alt"></i></a></h5>
                                <h5><a href="update.php?id_pasien=<?= $p['id_pasien'] ?>"><i class="fas fa-edit"></i></a></h5>

                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>