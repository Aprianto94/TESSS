<?php
    include("koneksi.php");


    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];


    
    $query = $koneksi->query("select * from masyarakat where username='$username' AND password='$password'")->fetchAll();
    
    if (count($query) > 0){
        $data = $query[0];

        $_SESSION['nik'] = $data["nik"];
        $_SESSION["nama"] = $data['nama'];
        $_SESSION["username"] = $_REQUEST['username'];
        
        header("Location:index.php");
    }
    else{
        $msg= "";
        header("Location:login.php?msg={$msg}");
    }
?>