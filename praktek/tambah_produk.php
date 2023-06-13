<?php

require 'function.php';


if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0){
    echo "
     <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan');
            window.location = 'produk.php';
     </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
         </script>
     ";
    }
    }   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h3>halaman tambah produk</h3>

    <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_produk">nama produk</label> 
            <input type="text" name="nama_produk" id="nama_produk" class="form-control"> 

            <label for="stok">stok</label> 
            <input type="text" name="stok" id="stok" class="form-control">

            <label for="harga">harga</label> 
            <input type="text" name="harga" id="harga" class="form-control">

            <label for="deskripsi">deskripsi</label> 
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">

            <label for="foto">foto</label> 
            <input type="file" name="foto" id="foto" class="form-control">

            <button type="submit" name="submit" class="btn btn-primary mt-2">Tambah</button>

        </form>
</body>
</html>