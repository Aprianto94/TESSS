<?php
require('koneksi.php');
$id = $_GET['id_pengaduan'];
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("SELECT * FROM pengaduan");


?>
<?php

$query = $koneksi->query("SELECT * FROM pengaduan");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>laporan</title>
</head>
<style>
    body {
        background-image: url("https://wallpapercave.com/wp/wp1933976.jpg");
        background-size: cover;
    }
</style>

<body class="">
    <div class="container-sm">
        <div class="row row-cols-3">
            <div></div>
            <div>
                <form action="proses_tambah6.php?id_pengaduan=<?= $id ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div>
                        <h1 align=center class="text-white">Tambah Laporan</h1>
                    </div>
                    <div>
                        <div>
                            <br>
                                <label class="text-center" for="tanggal">Tanggal Tanggapan</label>
                                <input type="date" name="tanggal" id="tanggal">
                            </br>
                            <label class="text-center" for="isi">Isi Tanggapan</label>
                            <textarea name="isi_tanggapan" id="isi" cols="50" rows="10"></textarea>
                            <label for='level'>Status</label>
                            <select name="status" id="level">
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                        <div>
                            <div><br>

                                <a href="tanggapan.php " class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>

                </form>
            </div>

        </div>
    </div>
</body>

</html>