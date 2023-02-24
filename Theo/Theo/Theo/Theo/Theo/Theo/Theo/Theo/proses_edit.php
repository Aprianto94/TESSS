<?php

// $niklama = $_GET["nik"];
$nik = $_GET['nik'];
$nama = $_POST['nama'];


$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("UPDATE `masyarakat` SET nama='$nama' where nik='$nik'");

// var_dump($query);
if($query){
    header("location:index.php");
}
?>