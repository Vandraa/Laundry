<?php
    session_start();
    if(!isset($_SESSION['status_login'])) {
        echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/beranda.css">
    <title>Home</title>
</head>
<body style="background-color: #2C73D2;">

    <div class="container">

        <!-- navbar -->
        <?php include 'navbar.php'?>
        
        <!-- Bagian untuk menampilkan gambar header -->
        <div class="image">
            <img class="img" src="../assets/img/laundry2.jpg" alt="">
        </div>

        <!-- Judul halaman -->
        <div class="daf">
            <b>DAFTAR PAKET LAUNDRY</b>
        </div>

        <div class="main-content">
            <?php
                // Array berisi informasi tentang paket laundry
                $datapaket = array( 
                    array("Paket A", "cuci kering biasa", 40000),   
                    array("Paket B", "Cuci kering dan lipat", 45000),   
                    array("Paket C", "Cuci kering, setrika, dan lipat", 50000),   
                    array("Paket D", "Cuci kering, setrika, pengharum, lipat", 55000) 
                ); 
            ?>

            <div class="container">
                <div class="row">
                    <?php
                        // Menampilkan paket-paket laundry dengan menggunakan perulangan foreach
                        foreach ($datapaket as $values => $data) {
                    ?>
                            <div class="col-md-3">
                                <div class="data-paket">
                                    <div class="teksdata">
                                        <!-- Menampilkan informasi paket -->
                                        <p><?php echo $data[0]; ?></p>
                                        <p><?php echo $data[1]; ?></p>
                                        <p><?php echo "Rp. " . $data[2]; ?></p>
                                    </div>
                                </div>
                                <div class="pilihpaket">
                                    <!-- Form untuk memilih paket dan mengirim data ke halaman transaksi -->
                                    <form action="transaksi.php" method="post">
                                         <input type="hidden" name="data1" id="data" value="<?php echo $data[0] ?>">
                                        <input type="hidden" name="data2" id="data" value="<?php echo $data[1] ?>">
                                        <input type="hidden" name="data3" id="data" value="<?php echo $data[2] ?>">
                                        <button class="btn-a">
                                            Pilih Paket
                                        </button>
                                    </form>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Memasukkan konten footer yang terpisah
        include 'footer.php'
    ?>
</body>
</html>
