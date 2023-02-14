<?php
include("koneksi.php");
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];


    
    $query = $koneksi->query("select * from petugas where username='$username' AND password='$password'")->fetchAll();
    
    if (count($query) > 0){
        $data = $query[0];

        $_SESSION['id_petugas'] = $data["id_petugas"];
        $_SESSION["nama"] = $data['nama'];
        $_SESSION["username"] = $_REQUEST['username'];
        
        header("Location:laporan.php");
    }
    else{
        $msg= "";
        header("Location:login2.php?msg={$msg}");
    }
?>