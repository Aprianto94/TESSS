<?php
session_start();
    $nik_akun = $_SESSION['id_pengaduan'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_POST['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $foto = $_POST['foto'];
    $status = 'proses';

    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("INSERT INTO masyarakat values(null,'$nik_akun','$tgl_pengaduan','$nik','$isi_laporan','$foto' , '$status')");

    if($query){
        header("Location:laporan.php");
     }