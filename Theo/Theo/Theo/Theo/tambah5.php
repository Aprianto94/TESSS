<?php
    require('koneksi.php');
    
    $nik = $_SESSION['nik'];
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM pengaduan");

        if(! isset($_SESSION["nik"])){
            header("location:login.php");
        }
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
            <form action="proses_tambah3.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div>
                    <h1 align=center class="text-white">Tambah Catatan</h1>
                </div>
                <div>
                <div>   
            
                <div>
                    <label>Tanggal</label>
                    <input type="date" name="tgl_pengaduan" class="form-control" id="floatingInput"required>
                </div>
                <div>
                    <label>Nik</label>
                    <input type="text" name="nik" class="form-control" id="floatingInput"reuqired>
                </div>
                <div>
                    <label>Isi Laporan</label>
                    <input type="text" name="isi_laporan" class="form-control" id="floatingInput"reuqired>
                </div>
                <div>
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" id="floatingInput" accept="image/jpeg, image/png, image/jpg" required>
                </div>
                <div>
                    <label>Status</label>
                    <select name="status" id="status">
                        <option value="0">0</option>
                        <option value="proses">proses</option>
                        <option value="selesai">selesai</option>
                    </select>
                </div>
                <div>
                <div><br>
              
                <a href="laporan.php "class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-info">Simpan</button>
                </div>

            </form>
        </div>

    </div>
    </div>
</body>
</html>