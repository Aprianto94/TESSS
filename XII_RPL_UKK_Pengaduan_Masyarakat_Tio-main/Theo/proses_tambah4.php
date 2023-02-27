<?php

    $tanggapan = $_POST['tanggapan'];
    

    $database = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
    $query = $database->query("INSERT INTO tanggapan values('$tanghy7777877777gapan')");

    if($query){
        header("Location:tanggapan.php");
     }

     