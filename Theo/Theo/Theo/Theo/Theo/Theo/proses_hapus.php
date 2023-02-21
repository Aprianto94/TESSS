<?php
include('koneksi.php');

$nik = $_GET['nik'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("DELETE FROM masyarakat WHERE nik='$nik'");

 if($query){
     header("location:index.php");
 }
 ?>