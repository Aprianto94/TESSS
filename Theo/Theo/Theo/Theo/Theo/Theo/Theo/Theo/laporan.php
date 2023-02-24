<?php
        session_start();
        
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
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
    <title>Laporan</title>
  </head>
    <style>
        body{
            background-image: url("pixelart.jpg");
            background-size: cover;
        }
    </style>
  <body>
        <?php
        $nik = $_SESSION['nik'];
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM pengaduan  where nik='$nik'");

        ?>
    
    <div class="container-sm">
        
        <h1 class="text-black text-center">Laporan</h1>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-secondary bg-white text-center">
            <thead class="bg-secondary text-white">
                <th>Id</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Status</th>
                <th>UPD/DEL?</th>
                <th>Detail</th>
            </thead>
        
            <tbody>
            <?php while($data = $query->fetch()): ?>
                <tr>
                    <td><?= $data['id_pengaduan'] ?></td>
                    <td><?= "" . date("Y/m/d") ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['isi_laporan'] ?></td>
                    <td><img src="<?= './foto/' . $data['foto'] ?>" width="100px"></td>
                    <td><?= $data['status'] ?></td>
                    <td>
                        <a href="edit2.php?nik=<?= $data['nik'] ?>"class="btn btn-secondary"><i class="bi bi-gear-fill"></i></a>
                        <a href="proses_hapus2.php?id_pengaduan=<?= $data['id_pengaduan'] ?>"class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td> 
                    <td>
                    <a href="detail_laporan.php?id=<?= $data['id_pengaduan'] ?>"class="btn btn-success"><i class="bi bi-chat-left-dots"></i></a>
                    </td>

                </tr>
            <?php endwhile ?>
            </tbody>
    </table>
    <a href="index.php "class="btn btn-danger">Kembali</a>
    <a href="tambah5.php"class="btn btn-secondary">Tambah</a>

        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>