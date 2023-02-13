<?php
session_start();
    $id_pengaduan = $_SESSION['id_pengaduan'];
    $tgl_pengaduan = $_SESSION['tgl_pengaduan'];
    $nik = $_SESSION['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $foto = $_POST['foto'];
    $status = $_POST['status'];

    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("INSERT INTO pengaduan values(null,'$id_pengaduan','$tgl_pengaduan','$nik','$isi_laporan','$foto','$status')");

    if($query){
        header("Location:laporan.php");
     }