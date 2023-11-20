<?php

    $datapaket = array(
        array("Daftar harga", "mobil avanza", "Rp. 235,1 juta", 'gambar1.png'), 
        array("Daftar harga", "mobil toyota sigra", "Rp. 135 juta", 'gambar2.png'),
        array("Daftar harga", "mobil brio", "Rp. 165,juta", 'gambar3.png'),
        array("Daftar harga", "mobil ayla", "134 juta", 'gambar4.png'),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Dashboard</title>
</head>
<body >
<nav class="navbar">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item" id="transaksi">
          <a class="nav-link active ms-5" href="transaksi.php">Transaksi</a>
        <li class="nav-item" id="logout">
          <a class="nav-link active position-absolute end-0" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<center>
  <img src="yosa.jpg" width="100%" style="border-radius: 15px; height: 300px;">
</center>
<h2>Daftar harga</h2><br>

<div class="container bg-body-secondary" >
  <div class="row">
    <?php foreach ($datapaket as $values =>$data) {?>
            <div class="col-md-3">
                <div class="data">
                  <div class="teksdata">
                    <p><?php echo $data[0]; ?></p>
                    <p><?php echo $data[1]; ?></p>
                    <p><?php echo $data[2]; ?></p>
                  </div>
                </div>
                <div class="pilihpaket">
                  <form action="transaksi.php" method="post">
                    <input type="hidden" name="data1" id="data" value="<?php echo $data[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $data[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $data[2] ?>">
                    <button style="width: 100%; border-radius: 10px; background-color: tomato yi; padding: 5px; border: 1px solid;">
                        Pilih Paket
                    </button>
                  </form>
                </div>
            </div>
    <?php } ?>
  </div>
</div>
<div class="footer">
        </div>
    </body>
</html>