<?php
        session_start();
        
        $db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root', '');
        $query = $db->query("SELECT * FROM petugas");

        if( isset($_SESSION["id_petugas"])){
            header("location:login.php");
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<style>
    body{
        background-image: url("https://wallpapercave.com/wp/wp1933970.png");
    }
</style>
<body  class="bg-secondary" style="height:100vh;">
    <div class="align-items-center d-flex" style="height:100vh;">
            <div class="card bg-white mx-auto d-block" style="width: 35%;">
                <div class='container'>
                    <form action="proses_tambah2.php" method="post">
        <div></div>
        <div>
            <form action="proses_tambah2.php" method="post">
                <div>
                    <h1 align=center>REGISTER</h1>
                </div>
             
                <div>
                            <label>ID</label>
                            <input type="text" name="id_petugas" class="form-control" id="floatingInput">
                        </div>
                        <div>
                        <div>   
                    
                        <div>
                            <label>NAMA</label>
                            <input type="text" name="nama_petugas" class="form-control" id="floatingInput">
                        </div>
                        <div>
                            <label>USERNAME</label>
                            <input type="text" name="username" class="form-control" id="floatingInput">
                        </div>
                        <div>
                            <label>PASSWORD</label>
                            <input type="text" name="password" class="form-control" id="floatingInput">
                        </div>
                        <div>
                            <label>TELP</label>
                            <input type="text" name="telp" class="form-control" id="floatingInput">
                        </div>
                        <LABEl>LEVEL</LABEl>
                        <select class="form-select" name="level" id="level">
                            <option value="1">PETUGAS</option>
                            <option value="2">ADMIN</option>
                        </select>
                        <div>
                <div><br>
              
                <a href="login2.php "class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-info">Simpan</button>
                </div>

                <h1><marquee width="100%" direction="left" height="">Silahkan Buat Akun :)</marquee></h1> 
            </form>
        </div>

    </div>
    </div>
</body>
</html>