<?php

require 'koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }

    return $rows;
}

function tambahproduk($data){
    global $conn;

    $nama_produk= htmlspecialchars($data["nama_produk"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

    move_uploaded_file($files, "foto/".$foto);

    $query = "INSERT INTO produk VALUES(NULL, '$nama_produk', '$stok', '$harga', '$deskripsi', '$foto')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusproduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id'");
    return mysqli_affected_rows($conn);
}



function editproduk($data){
    global $conn;

    $id = htmlspecialchars($data["id_produk"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        stok = '$stok',
        harga = '$harga',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        stok = '$stok',
        harga = '$harga',
        deskripsi = '$deskripsi',
        foto = '$foto' WHERE id_produk = '$id'";
        
        move_uploaded_file($files, "foto/$foto");

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}








?>