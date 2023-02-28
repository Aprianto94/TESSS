<?php 
session_start();

$id = $_GET['id_pengaduan'];
$isi_tanggapan = $_POST['isi_tanggapan'];
$tgl = $_POST['tanggal'];
$idpet = $_SESSION['id_petugas'];
$status = $_POST['status'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("INSERT INTO `tanggapan`(`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES (null,'$id','$tgl','$isi_tanggapan','$idpet')");
$status = $db->query("UPDATE `pengaduan` SET `status`= '$status' WHERE id_pengaduan = '$id'");

if($status){
    header("Location:tanggapan.php");
}

?>