<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("SELECT * FROM pengaduan");

//     if(! isset($_SESSION["id_pengaduan"])){
//     header("location:login.php");
//  }
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Detail Laporan</title>
</head>
<style>
    body {
        background-image: url("pixelart.jpg");
        background-size: cover;
    }
</style>

<body>
    <?php
    $id = $_GET['id_pengaduan'];
    $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $sql = $db->query("SELECT * FROM pengaduan INNER JOIN tanggapan ON `pengaduan`.id_pengaduan = `tanggapan`.id_pengaduan WHERE `pengaduan`.id_pengaduan='$id'");

    ?>

    <div class="container-sm">

        <h1 class="text-black text-center">Detail Laporan</h1>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-secondary bg-white text-center">
            <thead class="bg-secondary text-white">
                <th>Id</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Status</th>
                <th>ID PETUGAS</th>
                <th>TANGGAPAN</th>
            </thead>

            <tbody>
                <?php while ($data = $sql->fetch()) : ?>
                    <tr>
                        <td><?= $data['id_pengaduan'] ?></td>
                        <td><?= "" . date("Y/m/d") ?></td>
                        <td><?= $data['nik'] ?></td>
                        <td><?= $data['isi_laporan'] ?></td>
                        <td><img src="<?= './foto/' . $data['foto'] ?>" width="100px"></td>
                        <td><?= $data['status'] ?></td>
                        <td>
                        <?= $data['id_petugas'] ?>
                        </td>
                        <TD>

                            <?= $data['tanggapan'] ?>
                        </TD>


                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        
        <a href="laporan.php " class="btn btn-danger"><i class="bi bi-arrow-left"></i></a>
        <!-- <a href="tanggapan.php" class="btn btn-secondary">Tambah</a> -->

    </div>


    <!-- <h2>Tanggapan</h2>
    <div class="">
        <?php
        $query = $db->query("select * from tanggapan where id_pengaduan='$id'");
        $data = $query->fetchAll();
        // var_dump($data);
        // die();

        ?>
        <hr>
        <?php foreach ($data as $data) : ?>
            <h3> Id Admin :
                <?= $data['id_petugas']; ?></h3>
            <p><?= $data['tanggapan']; ?></p>

            <div class=""></div>
        <?php endforeach ?> -->
    </div>
    </hr>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>