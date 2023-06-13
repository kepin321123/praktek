<?php

require 'function.php';

$produk = query("SELECT * FROM produk");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h3 class="ms-3">halaman produk</h3>
    <a href="tambah_produk.php" class="btn btn-primary ms-3">Tambah produk</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id_produk</th>
      <th scope="col">nama_produk</th>
      <th scope="col">stok</th>
      <th scope="col">harga</th>
      <th scope="col">deskripsi</th>
      <th scope="col">foto</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
     <?php $i=1; ?>
     <?php foreach ($produk as $data) :?>
    <tr>
      <td><?= $i;?></td>
      <td><?= $data["nama_produk"];?></td>
      <td><?= $data["stok"];?></td>
      <td><?= $data["harga"];?></td>
      <td><?= $data["deskripsi"];?></td>
      <td><img src="foto/<?= $data["foto"];?>" alt="" width="100"></td>
      <td>
        <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>" class="edit btn btn-success">edit</a>
        <a href="hapus_produk.php?id=<?= $data["id_produk"]; ?>" class="hapus btn btn-danger">hapus</a>
      </td>
    </tr>
        <?php $i++; ?>
         <?php endforeach ;?>
  </tbody>
</table>
</body>
</html>