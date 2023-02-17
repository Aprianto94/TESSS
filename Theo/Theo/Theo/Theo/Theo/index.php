<?php
        session_start();

        $nik = $_SESSION['nik'];
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM masyarakat where nik='$nik'")->fetch();

        if(! isset($_SESSION["nik"])){
            header("location:login.php");
        }
        ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PENGADUAN MASYARAKAT</title>
  </head>
  <style>
    body{
        background-color: white;
    }
  </style>
  <body class="d-flex flex-column">
    <div class="bg-dark d-flex py-3">
        <h1 class="text-white me-2">Welcome <?= $query['nama'] ; ?></h1>
        <div class="my-auto">
            <a href="logout.php "class="btn btn-danger" onclick="return confirm('Yakin Logout?')">Logout</a>
            <a href="laporan.php?id_pengaduan=<?= $_SESSION["nik"]?>"class="btn btn-secondary">Laporan</a>
        </div>
    </div>
    <div style="flex:1">
        <div class="container">

            <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-secondary">                        <thead class="bg-info text-white">
                <h2 class="text-dark">HALAMAN UTAMA</h2>
                <thead class="bg-secondary text-white">
                    <th>USERNAME</th>
                    <th>NAMA</th>
                    <th>UPDATE/HAPUS?</th>
                </thead>
            
                <tbody>
                    <tr>
                        <td><?= $query['username'] ?></td>
                        <td><?= $query['nama'] ?></td>
                        
                        <td>
                            <a href="edit.php?nik=<?= $data['username'] ?>"class="btn btn-success">Update</a>
                            <a href="proses_hapus.php?username=<?= $data['username'] ?>"class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>