<?php

    $tanggapan = $_POST['tanggapan'];
    

    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("INSERT INTO tanggapan values('$tanggapan')");

    if($query){
        header("Location:tanggapan.php");
     }

     