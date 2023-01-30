<?php
    include("koneksi.php");


    $nik = $_REQUEST["nik"];
    $password = $_REQUEST["password"];



    $query = $koneksi->query("select * from masyarakat where nik='$nik' AND password='$password'")->fetchAll();
    
    if ($query){
        $_SESSION["nik"] = $_REQUEST['nik'];
        $_SESSION["nama"] = $_REQUEST['nama'];
        header("Location:index.php");
    }
    else{
        header("Location:login.php");
    }
?>