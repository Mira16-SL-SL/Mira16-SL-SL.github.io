<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $merk = $_POST['merk'];
    $penyimpanan = $_POST['penyimpanan'];
    $warna = $_POST['warna'];
    $pembayaran = $_POST['pembayaran'];
 

    $kirim = mysqli_query($db, "INSERT INTO pembelian (merk,penyimpanan,warna,pembayaran) VALUES ('$merk','$penyimpanan','$warna','$pembayaran')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:menubeli.php");
    }else {
        echo "gagal mengirim";
    }
}