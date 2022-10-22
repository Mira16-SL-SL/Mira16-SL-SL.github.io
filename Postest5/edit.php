<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pembelian WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $merk = $_POST['merk'];
        $penyimpanan = $_POST['penyimpanan'];
        $warna = $_POST['warna'];
        $pembayaran = $_POST['pembayaran'];

        $update = mysqli_query($db, "UPDATE pembelian SET merk='$merk', penyimpanan='$penyimpanan', warna='$warna', pembayaran='$pembayaran'WHERE id='$id' ");

        if($update){
            header("Location:menubeli.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU PEMESANAN</title>
    <link rel="stylesheet" href="pembelianstyle.css">
</head>
<body>
    <header>
        <h2>MENU PEMBELIAN</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Pesanan</h3><br>
        <form action="" method="post">
            
            <label for="">Merk</label><br>
            <input type="text" name="merk" class="form-text" value=<?=$row['merk'];?>><br>
            
            <label for="">Penyimpanan</label><br>
            <input type="text" name="penyimpanan" class="form-text" value=<?=$row['penyimpanan'];?>><br>
            
            <label for="">Warna</label><br>
            <input type="text" name="warna" class="form-text" value=<?=$row['warna'];?>><br>
            
            <label for="">Pembayaran</label><br>
            <input type="text" name="pembayaran" class="form-text" value=<?=$row['pembayaran'];?>><br>

            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>