<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="bg-secondary">
    <div class="container-sm">
    <div class="row row-cols-3">
        <div></div>
        <div>
            <form action="proses_tambah.php" method="post">
                <div>
                    <h1 align=center>REGISTER</h1>
                </div>
                <div>
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" id="floatingInput">
                </div>
                <div>
                <div>   
            
                <div>
                    <label>NAMA</label>
                    <input type="text" name="nama" class="form-control" id="floatingInput">
                </div>
                <div>
                    <label>USERNAME</label>
                    <input type="text" name="username" class="form-control" id="floatingInput">
                </div>
                <div>
                    <label>PASSWROD</label>
                    <input type="text" name="password" class="form-control" id="floatingInput">
                </div>
                <div>
                    <label>TELP</label>
                    <input type="text" name="telp" class="form-control" id="floatingInput">
                </div>
                <div>
                <div><br>
              
                    
                <button type="submit" class="btn btn-info">Simpan</button>
                </div>

                <h1><marquee width="100%" direction="left" height="150px">Silahkan Buat Akun :)</marquee></h1> 
            </form>
        </div>

    </div>
    </div>
</body>
</html>