<?php
session_start();
require 'function.php';


$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];


if(isset($_POST["submit"])){
    if(editproduk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data produk berhasil diubah');
            window.location = 'produk.php'
        </script>
        
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal diubah');
            window.location = 'produk.php'
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
    <title>halaman edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h3>halaman edit produk</h3>
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $data["id_produk"]; ?>"> 
            
            <label for="nama_produk">Nama_produk</label> 
            <input type="text" name="nama_produk" id="nama_produk" value="<?= $data["nama_produk"];?>"><br><br>

            <label for="stok">stok:</label> 
            <input type="text" name="stok" id="stok" value="<?= $data["stok"];?>"><br><br>

            <label for="harga">harga:</label> 
            <input type="text" name="harga" id="harga" value="<?= $data["harga"];?>"><br><br>

            <label for="harga">deskripsi:</label> 
            <input type="text" name="deskripsi" id="deskripsi" value="<?= $data["deskripsi"];?>"><br><br>
            

            <label for="foto">foto:</label> 
            <input type="file" name="foto" id="foto" value="<?= $data["foto"];?>" ><br><br>

            <button type="submit" name="submit" class="btn btn-primary">Edit</button>

        </form> 
</body>
</html>