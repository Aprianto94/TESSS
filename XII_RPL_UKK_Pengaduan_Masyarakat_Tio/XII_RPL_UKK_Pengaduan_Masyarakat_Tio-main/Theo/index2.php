<?php
        session_start();
        if(! isset($_SESSION["username"])){
            header("location:login2.php");
        }
        

        $id_petugas = $_SESSION['id_petugas'];
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM petugas WHERE id_petugas=$id_petugas")->fetchAll();


        ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>HALAMAN ADMIN</title>
  </head>
  <style>
    body{
        background-color: white;
    }
  </style>
  <body class="d-flex flex-column">
    <div class="bg-dark d-flex py-3">
        <h1 class="text-white me-2">Welcome <?= $_SESSION['username']; ?></h1>
        <div class="my-auto">
        <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"><i class="bi bi-list-task"></i></i>
            </button>
            
        </div>
    </div>
    <div style="flex:1" class="d-flex">
        <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body" style="width: 300px;">
                <br>
                    <a href="logout2.php "class="btn btn-danger" onclick="return confirm('Yakin Logout?')"><i class="bi bi-box-arrow-left"></i></a>
                </br>
                    <a href="tanggapan.php"class="btn btn-secondary"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>
    <div style="flex:1">
        <div class="container">

            <table border="2" cellpadding="10" cellspacing="0" class="table table-bordered border-secondary text-center rounded-pill">                        <thead class="bg-info text-white">
                <h2 class="text-dark text-center">Dashboard</h2>
                <thead class="bg-secondary text-white text-center rounded">
                    <th>USERNAME</th>
                    <th>NAMA</th>
                </thead>
            
                <tbody class="rounded">
                    <?php foreach ($query as $data) :?>
                    <tr>
                        
                            <td><?= $_SESSION['username']?></td>
                            <td><?= $data ['nama_petugas']?></td>
                            
                        
                    </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>