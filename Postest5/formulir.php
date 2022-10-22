<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembelian</title>
    <link rel="stylesheet" href="pembelianstyle.css">
</head>
<body>
    <header>
        <h2>Menu Pemesanan</h2>
    </header>
    
    <div class="form-class">
        <h3>Buat Pesanan</h3><br>
        <form action="tambah.php" method="post">
            
            <label for="">Merk</label><br>
            <input type="text" name="merk" class="form-text"><br>
            
            <label for="">Penyimpanan</label><br>
            <input type="text" name="penyimpanan" class="form-text"><br>
            
            <label for="">Warna</label><br>
            <input type="text" name="warna" class="form-text"><br>
            
            <label for="">Pembayaran</label><br>
            <input type="text" name="pembayaran" class="form-text"><br>

            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>