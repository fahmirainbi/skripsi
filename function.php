<?php
session_start();
$conn = mysqli_connect("localhost","root","","stockbarang");



// Tambah Barang
if(isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn, "insert into stock (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");
    if($addtotable){
        header('location:index.php');
    }else{
        echo 'Barang Gagal Ditambahkan';
        header('location:index.php');
    }
}

?>