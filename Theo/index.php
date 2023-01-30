<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PEDULI DIRI</title>
  </head>
  <style>
    body{
        background-image: url("https://wallpapercave.com/wp/wp1933967.jpg");
        background-size: cover;
    }
  </style>
  <body>
        <?php
        session_start();
        
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM masyarakat");

        if(! isset($_SESSION["nik"])){
            header("location:login.php");
        }
        ?>
    
<nav class="navbar navbar-dark bg-secondary text-info ">
<div class="container">
<h1><marquee width="350%" direction="left" height="">SELAMAT DATANG</marquee></h1> 
</div> 
</nav>
    <div class="container-sm">
        <div class="d-flex">
            <div class="my-auto">
                <img src="rect7531.png" alt="" width="300px">
            </div>
            <div class="w-100">
                <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
                        <thead class="bg-info text-white">
                        <h1 class="text-info">LAPORAN PENGADUAN</h1>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>UPDATE/HAPUS?</th>
                    </thead>
                
                    <tbody>
                    <?php while($data = $query->fetch()): ?>
                        <tr>
                            <td><?= $data['nik'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            
                            <td>
                                <a href="edit.php?nik=<?= $data['nik'] ?>"class="btn btn-info">Update</a>
                                <a href="proses_hapus.php?nik=<?= $data['nik'] ?>"class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                <a href="logout.php "class="btn btn-danger" onclick="return confirm('Yakin Logout?')">Logout</a>
                <a href="catatan.php "class="btn btn-secondary">Catatan</a>
            </div>
        </div>
    </div>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</body>
</html>