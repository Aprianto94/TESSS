<?php

    $nik = $_POST['nik'];
    // if (isset($_POST['id_petugas'])){
    //     $id_petugas = $_POST["id_petugas"];
    // }
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("INSERT INTO masyarakat values('$nik','$nama' , '$username','$password','$telp')");

    if($query){
        header("Location:login.php");
     }