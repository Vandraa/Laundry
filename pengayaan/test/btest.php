<?php
    // Mengambil data yang dikirimkan melalui POST
    @ $data1 = $_POST['data1'];
    @ $data3 = $_POST['data3'];

    // Mengarahkan untuk memilih paket terlebih dahulu dengan pesan
    //echo "<script>window.location = '../login.php?msg=Harap Pilih Paket Terlebih Dahulu!'</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="../assets/css/transaksi.css">
</head>
<body>

    <div>
        <?php
            // Menyertakan konten dari file "navbar.php"
            include 'navbar.php';
        ?>

        <div class="con-boxtran">
            <div class="boxtran">
                <div class="boxtran-set">
                    <!-- Form untuk memasukkan detail transaksi -->
                    <label for="transactionNumber">No Transaksi:</label>
                    <input type="text" placeholder="Masukan No Transaksi" name="notransaksi" aria-describedby="basic-addon1"><br>
                    
                    <div class="float-right">
                        <!-- Opsi tambahan paket -->
                        <label><input type="radio" id="tambahan" name="additionalPackage" value="0">Tidak ada Tambahan - Rp.0</label>
                        <label><input type="radio" id="tambahan" name="additionalPackage" value="10000">Pelembut - Rp. 10.000</label><br>
                    </div>
                    
                    <label for="transactionDate">Tanggal Transaksi:</label>
                    <input type="date" aria-label="Username" aria-describedby="basic-addon1">
                    <br>
                    
                    <label for="customerName">Nama Customer:</label>
                    <input type="text" placeholder="Masukan Nama Costumer" aria-describedby="basic-addon1">
                    <br>
                    
                    <label for="selectedPackage">Paket Pilihan:</label>
                    <input type="text" value="<?php echo $data1?>">
                    <br>
                    
                    <label for="packagePrice">Harga Paket:</label>
                    <input type="text" id="harga" value="<?php echo $data3?>" name="harga">
                    <br>
                </div>
                
                <!-- Tombol untuk menghitung total harga -->
                <button type="button" class="float-right btn" onclick="hitungTotalHarga()">Hitung</button>
            </div>
            
            <!-- Bagian tampilan output transaksi -->
            <div class="con-outtran">
                <div class="outtran">
                    <label>Total Harga:</label>
                    <input type="text" id="totalHarga" value="" readonly required>
                    
                    <label>Pembayaran:</label>
                    <input type="text" id="pembayaran"><br>
                    
                    <!-- Tombol untuk menghitung kembalian -->
                    <button type="button" class="btn-set btn-ml btn" onclick="hitungKembalian()">Hitung Kembalian</button>
                    
                    <label for="transactionChange">Kembalian:</label>
                    <input type="text" id="kembalian"><br>
                    
                    <!-- Tombol untuk menyimpan transaksi -->
                    <button type="button" class="btn-set btn-ml btn" onclick="simpan()">Simpan Transaksi</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Menyertakan konten footer dari file "footer.php"
        include 'footer.php';
    ?>
</body>
</html>
