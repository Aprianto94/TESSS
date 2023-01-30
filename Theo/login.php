<?php

session_start();

$msg = "";

if (isset($_GET["msg"])){
    $msg = $_GET["msg"];
}
if(isset($_SESSION["nik"])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en" style="height:100vh;">
<html lang="en" style="height:100vh;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .body{
        background-image: url("https://wallpapercave.com/wp/wp1933964.png");
        background-attachment: fixed;
    }
</style>
<body  class="h-100 body">
<div class="text-center"><h1 class="text-danger"><?= $msg ?></h1></div>
<div class="container h-100 d-flex">

    <div class="card bg-white w-50 m-auto">
        <form  style="text-align:center;" action="proseslogin.php" method="POST">
            <h1 class="btn-dark text-info rounded"> LOGIN</h1>
            <div class="container mt-5"  >
                
                <span>  <input placeholder="NIK" type="text" name="nik" required></span>
                <br>
                <br>
                <span > <input placeholder="PASSWORD" type="text" name="password" required></span>
        </div>
                <br>
                <br>
                <button class="btn btn-outline-primary mb-3" >Login</button>
                <a href="tambah.php "class="btn btn-info mb-3">Register</a>
            </form>
            <style>
                h1{
                    color: blue;
                }
            </style>
        </div>

    </div>
    
</body>
</html>