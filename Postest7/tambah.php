<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $merk = $_POST['merk'];
    $penyimpanan = $_POST['penyimpanan'];
    $warna = $_POST['warna'];
    $pembayaran = $_POST['pembayaran'];
    $tanggal = $_POST['tanggal'];

    $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$merk.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'image/'.$gambar_baru)){
            $result = mysqli_query($db, "INSERT INTO pembelian VALUES ('','$merk','$penyimpanan','$warna','$pembayaran','$tanggal','$gambar_baru')");

            if($result){
                header("Location:menubeli.php");
            }else{
                echo "gagal kirim";
            }
        }
    }
?>