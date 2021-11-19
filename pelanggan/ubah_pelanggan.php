<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
       body {
            
            background-color: #2B2B2B;
        }
    </style>

</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_pelanggan = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan = '".$_GET['id_pelanggan']."'");
    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
    ?>
     <div class="p-3 mb-2 text-white">
  
    <div class = "container">
    <h3  class = "text-center">Ubah Profil</h3> 
    <form action="proses_ubah_pelanggan.php" method="post" enctype="multipart/form-data">
        <input type = "hidden" name="id_pelanggan" value ="<?=$dt_pelanggan['id_pelanggan']?>">

        Nama :
        <br><input type ="text" name ="nama" value ="<?=$dt_pelanggan['nama']?>" class = "form-control"></br>

        Alamat :
        <br><input type ="text" name ="alamat" value ="<?=$dt_pelanggan['alamat']?>" class = "form-control"></br>

        No. Telp :
        <br><input type ="number" name ="telp" value ="<?=$dt_pelanggan['telp']?>" class = "form-control"></br>

        Username : 
        
        <br><input type ="text" name ="username" value ="<?=$dt_pelanggan['username']?>" class = "form-control"></br>
          
        Password :
        <br><input type ="password" name ="password" value ="<?=$dt_pelanggan['password']?>" class = "form-control"></br>

        <br><input type="submit" name="simpan" value="Ubah Produk" class="btn btn-secondary">
        </br>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
</body>
</html>