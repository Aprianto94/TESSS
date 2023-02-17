<?php
include('koneksi.php');

$username = $_GET['username'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("DELETE FROM masyarakat WHERE username='$username'");

if($query){
    header("location:index.php");
}
?>