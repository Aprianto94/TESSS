<?php
    require('koneksi.php');
    
    $nik = $_SESSION['nik'];
        $db = new PDO("mysql:host=localhost;dbname=pduli_diri",'root', '');
        $query = $db->query("SELECT * FROM masyrakat");

        if(! isset($_SESSION["nik"])){
            header("location:login.php");
        }
        ?>
<?php 

    $query = $koneksi->query("SELECT * FROM masyarakat");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Catatan waktu</title>
</head>
<style>
    body{
        background-image: url("https://wallpapercave.com/wp/wp1933976.jpg");
        background-size: cover;
    }
</style>
<body class="">
    <div class="container-sm">
    <div class="row row-cols-3">
        <div></div>
        <div>
            <form action="proses_tambah.php" method="post">
                <div>
                    <h1 align=center class="text-white">Tambah Catatan</h1>
                </div>
                <div>
                <div>   
            
                <div>
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="floatingInput"reuqired>
                </div>
                <div>
                    <label>Waktu</label>
                    <input type="time" name="waktu" class="form-control" id="floatingInput"required>
                </div>
                <div>
                    <label>Lokasi Terakhir</label>
                    <input type="text" name="lokasi" class="form-control" id="floatingInput"required>
                </div>
                <div>
                    <label>Suhu Tubuh</label>
                    <input type="text" name="suhu_tubuh" class="form-control" id="floatingInput"required>
                </div>
                <div>
                <div><br>
              
                <a href="catatan.php "class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-info">Simpan</button>
                </div>

            </form>
        </div>

    </div>
    </div>
</body>
</html>