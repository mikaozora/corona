<?php
include '../koneksi.php';
$sql = "SELECT * FROM petugas ORDER BY nama_petugas";
$res = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_assoc($res)){
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
        <p><i class="fas fa-user-nurse"></i> Petugas </p>
        </div>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <th scope="row">Nama</th>
                    <th scope="row">Usia</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($detail as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama_petugas'] ?></th>
            <td><?= $p['usia_petugas'] ?></th>
            <td>
                
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        </table>
    </div>
    </div>
    </body>
</html>

