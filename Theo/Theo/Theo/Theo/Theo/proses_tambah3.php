<?php
session_start();
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_SESSION['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $status = $_POST['status'];
    
    $image_name = $_FILES["foto"]["name"];
    $image_temp = $_FILES['foto']['tmp_name'];
    $folder = "./foto/" . $image_name;

    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("INSERT INTO pengaduan values(null,'$tgl_pengaduan','$nik','$isi_laporan','$image_name','$status')");

    move_uploaded_file($image_temp, $folder);

    if($query){
        header("Location:laporan.php");
     }