<?php

//$niklama = $_GET["nik"];
$id_pengaduan = $_POST['id'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];


$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = "UPDATE `pengaduan` SET isi_laporan='$isi_laporan' where id_pengaduan='$id_pengaduan'";
    if($foto !== ""){
        $query = "UPDATE `pengaduan` SET isi_laporan='$isi_laporan', foto='$foto' where id_pengaduan='$id_pengaduan'";
        move_uploaded_file($tmp, 'foto/'. $foto);
    }

    $query = $db->query($query);
    // die();
if($query){
    header("location:laporan.php");
}