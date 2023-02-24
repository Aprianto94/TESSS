<?php
        session_start();
        
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM pengaduan");

        if(! isset($_SESSION["nik"])){
            header("location:login.php");
        }

    $nik = $_GET['nik'];
    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("SELECT * FROM pengaduan WHERE nik='$nik'");
    $data = $query->fetch();
    // var_dump($data);
    // die();
    ?>
<!DOCTYPE html>
<html lang="en" style="height: 100vh;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<style>
    body{
        background-image: url("https://images8.alphacoders.com/939/939716.png");
    }
</style>
<body>
    <div class="container-sm w-25">
        <div >
           <h1 align=center>UPDATE LAPORAN</h1>
        </div>
            <form action="proses_edit2.php?nik=<?= $nik ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id_pengaduan'] ?>">
                <br>
                <p>
                    <textarea name="isi_laporan" type="text" cols="50" rows="10"><?php echo $data['isi_laporan']?></textarea>    
                </p>    
                <div>
                    <div>
                        <input placeholder="UPDATE FOTO" type="file" name="foto" value="<?= $data['foto'] ?>"class="form-control my-auto" id="floatingInput">
                    </div>
                </div>
<br>
                <a href="laporan.php"class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</body>
</html>     