<?php
    //memanggil file pustaka fungsi
    require "fungsi.php";

    //memindahkan data kiriman dari form ke var biasa
    $id=$_GET["kode"];


    $sql=$koneksi->query("select * from dosen where npp='$id'");
    //membuat query hapus data
    $sql="delete from dosen where npp=$id";
    mysqli_query($koneksi,$sql);
    header("location:updateDosen.php");
?>