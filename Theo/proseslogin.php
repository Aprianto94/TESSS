<?php
    include("koneksi.php");


    $nik = $_REQUEST["nik"];
    $password = $_REQUEST["password"];


    
    $query = $koneksi->query("select * from masyarakat where nik='$nik' AND password='$password'")->fetchAll();
    
    if (count($query) > 0){
        $data = $query[0];
        
        $_SESSION['nik'] = $data["nik"];
        $_SESSION["nama"] = $data['nama'];
        $_SESSION["username"] = $_REQUEST['username'];
        
        header("Location:index.php");
    }
    else{
        $msg= "NIK ATAU PASSWORD SALAH!";
        header("Location:login.php?msg={$msg}");
    }
?>